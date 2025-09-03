<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
class NumberConverter {
    public function decimalToBinary($decimal) {
        return decbin($decimal);
    }

    public function decimalToOctal($decimal) {
        return decoct($decimal);
    }

    public function decimalToHexadecimal($decimal) {
        return dechex($decimal);
    }

    public function binaryToDecimal($binary) {
        return bindec($binary);
    }

    public function octalToDecimal($octal) {
        return octdec($octal);
    }

    public function hexadecimalToDecimal($hexadecimal) {
        return hexdec($hexadecimal);
    }

    public function binaryToOctal($binary) {
        $decimal = $this->binaryToDecimal($binary);
        return $this->decimalToOctal($decimal);
    }

    public function binaryToHexadecimal($binary) {
        $decimal = $this->binaryToDecimal($binary);
        return $this->decimalToHexadecimal($decimal);
    }

    public function octalToBinary($octal) {
        $decimal = $this->octalToDecimal($octal);
        return $this->decimalToBinary($decimal);
    }

    public function octalToHexadecimal($octal) {
        $decimal = $this->octalToDecimal($octal);
        return $this->decimalToHexadecimal($decimal);
    }

    public function hexadecimalToBinary($hexadecimal) {
        $decimal = $this->hexadecimalToDecimal($hexadecimal);
        return $this->decimalToBinary($decimal);
    }

    public function hexadecimalToOctal($hexadecimal) {
        $decimal = $this->hexadecimalToDecimal($hexadecimal);
        return $this->decimalToOctal($decimal);
    }

    // Convierte un número de cualquier base a otra base
    public function convertir($numero, $baseOrigen, $baseDestino) {
        // Primero convierte a decimal
        $decimal = intval($numero, $this->baseToInt($baseOrigen));
        // Luego convierte de decimal a la base destino
        switch ($baseDestino) {
            case 'decimal':
                return strval($decimal);
            case 'binary':
                return decbin($decimal);
            case 'octal':
                return decoct($decimal);
            case 'hexadecimal':
                return dechex($decimal);
            default:
                return "Base destino no soportada";
        }
    }

    // Convierte el nombre de la base a su valor numérico
    private function baseToInt($base) {
        switch ($base) {
            case 'decimal': return 10;
            case 'binary': return 2;
            case 'octal': return 8;
            case 'hexadecimal': return 16;
            default: return 10;
        }
    }
}
// Procesar el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['number'] ?? '';
    $baseOrigen = $_POST['base'] ?? '';
    $baseDestino = $_POST['baseDestino'] ?? ''; // Nuevo campo para seleccionar la base destino

    $converter = new NumberConverter();

    // Mostrar solo la conversión seleccionada
    $resultado = $converter->convertir($numero, $baseOrigen, $baseDestino);
    echo '<div class="result"><h2>Resultado de la conversión</h2>';
    echo "<p>El número <strong>$numero</strong> en base <strong>$baseOrigen</strong> convertido a <strong>$baseDestino</strong> es: <strong>" . strtoupper($resultado) . "</strong></p></div>";
    echo '<a href="index.php">Volver</a>';
}
?>
</body>
</html>

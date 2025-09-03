<?php
// Clase para realizar operaciones básicas
class SimpleCalculator {
    // Suma dos números
    public function add($a, $b) {
        return $a + $b;
    }

    // Resta dos números
    public function subtract($a, $b) {
        return $a - $b;
    }

    // Multiplica dos números
    public function multiply($a, $b) {
        return $a * $b;
    }

    // Divide dos números
    public function divide($a, $b) {
        if ($b == 0) {
            return "Error: División por cero.";
        }
        return $a / $b;
    }
}

// Procesar el formulario cuando se envía por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores enviados desde el formulario
    $num1 = $_POST['num1'] ?? '';
    $num2 = $_POST['num2'] ?? '';
    $operation = $_POST['operation'] ?? '';

    // Instanciar la calculadora
    $calculator = new SimpleCalculator();

    // Convertir los números a decimal
    $num1 = intval($num1);
    $num2 = intval($num2);

    // Realizar la operación seleccionada
    switch ($operation) {
        case 'add':
            $result = $calculator->add($num1, $num2);
            $opText = "Suma";
            break;
        case 'subtract':
            $result = $calculator->subtract($num1, $num2);
            $opText = "Resta";
            break;
        case 'multiply':
            $result = $calculator->multiply($num1, $num2);
            $opText = "Multiplicación";
            break;
        case 'divide':
            $result = $calculator->divide($num1, $num2);
            $opText = "División";
            break;
        default:
            $result = "Operación no válida";
            $opText = "";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    // Mostrar solo el resultado de la operación
    echo '<div class="result"><h2>Resultado de la ' . $opText . '</h2><p>' . $result . '</p></div>';
    echo '<a href="index.php">Volver</a>';
?>
</body>
</html>
<?php
}
?>

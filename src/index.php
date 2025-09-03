<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor y Calculadora de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Conversor de números y calculadora</h1>
    
    <h2>Conversión de números</h2>
    <form action="conversiones.php" method="post">
        <label for="number">Ingrese un número:</label>
        <input type="text" id="number" name="number" required>
        
    <label for="baseDestino">Convertir a:</label>
    <select id="baseDestino" name="baseDestino">
    <option value="decimal">Decimal (10)</option>
    <option value="binary">Binario (2)</option>
    <option value="octal">Octal (8)</option>
    <option value="hexadecimal">Hexadecimal (16)</option>
    </select>
        
        <button type="submit">Convertir</button>
    </form>

    <h2>Calculadora</h2>
    <form action="calculadora.php" method="post">
        <label for="num1">Número 1:</label>
        <input type="text" id="num1" name="num1" required>
        
        <label for="num2">Número 2:</label>
        <input type="text" id="num2" name="num2" required>
        
        <label for="operation">Seleccione la operación:</label>
        <select id="operation" name="operation">
            <option value="add">Sumar</option>
            <option value="subtract">Restar</option>
            <option value="multiply">Multiplicar</option>
            <option value="divide">Dividir</option>
        </select>
        
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
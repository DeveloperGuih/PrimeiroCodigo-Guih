<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2: Metros para Centímetros</title>
</head>
<body>
    <h2>Questão 2: Metros para Centímetros</h2>
    <form method="post">
        Digite um Número: <input type="number" name="metros" required>
        <input type="submit" value="Calcular">
    </form>
    <main>
        <?php
            if ($_POST) {
                $metros = $_POST['metros'];
                $centimetros = $metros * 100;
                echo "O valor em centímetros é: $centimetros cm";
            }
        ?>
    </main>
</body>
</html>
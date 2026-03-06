<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6: Três números inteiros em ordem decrescente</title>
</head>
<body>
    <h2>Questão 6: Três números inteiros em ordem decrescente</h2>
    <form method="post">
        Digite o primeiro número inteiro: <input type="number" name="numero1" required><br>
        Digite o segundo número inteiro: <input type="number" name="numero2" required><br>
        Digite o terceiro número inteiro: <input type="number" name="numero3" required><br>
        <input type="submit" value="Ordenar Decrescente">
    </form>
    <main>
        <?php
            if ($_POST) {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $numero3 = $_POST['numero3'];
                $numeros = [$numero1, $numero2, $numero3];
                rsort($numeros);
                echo "Os números em ordem decrescente são: " . implode(", ", $numeros);
            }
        ?>
    </main>
</body>
</html>
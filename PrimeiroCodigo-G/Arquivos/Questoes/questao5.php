<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5: Maior de três números inteiros</title>
</head>
<body>
    <h2>Questão 5: Maior de três números inteiros</h2>
    <form method="post">
        Digite o primeiro número inteiro: <input type="number" name="numero1" required><br>
        Digite o segundo número inteiro: <input type="number" name="numero2" required><br>
        Digite o terceiro número inteiro: <input type="number" name="numero3" required><br>
        <input type="submit" value="Verificar Maior">
    </form>
    <main>
        <?php
            if ($_POST) {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $numero3 = $_POST['numero3'];
                $maior = max($numero1, $numero2, $numero3);
                echo "O maior número é: $maior";
            }
        ?>
    </main>
</body>
</html>
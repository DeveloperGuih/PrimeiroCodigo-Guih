<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 7: Calcular fatorial de número inteiro</title>
</head>
<body>
    <h2>Questão 7: Calcular fatorial de número inteiro</h2>
    <form method="post">
        Digite um número inteiro: <input type="number" name="numero" required>
        <input type="submit" value="Calcular Fatorial">
    </form>
    <main>
        <?php
            if ($_POST) {
                $numero = $_POST['numero'];
                $fatorial = 1;
                for ($i = 1; $i <= $numero; $i++) {
                    $fatorial *= $i;
                }
                echo "O fatorial de $numero é: $fatorial";
            }
        ?>
    </main>
</body>
</html>
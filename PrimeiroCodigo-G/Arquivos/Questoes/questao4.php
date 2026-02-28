<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4: Tabuada de número inteiro</title>
</head>
<body>
    <h2>Questão 4: Tabuada de número inteiro</h2>
    <form method="post">
        Digite um número inteiro: <input type="number" name="numero" required>
        <input type="submit" value="Gerar Tabuada">
    </form>
    <main>
        <?php
            if ($_POST) {
                $numero = $_POST['numero'];
                echo "<h3>Tabuada do número $numero:</h3>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "$numero x $i = " . ($numero * $i) . "<br>";
                }
            }
        ?>
    </main>
</body>
</html>
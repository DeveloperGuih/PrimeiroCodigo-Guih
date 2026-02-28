<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9: Calcular tempo de vida em dias</title>
</head>
<body>
    <h2>Questão 9: Calcular tempo de vida em dias</h2>
    <form method="post">
        Digite sua idade: <input type="number" name="idade" required>
        <input type="submit" value="Calcular Dias de Vida">
    </form>
    <main>
        <?php
            if ($_POST) {
                $idade = $_POST['idade'];
                $dias = $idade * 365;
                echo "Você viveu aproximadamente $dias dias.";
            }
        ?>
    </main>
</body>
</html>
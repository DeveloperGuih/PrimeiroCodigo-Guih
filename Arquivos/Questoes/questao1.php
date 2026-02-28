<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <h2>Questão 1: Antecessor de um Número</h2>
    <form method="post">
        Digite um Número: <input type="number" name="numero" required>
        <input type="submit" value="Calcular">
    </form>
    <main>
        <?php
            if ($_POST) {
                $numero = $_POST['numero'];
                $antecessor = $numero - 1;
                echo "O antecessor de $numero é: $antecessor";
            }
        ?>
    </main>
</body>
</html>
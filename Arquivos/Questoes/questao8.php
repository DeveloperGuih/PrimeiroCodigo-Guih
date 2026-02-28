<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8: Números ímpares entre 1 e 50</title>
</head>
<body>
    <h2>Questão 8: Números ímpares entre 1 e 50</h2>
    <main>
        <?php
            echo "Números ímpares entre 1 e 50:<br>";
            for ($i = 1; $i <= 50; $i++) {
                if ($i % 2 != 0) {
                    echo "$i<br>";
                }
            }
        ?>
    </main>
</body>
</html>
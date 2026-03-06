<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10: Converter segundos em horas, minutos e segundos</title>
</head>
<body>
    <h2>Questão 10: Converter segundos em horas, minutos e segundos</h2>
    <form method="post">
        Digite o número de segundos: <input type="number" name="segundos" required>
        <input type="submit" value="Converter">
    </form>
    <main>
        <?php
            if ($_POST) {
                $segundos = $_POST['segundos'];
                $horas = floor($segundos / 3600);
                $minutos = floor(($segundos % 3600) / 60);
                $segundos_restantes = $segundos % 60;
                echo "Horas: $horas, Minutos: $minutos, Segundos: $segundos_restantes";
            }
        ?>
    </main>
</body>
</html>
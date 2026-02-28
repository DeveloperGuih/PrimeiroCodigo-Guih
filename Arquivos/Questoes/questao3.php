<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3: Calcular salário</title>
</head>
<body>
    <h2>Questão 3: Calcular salário</h2>
    <form method="post">
        Digite o salário por hora: <input type="number" name="salarioporhora" required>
        Digite o número de horas trabalhadas: <input type="number" name="horastrabalhadas" required>
        <input type="submit" value="Calcular">
    </form>
    <main>
        <?php
            if ($_POST) {
                $salarioporhora = $_POST['salarioporhora'];
                $horastrabalhadas = $_POST['horastrabalhadas'];
                $salario = $salarioporhora * 30 * $horastrabalhadas;
                echo "O salário é: R$ $salario";
            }
        ?>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div>
            <label for="height">Altura</label>
            <input type="text" id="height" name="height">
        </div>
        <div>
            <label for="weight">Peso</label>
            <input type="text" id="weight" name="weight">
        </div>

        <button type="submit">Enviar</button>
    </form>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = (float) $_POST["weight"];
            $altura = (float) $_POST["height"];

            $imc = $peso / ($altura ** 2);
            $formated_imc = number_format($imc, 2, '.', '');

            echo "<p>Seu IMC é:<br>$formated_imc</p>";
        }
    ?>
</body>
</html>
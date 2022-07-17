<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body class="vw-100 vh-100 d-flex align-items-center justify-content-center p-4">
    <form 
        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" 
        method="post"
        class="container-sm d-flex flex-column gap-4 p-4 border border-primary rounded-4"
    >
        <h1>Calculadora de IMC</h1>
        <div class>
            <label for="height" class="form-label">Altura</label>
            <input type="text" id="height" name="height" class="form-control">
        </div>
        <div>
            <label for="weight" class="form-label">Peso</label>
            <input type="text" id="weight" name="weight" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $peso = (float) $_POST["weight"];
                $altura = (float) $_POST["height"];

                $imc = $peso / ($altura ** 2);
                $formated_imc = number_format($imc, 2, '.', '');

                echo '<p '.'class="pt-2 w-100 border-top border-gray">'."Seu IMC é:<br>$formated_imc</p>";
            }
        ?>
    </form>
</body>
</html>
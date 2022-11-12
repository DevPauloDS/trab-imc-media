<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho IMC e MÉDIA </title>
    <style>
        body {
            background-color: black;
            color: cyan;
            text-align: center;
        }
         div{
            background-color: cyan;
            color: blue;
         }
    </style>
</head>

<body>
    <br><br><br>
    <h1>Trabalho IMC e MÉDIA</h1>
    <br><br>

    <div>
        <br>
        <a href="index.html">Página Inicial</a>
        <br><br>
        <a href="form_imc.php">Formulário de Cálculo IMC</a>
        <br><br>
    </div>
    <br><br><br>

    <fieldset>
        <legend>Seus dados:</legend>
        <form action="" method="POST">
            <label for="nota1">Qual a sua 1° Nota?</label>
            <input type="number" name="nota1" step="0.01">
            <br><br>
            <laber for="nota2">Qual a sua 2° Nota?</laber>
            <input type="number" name="nota2" step="0.01">
            <br><br>
            <input type="submit" name="enviar" value="Calcular MÉDIA">
        </form>

    </fieldset>
    <br><br><br><br>


    <?php
    if (isset($_POST["enviar"])) {

        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];

        function media($nota1, $nota2)
        {
            $nota1 = str_replace(',', '.', $nota1);
            $nota2 = str_replace(',', '.', $nota2);
            $result = ($nota1 + $nota2) / 2;
            return $result;
        }

        echo "Sua MÉDIA é: " . media($nota1, $nota2) . "<br><br><br>";

        if (media($nota1, $nota2) < 4) {
            echo "Situação: Reprovado.";
        } elseif (media($nota1, $nota2) >= 4 && media($nota1, $nota2) < 6) {
            echo "Situação: Exame Final.";
        } elseif (media($nota1, $nota2) >= 6) {
            echo "Situação: Aprovado.";
        } else {
            echo "Insira um valor válido";
        }
    }
    ?>
</body>

</html>
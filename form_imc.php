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
    <a href="form_notas.php">Formulário de MÉDIA de NOTAS</a>
    <br><br>
    </div>

    <br><br><br>

    <fieldset>
        <legend>Seus dados:</legend>
        <form action="" method="POST">
            <label for="peso">Qual seu peso?</label>
            <input type="number" name="peso" step="0.01">
            <br><br>
            <laber for="altura">Qual a sua altura?</laber>
            <input type="number" name="altura" step="0.01">
            <br><br>
            <input type="submit" name="enviar" value="Calcular IMC">
        </form>

    </fieldset>
        <br><br><br><br>
    <?php

        if(isset($_POST["enviar"])){

            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
        
            function imc($altura, $peso)
            {
                $altura = str_replace(',', '.', $altura);
                $peso = str_replace(',', '.', $peso);
                $result = $peso / $altura ** 2;
                return $result;
            }
        
            echo "O seu IMC é: " . imc($altura, $peso)."<br><br><br>";

           if(imc($altura, $peso) < 17){
                echo "Situação: Muito abaixo do peso.";
           } elseif(imc($altura, $peso) >= 17 && imc($altura, $peso) <=18.49){
                echo "Situação: Abaixo do peso.";
           } elseif (imc($altura, $peso) >= 18.50 && imc($altura, $peso) <=24.99 ){
                echo "Situação: Peso Normal.";
           } elseif(imc($altura, $peso) >= 25 && imc($altura, $peso)<= 29){
                echo "Situação: Acima do peso.";
           } elseif(imc($altura, $peso)>= 30 && imc($altura, $peso)<= 34.99){
                echo "Situação: Obesidade I";
           } elseif (imc($altura, $peso)<= 35 && imc($altura, $peso) <= 39){
                echo "Situação: Obesidade II(severa)";
           } elseif (imc($altura, $peso) >=40){
                echo "Situação: Obesidade III (mórbida)";
           } else {
                echo "Digite um valor válido";
           }
        }
        ?>
         
</body>

</html>
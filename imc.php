<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "calculadora de imc uwu";
    $peso=60;
    $altura=1.70;
    
    $altu=$altura*$altura;
    $imc=$peso/$altu;
    $imc=round($imc, 2);
    echo "<br> su imc es de ".$imc."%";
    if ($imc<18.5){
        echo "<br> usted esta en bajo peso";
    } else
    if ($imc<24.9 && $imc>18.5){
        echo "<br> usted esta en peso normal";
    } else 
    if ($imc<29.9 && $imc>25){
        echo "<br> usted esta en sobrepeso";
    } else if ($imc>=30){
        echo "<br> usted esta obeso";
    } else 
    ?>
</body>
</html>
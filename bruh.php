<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "calculadora de edad uwu";
    $edad = 29;
    
    $dias=$edad*365;
    $horas=$dias*24;
    $minutos=$horas*60;
    $sem=$dias/7;
    $sem=round($sem, 2);
    $horap=($dias-(365*5))*3;

    echo "<br> usted tiene " .$edad." años";
    echo "<br> usted tiene " .$dias." dias";
    echo "<br> usted tiene " .$horas." horas";
    echo "<br> y usted tiene " .$minutos." minutos vividos";
    echo "<br> y usted tambien tiene " .$sem." semanas vividas";
    echo "<br> y tiene " .$horap." horas de pantalla";
    ?>
</body>
</html>
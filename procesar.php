<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <body>
        
    <div class="calc">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre1 = $_POST["nombre1"];
    $nombre2 = $_POST["nombre2"];
    $compa = 0;
    $alias = "";

    if ($nombre1 == $nombre2) {
        $compa=100;
        echo ("son el mismo nombre uwu");
        echo("<br>".$compa."%");
    } else {
        $a1= substr($nombre1,0,2);
        $a2= substr($nombre2,0,2);
        $alias= $a1.$a2;
        $compa= rand(0,50);
        $compa+= strlen($nombre1)+strlen($nombre2);
        if (str_contains($nombre1, "a")){
            $compa+=15;
        }
        if (str_contains($nombre2, "a")){
            $compa+=15;
        }
        echo ("la compatibilidad entre ".$nombre1." y ".$nombre2." es de ".$compa."%");
        echo ("<br>su apodo seria ".$alias);
    }
}
?>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frases cursis</title>
</head>
<body>
    <h1>Escriba una frase de amor para calcular su nivel de cursileria</h1>
    <form action="frases.php" method="post">
        <label for="frase">Frase de amor:</label><br>
        <input type="text" id="frase" name="frase" required><br><br>
        <input type="submit" value="Calcular cursileria">
    </form>
     <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $frase = $_POST['frase'] ?? 0;
    $cursileria = strlen($frase);
    if (str_contains($frase, 'amorcito') || str_contains($frase, 'cielito') || str_contains($frase, 'bomboncito')) {
        $cursileria += 20;
    }
    if (str_contains($frase, 'amor') || str_contains($frase, 'corazón') || str_contains($frase, 'cariño')) {
        $cursileria += 10;
    }
    if (str_contains($frase, 'aprecio') || str_contains($frase, 'leal') || str_contains($frase, 'beso')) {
        $cursileria += 5;
    }
    $cursileria=$cursileria+random_int(0, 20);
    if($cursileria>100){
        $cursileria=100;
    }
    echo "<h2>Tu frase fue: " . $frase . "<br><br></h2>";
    if($cursileria<=100 && $cursileria>70){
       echo "<h2>Tu nivel de cursileria es: " . $cursileria . "%. <br><br>Eres super cringe bro</h2>";
    }
    if($cursileria<=70 && $cursileria>40){
       echo "<h2>Tu nivel de cursileria es: " . $cursileria . "%. <br><br>Eres muy cursi</h2>";
    }
    if($cursileria<=40){
       echo "<h2>Tu nivel de cursileria es: " . $cursileria . "%. <br><br>Esa frase esta bien random :V</h2>";
    }

}
    ?>
</body>
</html>
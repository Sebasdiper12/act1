<?php 
    //$fecha= new Date();
    session_start();
    if((isset($_POST['fechaelegida']) && !empty($_POST["fechaelegida"]))
    &&(isset($_POST["edad"])&&!empty($_POST["edad"]))){
        $edad = filter_input(INPUT_POST,"edad",FILTER_VALIDATE_INT);
        $fechaelegida = filter_input(INPUT_POST,"fechaelegida",FILTER_SANITIZE_STRING);
        echo $edad;
        echo $fechaelegida;
    }
    if (isset($_SESSION["username"])){
        $username = $_SESSION["username"];
        echo $username;
    }
    else echo "Nobody";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
</head>
<body>
    <form action="<?= htmlentities($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="fechaelegida">Fecha elegida</label>
        <input type="date" name="fechaelegida" value="" min="2019-01-01" max="2019-12-31">
        <label for="edad">Edad</label>
        <input type="number" name="edad">
        <input type="submit" value="Enviar">
    </form>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
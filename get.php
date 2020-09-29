<?php

declare(strict_types=1);
ini_set('display_errors','On');

if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
    echo "Tu nombre es: ".$nombre;
}
else{
    echo "Pon nombre por favor...";
}
echo '<pre>';
print_r($_SERVER);
echo '</pre>'
?>
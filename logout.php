<?php
    //iniciar y mantener sesión
    session_start();
    //eliminar valores a variables session
    session_unset();
    //se destruye la variable sessión y la variable cookie
    session_destroy();
    //redirige a post.php
    header("Location:post.php");

?>

<?php
$usuario= $_POST ["usuario"];
$contrasenia=$_POST ["pass"];

$ckusuario="Admin";
$ckpass=1234;
if ($usuario==$ckusuario & $ckpass==$contrasenia){
    echo "Acceso concedido";
}
else{
    echo "Acceso denegado";
    header("location:https://crehana-blog.imgix.net/media/filer_public/08/ee/08eee73d-4589-4bfb-8e2e-b23a29528b73/ejemplos_de_paginas_de_error_404_mcdonalds.jpg?auto=format&q=50");
}

?>
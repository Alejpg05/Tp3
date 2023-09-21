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
    header("location:https://imgs.search.brave.com/wmg6aPtUNSAsYzWTEz8PoDp2qMCdiaTR_o-nUHj7PFg/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTI5/MDczNDc3Ny92ZWN0/b3IvNDA0LWVycm9y/LXBhZ2UtdmVjdG9y/LWRlc2lnbi5qcGc_/cz02MTJ4NjEyJnc9/MCZrPTIwJmM9c0Q4/RW5ndlFRSEotblRV/eFRUWkFLY04xYkJh/MlhjbFRUZkYyajQt/V0dpUT0");
}

?>

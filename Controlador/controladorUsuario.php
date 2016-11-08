<?php

include_once '../dao/Operaciones.php';

if(Operaciones::comprobarUsuario()==true){
    header("Location: ../Vista/Login.php");
}
if(Operaciones::comprobarUsuario()==false){
    header("Location: ../Vista/RegistrarUsuario.php");
}

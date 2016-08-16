<?php
include 'phpclass/conectar.php';
include 'phpclass/persona.php';

if(isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}

if(isset($_POST['primerapellido'])) {
    $primerapellido = $_POST['primerapellido'];
}

if(isset($_POST['correo'])) {
    $correo = $_POST['correo'];
}
if(isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
}
if(isset($_POST['clave'])) {
    $clave = $_POST['clave'];
}

$persona = new Persona();
$usuario = new Persona();

if($persona->InsertarPersona($nombre, $descripcion, $correo)) {
    header('Location: login.php');
} else {
    header('Location: index.php?error=true');
}


if($usuario->InsertarUsuario($clave, $usuario, 5)) {

} else {

}
<?php
include 'phpclass/conectar.php';
include 'phpclass/persona.php';

if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

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
$telefono = new Persona();
$enfasis= new Persona();
$estudio = new Persona();
$proyecto = new Persona();
$galeria = new Persona();
$pasatiempo = new Persona();

if($persona->InsertarPersona($nombre, $descripcion, $correo)) {
    header('Location: portafolioEdit.php');
} else {
    header('Location: index.php?error=true');
}


if($usuario->InsertarUsuario($clave, $usuario, 6)) {

} else {

}
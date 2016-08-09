<?php
include '../phpclass/conectar.php';
include '../phpclass/producto.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
$con = new Persona();
$persona = $con->getPersona('1');
echo json_encode($persona);

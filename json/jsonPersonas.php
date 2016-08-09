<?php
include '../phpclass/conectar.php';
<<<<<<< HEAD
include '../phpclass/persona.php';
=======
include '../phpclass/producto.php';
>>>>>>> origin/master

$con = new Persona();
$personas = $con->getPersonas();
echo json_encode($personas);


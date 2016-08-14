<?php
include '../phpclass/conectar.php';
include '../phpclass/persona.php';

$con = new Persona();
$personas = $con->getPersonas();


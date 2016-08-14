<?php
include '../phpclass/conectar.php';
include '../phpclass/persona.php';
header('Content-Type: text/html; charset=utf-8');

$con = new Persona();
$personas = $con->getPersonas();

print_r(json_encode($personas,JSON_UNESCAPED_UNICODE));

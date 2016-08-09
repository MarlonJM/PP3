<?php  

if(isset($_GET['id_persona'])) {
    $id = $_GET['id_persona'];
}

$persona = new Persona();
$resul = $persona->getPersona($id);
?>
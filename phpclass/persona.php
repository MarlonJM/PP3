<?php 
/**
* 
*/
class Persona extends Conectar{
	
	function __construct(){
		# code...
	}

	public $resultado = array();

    public function getPersonas() {
        try {

            $sql = 'SELECT p.*, `e`.`descripcion` FROM  `persona` p INNER JOIN `enfasis` e ON `p`.`id_enfasis` = `e`.`id_enfasis`';
            $query = mysqli_query(self::conectar(), $sql);

            while ($queryData = mysqli_fetch_assoc($query)) {
                array_push($this->resultado, $queryData);
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getPersona($Id) {
        try {

            $sql = 'SELECT p.*, `e`.`descripcion` FROM  `persona` p INNER JOIN `enfasis` e ON `p`.`id_enfasis` = `e`.`id_enfasis` WHERE `p`.`id_persona`='.$Id;

            $sql = "SELECT p.*, `e`.`descripcion` FROM  `persona` p INNER JOIN `enfasis` e ON `p`.`id_enfasis` = `e`.`id_enfasis` WHERE id_persona = ".$Id;
            $query = mysqli_query(self::conectar(), $sql);

            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado = $queryData;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }
    
    public function getTelefono($Id) {
        try {
            $sql = "SELECT t.telefono, tp.descripcion FROM telefono t INNER JOIN tipoTelefono tp
            ON t.id_tipoTelefono = tp.id_tipoTelefono WHERE id_persona = ".$Id;
            $query = mysqli_query(self::conectar(), $sql);

            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado = $queryData;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }


    public function updatePersona($id,$nombre, $apellido1, $apellido2, $fechaNacimiento)
    {
        if ($id != '' && $nombre != '' && $apellido1 != '' && $apellido2 != '' && $fechaNacimiento != '' ) {
            try {
                $sql = "UPDATE persona SET `nombre`='" . $nombre ."', `apellido1`='" . $apellido1 ."', `apellido2`='" . $apellido2 ."', `fechaNacimiento` ='".$fechaNacimiento."' WHERE `id`=" . $id ;
                return mysqli_query(self::conectar(), $sql);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }

    public function updateEnfasis($id,$descripcion)
    {
        if ($id != '' && $descripcion != '' ) {
            try {
                $sql = "UPDATE enfasis e SET `descripcion`='" . $descripcion ."' WHERE id_enfasis = ".$id;
                return mysqli_query(self::conectar(), $sql);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }

    // public function deleteProducto($id)
    // {
    //     if ($id != '') {
    //         try {
    //             $sql = "DELETE FROM productos WHERE `id`=" . $id ;
    //             return mysqli_query(self::conectar(), $sql);
    //         } catch (Exception $e) {
    //             echo $e->getMessage();
    //         	exit;
    //         }
    //     }
    // }

    /*SELECT `t`.`telefono`, `tp`.`descripcion`
FROM `telefono` t
INNER JOIN `tipoTelefono` tp
ON t.id_tipoTelefono = tp.id_tipoTelefono
WHERE t.id_persona = 1*/
}
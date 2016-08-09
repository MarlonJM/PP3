<?php 
/**
* 
*/
class Enfasis extends Conectar{
	
	function __construct(){
		# code...
	}

	public $resultado = array();


    public function getEnfasis($ID_Enfasis) {
        try {
            $sql = "SELECT * FROM Enfasis WHERE id_enfasis =" . $ID_Enfasis;
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

    // public function updateProducto($nombre, $descripcion, $id)
    // {
    //     if ($id != '' && $nombre != '' && $descripcion != '') {
    //         try {
    //             $sql = "UPDATE productos SET `nombre`='" . $nombre ."', `descripcion`='" . $descripcion . "' WHERE `id`=" . $id ;
    //             return mysqli_query(self::conectar(), $sql);
    //         } catch (Exception $e) {
    //             echo $e->getMessage();
    //         	exit;
    //         }
    //     }
    // }

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
}
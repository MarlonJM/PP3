<?php

    class Sesion extends Conectar
    {

        public $resultado = array();

        public function verificarUserPass($user, $pass) {
            try {
                $sql = "SELECT p.id_persona, u.usuario, u.clave FROM usuario u INNER JOIN persona p on u.usuario = p.usuario WHERE u.usuario = '" . $user . "' AND u.clave = '" . $pass ."'";
                $query = mysqli_query(self::conectar(),$sql);

                while ($queryData = mysqli_fetch_assoc($query)) {
                    $this->resultado = $queryData;
                }
                return $this->resultado;
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }

        public function validarLogin($user, $pass) {

            $result = $this->verificarUserPass($user,$pass);

            if(!empty($result)){

                session_start();

                $_SESSION['id_persona'] = $result['id_persona'];
                $_SESSION['usuario'] = $result['usuario'];
                $_SESSION['clave'] = $result['clave'];

                //agregar url de la pagina editar portafolio
                header("location: ver-session-prueba.php?right");

            }else{
                header("Location: login.php?error=datos-incorrectos");
            }

        }

        public function cierreSesion() {
            session_start();
            session_destroy();

            header("Location: login.php");
        }

    }
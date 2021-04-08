<?php
    include_once 'registro_BD.php';
    
    $res = new stdClass();
    $res->inserted = true; //Formato objeto con propiedad deleted (por defecto a false)
    $res->message = 'Error al registrar usuario'; //Mensaje en caso de error

    try{
        $datoscrudos = file_get_contents("php://input"); //Leemos los datos
        $datos = json_decode($datoscrudos);
        if (isset($datos))
        {
            DB::addUser($datos->usuario, $datos->dni, $datos->password, $datos->correo, $resultado);
            if (isset($resultado))
            {
                $res->message = 'Usuario insertado.';
            } else {
                $res->inserted = false;
                $res->message = 'Usuario no insertado.';
            }
        }
    }
    catch(Exception $e){
        //En caso de error se envia la información de error al navegador
        $res->inserted = false;
        $res->message = 'Se ha producido una excepción en el servidor: '.$e->getMessage(); 
    }
    header('Content-type: application/json');
    echo json_encode($res);
?>
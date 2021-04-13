<?php
    include_once 'vendor/database/usuarios.php';
    
    $res = new stdClass();
    $res->inserted = true; //Formato objeto con propiedad deleted (por defecto a false)
    $res->message = 'Error al registrar usuario'; //Mensaje en caso de error

        $datoscrudos = file_get_contents("php://input"); //Leemos los datos
        $datos = json_decode($datoscrudos);
        if (isset($datos))
        {
            $resultado = Usuarios::addUser($datos->usuario, $datos->dni, $datos->password, $datos->correo);
            if ($resultado === null) {
                $response_array['status'] = 'error';
            } else {
                $response_array['status'] = 'success';
            }
        }

    header('Content-type: application/json');
    echo json_encode($res);
?>
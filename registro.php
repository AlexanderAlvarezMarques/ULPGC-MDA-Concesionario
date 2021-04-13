<?php
    include_once 'vendor/database/usuarios.php';
    
    $res = new stdClass();
    $res->inserted = true; //Formato objeto con propiedad deleted (por defecto a false)
    $res->message = 'Error al registrar usuario'; //Mensaje en caso de error

    try{
        $datoscrudos = file_get_contents("php://input"); //Leemos los datos
        $datos = json_decode($datoscrudos);
        if (isset($datos))
        {
            $resultado = Usuarios::addUser($datos->usuario, $datos->dni, $datos->password, $datos->correo);
            if (isset($resultado))
            {
                echo "<script type='text/javascript'>alert('Usuario añadido')</script>";
            } else {
                echo "<script type='text/javascript'>alert('Usuario no añadido')</script>";
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
<?php

require_once("../models/model-usuario.php");

if ($_POST) {

    $id   = $_POST["id"];
    $tipo = $_POST["tipo"];
    //print_r($_POST);
    //die();

    // guardar los datos del formulario en el modelo
    $usuario->values[] = $_POST["firtsname"];
    $usuario->values[] = $_POST["lastname"];
    $usuario->values[] = $_POST["country"];
    $usuario->values[] = $_POST['email'];
    $usuario->values[] = $_POST['gender'];
    $usuario->values[] = $_POST['username'];
    $usuario->values[] = $_POST['password'];
    $usuario->values[] = $_POST['ano'+'-'+'mes'+'-'+'dia'];
    $usuario->values[] = $_POST['tipousuario'];

    if ($tipo == 'nuevo') {
        //$db->debug();
        $usuario->insert();
        //die();
        header("location:../?page=adm-start");

    } elseif ($tipo == 'actualizar') {
        //$db->debug();
        $usuario->update($id);
        //die();
        header("location:../?page=adm-start");
    }
    elseif ($tipo == 'borrar') {
        //$db->debug();
        $usuario->deleteOne($id);
        //die();
        header("location:../?page=adm-start");
    }
}

?>
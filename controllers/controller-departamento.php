<?php

require_once("../models/model-departamento.php");

if ($_POST) {

    $id   = $_POST["id"];
    $tipo = $_POST["tipo"];
    //print_r($_POST);
    //die();

    // guardar los datos recibidos del formulario en el objeto del modelo
    $departamento->values[] = $_POST["dep"];
    $departamento->values[] = $_POST["correo"];
    $departamento->values[] = $_POST["tel"];
    $departamento->values[] = $_POST["ext"];
    $departamento->values[] = $_POST["jefe"];

    if ($tipo == 'nuevo') {
        //$db->debug();
        $departamento->insert();
        //die();
        header("location:../?page=adm-departamentos");

    } elseif ($tipo == 'actualizar') {
        //$db->debug();
        $departamento->update($id);
        //die();
        header("location:../?page=adm-departamentos");
    }
    elseif ($tipo == 'borrar') {
        //$db->debug();
        $departamento->deleteOne($id);
        //die();
        header("location:../?page=adm-departamentos");
    }
}

?>
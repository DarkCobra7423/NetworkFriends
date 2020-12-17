<?php

require_once("../models/model-friends.php");

if ($_POST) {

    $id   = $_POST["id"];
    $tipo = $_POST["tipo"];
    //print_r($_POST);
    //die();

    // guardar los datos recibidos del formulario en el objeto del modelo
    $friends->values[] = $_POST["dep"];
    $friends->values[] = $_POST["correo"];
    $friends->values[] = $_POST["tel"];
    $friends->values[] = $_POST["ext"];
    $friends->values[] = $_POST["jefe"];

    if ($tipo == 'nuevo') {
        //$db->debug();
        $friends->insert();
        //die();
        header("location:../?page=adm-friendss");

    } elseif ($tipo == 'actualizar') {
        //$db->debug();
        $friends->update($id);
        //die();
        header("location:../?page=adm-friendss");
    }
    elseif ($tipo == 'borrar') {
        //$db->debug();
        $friends->deleteOne($id);
        //die();
        header("location:../?page=adm-friendss");
    }
}

?>
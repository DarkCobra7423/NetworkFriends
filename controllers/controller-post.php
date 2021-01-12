<?php

require_once("../models/model-post.php");

if ($_POST) {

    $id   = $_POST["id"];
    //$tipo = $_POST["tipo"];
    $tipo = "nuevo";
    //print_r($_POST);
    //die();

    // guardar los datos recibidos del formulario en el objeto del modelo
    $post->values[] = $_POST["id"];
    $post->values[] = $_POST["postheader"];
    $post->values[] = $_POST["imagevideo"];
    $post->values[] = $footer;

    if ($tipo == 'nuevo') {
        //$db->debug();
        $post->insert();
        //die();
        header("location:../?page=adm-home");

    } elseif ($tipo == 'actualizar') {
        //$db->debug();
        $post->update($id);
        //die();
        header("location:../?page=adm-departamentos");
    }
    elseif ($tipo == 'borrar') {
        //$db->debug();
        $post->deleteOne($id);
        //die();
        header("location:../?page=adm-departamentos");
    }
}

?>
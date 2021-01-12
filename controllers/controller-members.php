<?php

require_once("../models/model-members.php");

if ($_POST) {

    $id   = $_POST["id"];
    $tipo = $_POST["tipo"];
    //print_r($_POST);
    //print_r($id);
    //die();
    //procesar la fecha
    
    /*
    //$variable = '1'; // no se cumple la condicion
    $variable = NULL; //si se cumple la condicion
    if(is_null($variable)){
        echo 'la variable es '.$variable;
        }
        die();
     * 
     */
    //VARIABLES DE BIRTHDATE
    
            
    $birthdate=$_POST['ano'].'-'.$_POST['mes'].'-'.$_POST['dia'];
    //echo 'este es la fecha'.$birthdate;

    //variables de valor estatico
    $gender = $_POST["gender"];
    $image = $_POST["image"];
    $mobile = $_POST["mobile"];
    $online ="0";
    $religion = $_POST["religion"];
    $tipo_usuario="3";
    $current_session="1";
        
    if($image == ''){        
        if($gender=='Male'){
            $image ="resources/userpics/user5.jpg";
        }else if($gender=='Famale'){
            $image ="resources/userpics/user1.jpg";
        }
    }
    if($mobile == ''){
        $mobile= "";
    }
    if($religion == ''){
        $religion="";
    }
    if($birthdate == '--'){
        $birthdate=$_POST["birthdate"];
    }
    //echo 'este es lafecha 2 '.$birthdate;
    //die();
    // guardar los datos recibidos del formulario en el objeto del modelo
    $member->values[] = $_POST["firtsname"];
    $member->values[] = $_POST["lastname"];
    $member->values[] = $_POST["country"];
    $member->values[] = $_POST["email"];
    $member->values[] = $gender;
    $member->values[] = $_POST["username"];
    $member->values[] = $_POST["password"];
    $member->values[] = $image;
    $member->values[] = $birthdate;
    $member->values[] = $mobile;
    $member->values[] = $online;
    $member->values[] = $religion;
    $member->values[] = $tipo_usuario;
    $member->values[] = $current_session;

    if ($tipo == 'nuevo') {
        //$db->debug();
        $member->insert();
        //die();
        header("location:../?page=login");

    } elseif ($tipo == 'actualizar') {
        $db->debug();
        $member->update($id);
        $db->debug();
        
        /*-----------------------------------------
        echo 'nombre '.$firtsname = $_POST["firtsname"];
        echo 'apellido '.$lastname = $_POST["lastname"];
        echo 'pais '.$country = $_POST["country"];
        echo 'email '.$email = $_POST["email"];
        echo 'sexo '.$gender;
        echo 'usuario '.$username = $_POST["username"];
        echo 'pass '.$password = $_POST["password"];
        echo 'image '.$image;
        echo 'nacimiento '.$birthdate;
        echo 'telefono '.$mobile;
        echo 'en linea '.$online;
        echo 'religion '.$religion;
        echo 'tipousuario '.$tipo_usuario;
        echo 'current '.$current_session;
        
        *///-----------------------------------------
        
        //die();
        header("location:../?page=adm-profile");
    }
    elseif ($tipo == 'borrar') {
        //$db->debug();
        $member->deleteOne($id);
        //die();
        header("location:../?page=login");
    }
}

?>
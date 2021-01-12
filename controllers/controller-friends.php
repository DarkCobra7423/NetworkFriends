<?php

require_once("../models/model-addfriends.php");
require_once("../models/model-add2friends.php");

if ($_POST) {

    $idfirends   = $_POST["id"];//PORVIENE DEL MODAL DELETE
    //echo 'este es el firens '.$idfirends;
    //die();
    $id   = $_POST["id"];
    $myid = $_POST["myid"];
    //$myid = '1';
    $friendrequest = $_POST["request"];
    //print_r($_POST);
    //echo 'request '.$friendrequest;
    //die();
    
    //$myid = $_SESSION['usuario']->idmembers;
    
    if($friendrequest=='0'){//CUANDO SE ENVIA LA SOLICITUD
        $request='1';
       
    }else if($friendrequest=='1'){//CUANDO SE ACEPTA LA SOLICITUD
        $request='2';
        
    }else if($friendrequest=='2'){//CUANDO SE ELIMINA EL AMIGO
        $request='0';
        
    }

    // guardar los datos recibidos del formulario en el objeto del modelo
    
    if($friendrequest=='0'){//INSERTAR
        $addFriends->values[] = $myid;
        $addFriends->values[] = $id;
        $addFriends->values[] = $request;

        $add2Friends->values[] = $id;
        $add2Friends->values[] = $myid;
        $add2Friends->values[] = '0';

        $addFriends->insert();
        $add2Friends->insert();
   
    //die();
    }else if($friendrequest=='1'){//ACTUALIZAR
        
        $addFriends->values[] = $myid;
        $addFriends->values[] = $id;
        $addFriends->values[] = '2';

        $add2Friends->values[] = $id;
        $add2Friends->values[] = $myid;
        $add2Friends->values[] = '2';

        
        $addFriends->update($idfirends);
        $idfirends2=$idfirends+'1';
        $add2Friends->update($idfirends2);
        
    }else if($friendrequest=='2'){//ELIMINAR    
        $addFriends->deleteOne($idfirends);
        $idfirends2=$idfirends+'1';
        $add2Friends->deleteOne($idfirends2);
    }
    //die();
    //if ($tipo == 'nuevo') {
        //$db->debug();
        //die();
        //$db->debug();
        
        header("location:../?page=adm-friends");

    //}
        
}

?>
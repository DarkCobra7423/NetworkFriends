<?php
require_once("model-base.php");

class Message extends Model {//nombre de esta clase
    public function __construct($db) {
        parent::__construct($db);
    }

}

$message = new Message($db);//Objeto de esta clase
$message->setView ("vw_message");
$message->setTable("message");//nombre de la tabla

// campos de la tabla
$message->setKey  ("idmessage");
$message->addField("sender_id");
$message->addField("receiver_idmembers");
$message->addField("content");
$message->addField("data_sended");
$message->addField("my_id");
$message->addField("idmembers");
$message->addField("firstname");
$message->addField("lastname");
$message->addField("image");
$message->addField("status");

$message->newRecord();
?>
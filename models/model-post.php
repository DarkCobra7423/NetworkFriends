<?php
require_once("model-base.php");

class Post extends Model {//nombre de esta clase
    public function __construct($db) {
        parent::__construct($db);
    }

}

$post = new Post($db);//Objeto de esta clase
$post->setView ("post");
$post->setTable("post");//nombre de la tabla

// campos de la tabla
$post->setKey  ("idpost");
$post->addField("idmembers");
$post->addField("header");
$post->addField("images");
$post->addField("footer");
$post->addField("date_posted");

$post->newRecord();
?>
<?php
require_once("model-base.php");

class addFriends extends Model {//nombre de esta clase
    public function __construct($db) {
        parent::__construct($db);
    }
/*
    public function select($value) {
        $this->getAll("IdAmigos");
        echo "<select name='idmat' id='' class='form-control'>";
        while ($row = $this->next()) {
            if ($row->IdMateria==$value) $sel = "SELECTED"; else $sel="";
            echo "<option value='$row->IdMateria' {$sel}>$row->ClaveMateria $row->Materia</option>";
        }
        echo "</select>";
    }
 * 
 */
}

$addFriends = new addFriends($db);//Objeto de esta clase
$addFriends->setView ("friends");
$addFriends->setTable("friends");//nombre de la tabla

// campos de la tabla
$addFriends->setKey  ("idfirends");
$addFriends->addField("my_id");
$addFriends->addField("idmembers");
$addFriends->addField("friend_request");

$addFriends->newRecord();
?>
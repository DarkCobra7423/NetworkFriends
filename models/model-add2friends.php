<?php
require_once("model-base.php");

class add2Friends extends Model {//nombre de esta clase
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

$add2Friends = new add2Friends($db);//Objeto de esta clase
$add2Friends->setView ("friends");
$add2Friends->setTable("friends");//nombre de la tabla

// campos de la tabla
$add2Friends->setKey  ("idfirends");
$add2Friends->addField("my_id");
$add2Friends->addField("idmembers");
$add2Friends->addField("friend_request");

$add2Friends->newRecord();
?>
<?php
require_once("model-base.php");

class Friends extends Model {//nombre de esta clase
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

$friends = new Friends($db);//Objeto de esta clase
$friends->setView ("vw_friends");
$friends->setTable("friends");//nombre de la tabla

// campos de la tabla
$friends->setKey  ("idfirends");
$friends->addField("my_id");
$friends->addField("idmembers");
$friends->addField("firstname");
$friends->addField("lastname");
$friends->addField("country");
$friends->addField("image");
$friends->addField("status");

$friends->newRecord();
?>
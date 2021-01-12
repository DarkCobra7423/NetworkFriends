<?php
require_once("model-base.php");

class Miembro extends Model {//nombre de esta clase
    public function __construct($db) {
        parent::__construct($db);
    }
/*
    public function select($value) {
        $this->getAll("Idmiembro");
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

$member = new Miembro($db);
$member->setView ("members");
$member->setTable("members");
 

$member->setKey  ("idmembers");
$member->addField("firstname");
$member->addField("lastname");
$member->addField("country");
$member->addField("email");
$member->addField("gender");
$member->addField("username");
$member->addField("password");
$member->addField("image");
$member->addField("birthdate");
$member->addField("mobile");
$member->addField("online");
$member->addField("religion");
$member->addField("IdTipoUsuario");
$member->addField("current_session");
$member->newRecord();
?>
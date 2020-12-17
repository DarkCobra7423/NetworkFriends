<?php
require_once("model-base.php");

class Profile extends Model {//nombre de esta clase
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

$profile = new Profile($db);//Objeto de esta clase
$profile->setView ("members");
$profile->setTable("members");//nombre de la tabla

// campos de la tabla
$profile->setKey  ("idmembers");
$profile->addField("firstname");
$profile->addField("lastname");
$profile->addField("country");
$profile->addField("email");
$profile->addField("gender");
$profile->addField("username");
$profile->addField("password");
$profile->addField("image");
$profile->addField("birthdate");
$profile->addField("mobile");
$profile->addField("status");
$profile->addField("religion");
$profile->addField("IdTipoUsuario");
$profile->newRecord();
?>
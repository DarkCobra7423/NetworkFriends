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

$usuario = new Miembro($db);
$usuario->setView ("members");
$usuario->setTable("members");
 

$usuario->setKey  ("idmembers");
$usuario->addField("firstname");
$usuario->addField("lastname");
$usuario->addField("country");
$usuario->addField("email");
$usuario->addField("gender");
$usuario->addField("username");
$usuario->addField("password");
$usuario->addField("image");
$usuario->addField("birthdate");
$usuario->addField("mobile");
$usuario->addField("status");
$usuario->addField("religion");
$usuario->addField("IdTipoUsuario");

$miembro->newRecord();
?>
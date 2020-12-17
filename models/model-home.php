<?php
require_once("model-base.php");

class Home extends Model {//nombre de esta clase
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

$home = new Home($db);//Objeto de esta clase
$home->setView ("vw_post");
$home->setTable("post");//nombre de la tabla

// campos de la tabla
$home->setKey  ("idmembers");
$home->addField("firstname");
$home->addField("lastname");
$home->addField("image");
$home->addField("header");
$home->addField("images");
$home->addField("footer");
$home->addField("date_homeed");

$home->newRecord();
?>
<?php
require_once("model-base.php");

class Departamento extends Model {//nombre de esta clase
    public function __construct($db) {
        parent::__construct($db);
    }
/*
    public function select($value) {
        $this->getAll("IdDepartamento");
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

$departamento = new Departamento($db);//Objeto de esta clase
$departamento->setView ("departamentos");
$departamento->setTable("departamentos");//nombre de la tabla

// campos de la tabla
$departamento->setKey  ("IdDepartamento");
$departamento->addField("Departamento");
$departamento->addField("Correo");
$departamento->addField("Telefono");
$departamento->addField("Extencion");
$departamento->addField("NombreJefe");

$departamento->newRecord();
?>
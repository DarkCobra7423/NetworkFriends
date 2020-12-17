<?php
require_once("model-base.php");

class TipoUsuario extends Model {
    public function __construct($db) {
        parent::__construct($db);
    }

    public function select($value) {
        $this->getAll("IdTipoUsuario");
        echo "<select name='idtipo' id='' class='form-control'>";
        while ($row = $this->next()) {
            if ($row->IdTipoUsuario==$value) $sel = "SELECTED"; else $sel="";
            echo "<option value='$row->IdTipoUsuario' {$sel}>$row->TipoUsuario</option>";
        }
        echo "</select>";
    }
}

$tipousuario = new TipoUsuario($db);
$tipousuario->setView ("tiposusuario");
$tipousuario->setTable("tiposusuario");

// campos de la tabla
$tipousuario->setKey  ("IdTipoUsuario");
$tipousuario->addField("TipoUsuario");

$tipousuario->newRecord();
?>
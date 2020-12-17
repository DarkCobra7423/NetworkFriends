<?php
$usuarioVar = $_POST['usuarioLogin'];
$passVar  = $_POST['passLogin'];


include '../resources/class/class-connection.php';
include '../models/model-usuario.php';

try {
    session_start();
    $db->debug();

    $sql = "SELECT * FROM members WHERE username=? and password=?";

    $usuario->get($sql,array($usuarioVar,$passVar));

    if ($usuario->data->username==$usuarioVar) {

        $_SESSION['usuario'] = $usuario->data;

        switch ($usuario->data->IdTipoUsuario) {
            case 1:
                header("location:../?page=alu-inicio");
                break;
            case 2:
                header("location:../?page=pro-inicio");
                break;
            case 3:
                header("location:../?page=adm-home");
                break;
        }
    } else {
        $_SESSION['error'] = true;
        header('location:../?page=login');
    }

} catch (Exception $e) {

}

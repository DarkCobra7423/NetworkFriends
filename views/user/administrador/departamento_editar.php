<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('location:?page=login');
}

    include $base_dir . "/models/model-departamento.php";
    $id = $_GET['id'];
    $departamento->getOne($id);

?>

<?php include $templates_header_adm?>
    <body>
<?php include $templates_navbar_adm ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="controllers/controller-departamento.php" method="post">
                        <div class="form-group">
                            <label>Nombre departamento</label>
                            <input class="form-control" type="text" name='dep' value='<?=$departamento->data->Departamento?>'/>
                        </div>
                        <div class="form-group">
                                <label>Correo</label>
                                <input type="text" class="form-control" name="correo" value="<?=$departamento->data->Correo?>">
                                
                        <div class="form-group">
                                <label>Telefono</label>
                                <input type="text" class="form-control" name="tel" value="<?=$departamento->data->Telefono?>">
                                
                        <div class="form-group">
                                <label>Extencion</label>
                                <input type="text" class="form-control" name="ext" value="<?=$departamento->data->Extencion?>">
                                
                        <div class="form-group">
                                <label>Jefe</label>
                                <input type="text" class="form-control" name="jefe" value="<?=$departamento->data->NombreJefe?>">
                                
                                    
                                    
                                    <?php
                                if($id) {
                                    echo "<input type='hidden' name='tipo' value='actualizar'>";
                                } else {
                                    echo "<input type='hidden' name='tipo' value='nuevo'>";
                                }
                                ?>
                            </div>
                            <a href="?page=adm-departamentos" class="btn btn-dark">Regresar</a>
                            <input type="submit" class="btn btn-primary" value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

<?php include $templates_footer_adm ?>
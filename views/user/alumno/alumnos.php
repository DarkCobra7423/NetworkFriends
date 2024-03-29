<?php
session_start();
if (!isset($_SESSION['usuario']) or $_SESSION['usuario']->IdTipoUsuario<>1) {
    header('location:?page=login');
}
$id = $_SESSION['usuario']->id;


?>
<?php include $templates_header_alu ?>
<body>
<?php include $templates_navbar_alu ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>Alumno: <?= $_SESSION['usuario']->Nombre . " " . $_SESSION['usuario']->ApellidoPat . " " . $_SESSION['usuario']->ApellidoMat ?></h1>
                    <div class="media">
                        <img class="d-flex mr-3"
                             src="https://image.freepik.com/iconos-gratis/nerd-perfil-masculino-avatar_318-68813.jpg"
                             alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Datos</h5>
                            <p><?= $_SESSION['usuario']->Domicilio ?></p>
                            <p><?= $_SESSION['usuario']->Telefono ?></p>
                            <p><?= $_SESSION['usuario']->Correo ?></p>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>
    <br>
    <footer>
        <p>Instituto Tecnologico de Villahermosa</p>
    </footer>
</div>

<?php include $templates_footer_adm ?>
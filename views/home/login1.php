<?php include $templates_navbar ?>
<body>
<?php include $templates_header ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Iniciar sesion</h1>
                    <form action="controllers/controller-login.php" method="post">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control" name="usuarioLogin" required>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="passLogin" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Aceptar">
                    </form>
                </div>
                <div class="card-footer">
                    <?php
                    session_start();
                    if (isset($_SESSION['error']) && $_SESSION['error']) {
                        echo "<h1 style='color: crimson'>Credenciales incorrectas</h1>";
                        session_destroy();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <footer>
        <p>Instituto Tecnológico de Villahermosa</p>
    </footer>
</div>

<?php include $templates_footer ?>

</body>
</html>
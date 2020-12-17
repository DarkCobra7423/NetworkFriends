<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="?page=adm-inicio">Network Friends</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
                <a class="nav-link" href="?page=adm-materia">Materias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=adm-usuario">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=adm-departamentos">Departamentos</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="?page=adm-home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=adm-mensaje">Mensajes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=adm-amigos">Amigos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=adm-miembros">Perfil</a>
            </li>

        </ul>
        <span class="navbar-text">Bienvenido <?= $_SESSION['usuario']->Nombre ?></span>
        <a href="controllers/controller-logout.php" class="btn btn-danger ml-2">Salir</a>
    </div>
</nav>
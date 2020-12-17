<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <img src="images/mini_networkfriendslogo.png">
    <a class="navbar-brand" href="?page=adm-home">
      <font size=14><b>Network Friends</b></font>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <hr>
    <hr>
    <hr>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="nav navbar-nav mr-auto flex-row w-100">
        <li class="nav-item px-2 mr-auto active">
          <a class="nav-link" href="?page=adm-home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="?page=adm-message">Message </a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="?page=adm-friends">Friends </a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="?page=adm-profile">Profile </a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="?page=adm-statistics">Statistics </a>
          <ul>
            <li><a href="?page=adm-monthlypublications">Monthly Publications </a></li>
            <!--grafica de las publicaciones del usuario mensual-->
            <li><a href="?page=adm-usersontheplatform">Users on the platform </a></li>
            <!--grafica del numero de usuarios regstrados por mes-->
            <li><a href="?page=adm-sessionstarts">Session starts </a></li>
            <!--grafica de veces que se inicia sesion propondo grafica de puntos-->
            <li><a href="?page=adm-registeredusersperday">Registered users per day </a></li>
            <!--usuarios registrador por dia grafica-->
            <li><a href="?page=adm-numberofusersbyage">Number of users by age </a>
              <!--grafica de cantidad de usuarios por edad -->
              <!---
        <ul>
        <li><a href="">Submenu1</a></li>
        <li><a href="">Submenu2</a></li>
        <li><a href="">Submenu3</a></li>
        <li><a href="">Submenu4</a></li>
      </ul>
        -->
            </li>
          </ul>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="?page=adm-reports">Reports </a>
          <ul>
            <li><a href="?page=adm-agepercentagereport">Age percentage report </a></li>
            <li><a href="?page=adm-inwhichcountryaretheremoreusers">In which country are there more users </a></li>
          </ul>
        </li>
        <!---------------------------------------------------->

        <!---------------------------------------------------->

      </ul>
      <hr>
      <hr>
      <hr>
      <form class="form-inline mt-2 mt-md-0" action="controllers/controller-logout.php">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Off</button>
      </form>
    </div>
  </nav>
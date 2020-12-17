  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <img src="images/mini_networkfriendslogo.png">
    <a class="navbar-brand" href="index.html">
      <font size=14><b>Network Friends</b></font>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <hr>
    <hr>
    <hr>
    <form class="form-inline mt-2 mt-md-0" action="controllers/controller-login.php" method="post">
      <div class="col-sm-5">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Email Address" name="usuarioLogin" required>
          <div class="login-bottom-text checkbox hidden-sm">
            <label>
              <input type="checkbox" id="">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Keep me sign in
                </font>
              </font>
            </label>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="passLogin" required>
          <div class="login-bottom-text hidden-sm">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;"> Forgot your password? </font>
            </font>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="form-group">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Aceptar">Login</button>
        </div>
      </div>
        
        <div>
            
                    <?php
                    session_start();
                    if (isset($_SESSION['error']) && $_SESSION['error']) {
                        echo "<h1 style='color: crimson'>Credenciales incorrectas</h1>";
                        session_destroy();
                    }
                    ?>
                </div>

    </form>
    
    </div>
    
  </nav>
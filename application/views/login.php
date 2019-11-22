<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.js"></script>

    <script src="<?php echo JS; ?>/login.js">

    </script>

    <!--my css -->
    <link rel="stylesheet" href="<?php echo CSS; ?>/login.css">

  </head>
  <body>
    <div class="container-fluid bg">
      <div class="row">
      <!--  <div class="col-md-5 col-sm-5 col-xs-12">
          <div class="lg-log">
            <img id="log-dicyg" src="../assets/images/dicyg.png" alt="no hay imagen"><br>
            <!--<img id="log-uc" src="../assets/images/UC.png" alt="no hay imagen">!-->
          <!--</div>
        </div>-->
        <div class="col-md-3 col-sm-3 col-sx-12">

        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 justify-content-center">
          <form class="form-container shadow-lg p-3 mb-5 rounded was-validated" id='login'>
            <div class="img-login">
                <img src="<?php echo IMG; ?>/login.png" alt="no se encontro imagen">
            </div>
            <h4 style="text-align:center;">Sistema de Soportes</h4>
            <div class="form-group">
              <label for="InputUsuario">Nombre de Usuario</label>
              <input type="text" class="form-control" id="inputUsuario" name="inputUsuario" aria-describedby="emailHelp" placeholder="Nombre de usuario" required>
              <!--<small id="loginHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>!-->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword">Contraseña</label>
              <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Contraseña" required>
              <!--<small id="loginHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>!-->
            </div>

            <button type="button" class="btn btn-primary" onclick="login()">Ingresar</button>
          </form>
        </div>
          <div class="col-md-3 col-sm-3 col-xs-12"></div>
      </div>
    </div>
  </body>
</html>

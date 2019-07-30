<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Gimnasio Buzeta</title>

  </head>
  <body>

    <div class="container">

      <form class="form-signin" method="post" action="controlador.php">
        <h2 class="form-signin-heading">Usuarios GYM Buzeta</h2>
        <label for="inputUsuario" class="sr-only">Usuario</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" name="usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" maxlength="4" pattern="[0-9]+" class="form-control" placeholder="Contraseña" name="clave" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recuerdame
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="btnFuncion" value="2" type="submit">Ingresar</button>
        <a href="index.php"></a><br>
        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="location.href='registro.php'">Registrate
        </button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


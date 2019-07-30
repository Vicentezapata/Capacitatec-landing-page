<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        <div class="container">

      <form class="form-signin" method="post" action="controlador.php">
        <h2 class="form-signin-heading">Registro Usuario</h2>
        
        <label for="inputUsuario" class="sr-only">Usuario</label>
        <input type="text" id="inputUsuario" class="form-control" placeholder="Ingresa un usuario" name="usuario" autofocus required>
        <label for="inputClave" class="sr-only">Clave</label>
        <input type="password" id="inputClave" class="form-control" minlength="4" maxlength="4" placeholder="Clave de 4 números" name="clave" autofocus required>
        <label for="inputNombre" class="sr-only">Nombre</label>
        <input type="text" id="inputNombre" class="form-control" placeholder="Escribe tu nombre" name="nombre" autofocus required>
        <label for="inputApellidoPaterno" class="sr-only">Apellido Paterno</label>
        <input type="text" id="inputApellidoPaterno" class="form-control" placeholder="Escribe tu apellido paterno" name="apellido_pat" autofocus required>
        <label for="inputApellidoMaterno" class="sr-only">Apellido Materno</label>
        <input type="text" id="inputApellidoPaterno" class="form-control" placeholder="Escribe tu apellido materno" name="apellido_mat"autofocus required>
        <label class="radio-inline"><input type="radio" name="genero" value="1" checked>Masculino</label>
        <label class="radio-inline"><input type="radio" name="genero" value="2" >Femenino</label>
        <br>   
        <input placeholder="Fecha Nacimiento" class="form-control" name="fechaNacimmiento" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" name="btnFuncion" value="1" type="submit">Registrarse</button>
        <button class="btn btn-lg btn-primary btn-block" name="btnFuncion"  type="button" onclick = "location.href='index.php'" >Ingresar</button>
  
      </form>

    </div>
    </body>
</html>


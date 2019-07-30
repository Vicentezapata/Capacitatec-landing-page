<?php
include ('crud.php');
$btnFuncion = $_POST['btnFuncion'];
switch ($btnFuncion){
    case "1":
        $usuario = strtolower($_POST['usuario']);
        $clave = $_POST['clave'];        
        $nombre = strtolower($_POST['nombre']);
        $apellido_pat = strtolower($_POST['apellido_pat']);
        $apellido_mat = strtolower($_POST['apellido_mat']);
        $genero = $_POST['genero'];
        $fechaNacimiento = $_POST['fechaNacimmiento'];
        $clasecrud = new Crud();
        $filasinsertadas = $clasecrud->inserta($usuario, $clave, $nombre, $apellido_pat, $apellido_mat, $genero, $fechaNacimiento);
if($filasinsertadas >0){
    print '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    </head>
                    <body>
                    <div class="container">
                    <div class="alert alert-success">
    <strong>Exito!</strong> Usuario creado.
  </div>
                    </div>
                    </body>
                    </html>
                    ';    
    print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=index.php"> ';
}else
    {
    print '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    </head>
                    <body>
                    <div class="container">
                    <div class="alert alert-danger">
                    <strong>Error!</strong> Registro no fue guardado.
                    </div>
                    </div>
                    </body>
                    </html>
                    ';    
    print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=index.php"> ';
    }        
    break;
    
    case "2":
      $usuario = strtolower($_POST['usuario']);
      $clave = $_POST['clave'];
      $clasecrud = new Crud();
      $login = $clasecrud->validaUsuario($usuario, $clave);
      if($login)
          {
          session_start();
          $_SESSION['usuario'] = $usuario;
    print '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    </head>
                    <body>
                    <div class="container">
                    <div class="alert alert-success">
    <strong>Exito!</strong> Login válido.
  </div>
                    </div>
                    </body>
                    </html>
                    ';    
    print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=visualizador.php"> ';

          }
          else
              {
              print '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    </head>
                    <body>
                    <div class="container">
                    <div class="alert alert-danger">
                    <strong>Error!</strong> Login no válido.
                    </div>
                    </div>
                    </body>
                    </html>
                    ';   
              print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=index.php"> ';
              }
        break;
    case "3":
      $usuario = strtolower($_POST['usuario']);
      $clave = $_POST['clave'];
      $clasecrud = new Crud();
      $login = $clasecrud->validaUsuario($usuario, $clave);
      if($login)
          {
          session_start();
          $_SESSION['admin'] = $usuario;
           print '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    </head>
                    <body>
                    <div class="container">
                    <div class="alert alert-success">
    <strong>Exito!</strong> Login administrador válido.
  </div>
                    </div>
                    </body>
                    </html>
                    ';  
           print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=evaluacion.php"> ';
          
          }
          else
              {
        print '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    </head>
                    <body>
                    <div class="container">
                    <div class="alert alert-danger">
                    <strong>Error!</strong> Login adminsitrador no válido.
                    </div>
                    </div>
                    </body>
                    </html>
                    ';    
    print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=admin.php"> ';
              }
        break;    
    case "5":
        $usuario = strtolower($_POST['usuario']);
        $fecha = $_POST['fecha'];        
        $estatura = strtolower($_POST['estatura']);
        $peso = strtolower($_POST['peso']);
        $cintura = strtolower($_POST['cintura']);
        $pgrasa = $_POST['pgrasa'];
        $imc = $_POST['imc'];
        $clasecrud = new Crud();
        $filasinsertadas = $clasecrud->insertaEvaluacion($usuario,$fecha,$estatura,$peso,$cintura,$pgrasa, $imc);
if($filasinsertadas >0){
    print '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    </head>
                    <body>
                    <div class="container">
                    <div class="alert alert-success">
    <strong>Exito!</strong> Medición guardada.
  </div>
                    </div>
                    </body>
                    </html>
                    ';    
    print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=evaluacion.php"> ';
}else
    {
        print '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    </head>
                    <body>
                    <div class="container">
                    <div class="alert alert-danger">
                    <strong>Error!</strong> Evaluación no fue guardada.
                    </div>
                    </div>
                    </body>
                    </html>
                    ';    
    print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=evaluacion.php"> ';
    } 
        break;
}








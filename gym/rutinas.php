<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
//$_SESSION['usuario'] = 'cduque';
if(!empty(($_SESSION['usuario']))){
    include 'crud.php';
    print "Bienvenido usuario ".$_SESSION['usuario'];
$usuario = $_SESSION['usuario'];    
    $clasecrud = new crud();
    $arreglo = $clasecrud->buscarRutinas($usuario);

?>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Gimnnasio Buzeta</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="visualizador.php">Mi Evolución</a></li>
      <li class="active"><a href="rutinas.php">Mis Rutinas</a></li>      
      <li><a href="logout.php">Salir</a></li>
    </ul>
  </div>
</nav>

<div class="table-responsive">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal1">
	Fecha
      </button></th>
      <th scope="col"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal2">
	Rutina
      </button></th>      
    </tr>
  </thead>
  <tbody>
    
        <?php
    foreach ($arreglo as $rutina) {
    print '<tr>';
    print "<td>".$rutina['fecha']."</td>";
    print "<td><a href=".$rutina['pathRutina']."> Descargar Rutina PDF </a></td>";   
    print '</tr>';
    }   
    ?>        
   
    
  </tbody>
</table>
            </div>
    </body>
</html>
<?php 
}else{
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
                    <strong>Error!</strong> Debe logearse.
                    </div>
                    </div>
                    </body>
                    </html>
                    ';    
    print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=index.php"> ';
}


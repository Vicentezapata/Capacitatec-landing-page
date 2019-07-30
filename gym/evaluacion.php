<?php
session_start();
//$_SESSION['usuario'] = 'cduque';
if(!empty(($_SESSION['admin']))){
    include 'crud.php';  
    $clasecrud = new crud();
    $arreglo = $clasecrud->recuperaUsuarios();

?>
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">    

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Gimnnasio Buzeta</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="evaluacion.php">Evaluar</a></li>
      
      <li><a href="logout.php">Salir</a></li>
    </ul>
  </div>
</nav>

     
      <form class="form-signin" method="post" action="controlador.php">
        <h2 class="form-signin-heading">Evaluación</h2>
        <?php print "Bienvenido Administrador ".$_SESSION['admin'];   ?>
        <div class="form-group">
    
    <select class="form-control" id="exampleFormControlSelect1" name="usuario" required>
      <option value="" required>Selecciona Usuario</option>
      

              <?php
           foreach ($arreglo as $value) {
           print '<option value='.$value['usuario'].'> '.$value['nombre'].' '.$value['apellidoPat'].' '.$value['apellidoMat'].' </option>';
}
        ?>
    </select>
         </div>
        
        <input type="text" id="inputFecha" name="fecha" class="form-control" placeholder="Fecha" readonly required autofocus value=<?php echo date("Y-m-d");?>>
        
        <input type="number" id="inputEstatura" name="estatura" class="form-control" placeholder="Estatura en centímetros" required autofocus>
        
        <input type="number" id="inputPeso" name="peso" class="form-control" placeholder="Peso" required autofocus>
        
        <input type="number" id="inputCintura" name="cintura" class="form-control" placeholder="Medida Cintura" required autofocus>
        
        <input type="number" id="inputIMC" name="pgrasa" class="form-control" placeholder="Porcentaje de Grasa Corporal Biopendancia" required autofocus>        
        
        <input type="number" id="inputIMC" name="imc" class="form-control" placeholder="IMC" required autofocus>        
        
        <button class="btn btn-lg btn-primary btn-block" name="btnFuncion" type="submit" value="5">Ingresar</button>
      </form>
</div>
    </body>
</html>
<?php }else{
    
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
    print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=admin.php"> ';
}
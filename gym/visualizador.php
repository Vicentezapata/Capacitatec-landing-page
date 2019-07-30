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
    $clasecrud = new crud();
    $arreglo = $clasecrud->buscarMedicion($_SESSION['usuario']);

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
    <div class="modal fade" id="miModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Fecha</h4>
			</div>
			<div class="modal-body">
				Fecha en que fue realizada la evaluación.
			</div>
		</div>
	</div>
</div>
   <div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Peso</h4>
			</div>
			<div class="modal-body">
				Peso en kilogramos de la medicón efectuada.
			</div>
		</div>
	</div>
</div>        
<div class="modal fade" id="miModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Estatura</h4>
			</div>
			<div class="modal-body">
				Estatura en centímetros.
			</div>
		</div>
	</div>
</div>
        <div class="modal fade" id="miModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Medición Cintura</h4>
			</div>
			<div class="modal-body">
Medición de la circunferencia de la cintura es una indicación indirecta de la cantidad de tejido adiposo intrabdominal, 
frecuentemente llamado grasa visceral. Una gran circunferencia de cintura está asociada con un mayor riesgo de diabetes tipo 2, 
colesterol alto, presión arterial alta y enfermedad cardiovascular debido al exceso de grasa abdominal.
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="miModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Procentaje de Grase Impedancia Bioelectrica</h4>
			</div>
			<div class="modal-body">
El porcentaja de grasa se trata de una medida indicativa de sobrepeso, o bajopeso, nos ayudará a distinguir la masa muscular 
de la materia grasa que está presente en nuestra composición corporal. Se medira mediante una báscula de impedancia bioelectrica.
<h3>Mujeres</h3>
Entre 20 y 39 años: 21%-33%  Saludable, 33%-39% Sobrepeso, >39% Obesidad.<br>
Entre 40 y 59 años: 23%-35%  Saludable, 36%-40% Sobrepeso, >40% Obesidad.<br>
Entre 60 y 79 años: 24%-36%  Saludable, 37%-42% Sobrepeso, >40% Obesidad.<br>
<h3>Hombres</h3>
Entre 20 y 39 años:  8%-20%  Saludable, 21%-25% Sobrepeso, >25% Obesidad.<br>
Entre 40 y 59 años: 11%-22%  Saludable, 23%-28% Sobrepeso, >28% Obesidad.<br>
Entre 60 y 79 años: 13%-25%  Saludable, 26%-30% Sobrepeso, >30% Obesidad.<br>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="miModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Indice Masa Corporal</h4>
			</div>
			<div class="modal-body">
IMC,El Índice de Masa Corporal (IMC) es una medida de asociación entre el peso y la talla de una persona. 
El IMC es usado como uno de varios indicadores para evaluar el estado nutricional.
<br>
IMC es inferior a 18.5, está dentro de los valores correspondientes a “bajo peso”.<br>
IMC es entre 18.5 y 24.9, está dentro de los valores “normales” o de peso saludable.<br>
IMC es entre 25.0 y 29.9, está dentro de los valores correspondientes a “sobrepeso”.<br>
IMC es 30.0 o superior, está dentro de los valores de “obesidad”.
			</div>
		</div>
	</div>
</div>
<div class="table-responsive">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal1">
	Fecha
      </button></th>
      <th scope="col"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal2">
	Peso
      </button></th></th>
      <th scope="col"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal3">
	Estatura
      </button></th>
      <th scope="col"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal4">
	Cintura
      </button></th>
      <th scope="col"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal5">
	% Grasa
      </button></th>
      <th scope="col"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal6">
	IMC
      </button></th>     
    </tr>
  </thead>
  <tbody>
    
        <?php
    foreach ($arreglo as $medicion) {
    print '<tr>';
    print "<th scope='row'>".$medicion['fecha']."</th>";
    print "<td>".$medicion['peso']."</td>";
    print "<td>".$medicion['estatura']."</td>";
    print "<td>".$medicion['medidaCintura']."</td>";
    print "<td>".$medicion['PorcentajeGrasaB']."</td>";
    print "<td>".$medicion['imc']."</td>";   
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
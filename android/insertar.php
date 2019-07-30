<?php


$rut = $_GET['rut'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

$conexion = mysqli_connect("www.capacitatec.cl", "cduque_cduque", "123456789", "cduque_android");

$query = "insert into tblpersona values ('$rut','$nombre','$apellido')";

mysqli_query($conexion, $query);

$nfilas = mysqli_affected_rows($conexion);

if($nfilas > 0){
    print "Exito";
}else{
    print "Error...";
}

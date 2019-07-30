<?php

include ("conexion.php"); 

class Crud{
   
public function inserta($usuario, $clave, $nombre, $apellido_pat, $apellido_mat,$genero, $fechaNacimiento) // parametros de la funcion.

        {       
    $query1 = "insert into tblpersona values ('$usuario',$clave)";
    $query2 = "insert into tblusuario values ('$usuario','$nombre','$apellido_pat', '$apellido_mat',$genero,'$fechaNacimiento')";
    $link = Conecta::conexion(); 
    mysqli_query($link, $query1);
    mysqli_query($link, $query2);
        
        $nfilas = mysqli_affected_rows($link);        
        return $nfilas; // devuelve el numero de filas insertadas.        
        mysqli_close($link);
         }
         
 public function validaUsuario($usuario, $clave){
      $query = "select * from tblpersona where usuario = '$usuario' and clave = $clave";
      $link = Conecta::conexion(); 
      $arreglo = mysqli_query($link, $query);
      $login = mysqli_num_rows($arreglo);
      if($login == 1){
          return true;
      }else{
         return false;
      }
      mysqli_close($link);
     
 }
  
  public function buscarMedicion($usuario)
            {        
      $query = "select * from tblmedicion where usuario = '$usuario'";
      $link = Conecta::conexion();
      $mediciones = mysqli_query($link, $query);
      return $mediciones;     // devuelve. 
      mysqli_close($link);
            }      
           
    public function buscarRutinas($usuario)
            {        
      $query = "select * from tblrutina where usuario = '$usuario'";
      $link = Conecta::conexion();
      $rutinas = mysqli_query($link, $query);
      return $rutinas;     // devuelve. 
      mysqli_close($link);
            } 
  public function recuperaUsuarios()
            {        
      $query = "select * from tblusuario ";
      $link = Conecta::conexion();
      $mediciones = mysqli_query($link, $query);
      return $mediciones;     // devuelve. 
      mysqli_close($link);
            } 
public function insertaEvaluacion($usuario,$fecha,$estatura,$peso,$medidaCintura,$PorcentajeGrasaB, $imc) // parametros de la funcion.
        {       
    $query = "insert into tblmedicion values (Null,'$usuario','$fecha',$estatura,$peso,$medidaCintura,$PorcentajeGrasaB, $imc)";    
    $link = Conecta::conexion(); 
    mysqli_query($link, $query);       
        $nfilas = mysqli_affected_rows($link);        
        return $nfilas; // devuelve el numero de filas insertadas.        
        mysqli_close($link);
         }           
}
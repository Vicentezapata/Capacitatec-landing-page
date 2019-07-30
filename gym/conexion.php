<?php

class Conecta{
    
public function conexion() {
        
        $server = "localhost";
        $user = "cduque_admin";
        $pass = "GymBuzeta";
        $bd = "cduque_gym"; // debemos escribir el nombre de nuestra base de datos.        
        // manejar excepciones.
        try{            
        $conexion = mysqli_connect($server, $user, $pass, $bd);
        return $conexion;            
        }
        catch (mysqli_sql_exception $error)
        {
            print $error->getMessage();
            exit();            
        }
    }        
    
    
    
}


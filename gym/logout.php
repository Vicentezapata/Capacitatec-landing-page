<?php
session_start();

if(!empty(($_SESSION['admin']))){
    session_destroy();
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
    <strong>Exito!</strong> Sesión Finalizada.
  </div>
                    </div>
                    </body>
                    </html>
                    '; 
    print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=index.php"> ';
}else if(!empty(($_SESSION['usuario']))){
    session_destroy();
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
    <strong>Exito!</strong> Sesión Finalizada.
  </div>
                    </div>
                    </body>
                    </html>
                    ';
    print '<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=index.php"> ';
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


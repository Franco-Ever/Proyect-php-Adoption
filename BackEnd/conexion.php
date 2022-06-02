<?php

/*ESTE FRAGMENTO DE CODIGO ES PARA PODER HACER LA CONEXION CORREPONDIENTE A 
LA BASE DE DATOS HACIENDO REFERECIA A LOS ATRIBUTOS O CARACTERISTICAS DE ESTA MISMA */

    function conectar(){

        $host="localhost"; /*HOSTING*/

        $user="root";  /*NOMBRE DE USUSARIO*/ 

        $pass="";       /*CONTRASEÑA */ 

        $bd="db_adopcion"; /*NOMBRE DE LA BASE DE DATOS*/

        $conn=mysqli_connect($host,$user,$pass,$bd); /*CONEXION A LA BASE DE DATOS MANDANDO LOS ATRIBUTOS*/ 

        return $conn;
    }
?>

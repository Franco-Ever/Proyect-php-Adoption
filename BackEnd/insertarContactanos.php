<?php

    /* EN ESTA PARTE SE HACE REFERENCIA A LA CONEXION Y 
    LLAMAMOS A LA FUNCION MISMA PARA PODER INSERTAR DATOS DESDE UN FORMULARIO*/
    include('conexion.php');
    $conn= conectar();

    /*DEFINIMOS VARIABLES QUE COINCIDAN CON LAS DE LA BASE DE DATOS 
    IGUALANDO A LOS NOMBRES DE LOS INPUT QUE HAY EN LOS FORMULARIOS*/

    $id_contactanos=$_POST['id_contactanos'];
    $nombre_completo=$_POST['nombre_completo'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];

    $fecha_envio=date("y-m-d");

/*ESTA ES UNA CONSULTA MYSQL PARA PODER INSERTAR CON LAS VARIABLES DEFINIDAS*/

    $query = "INSERT INTO contactanos VALUES('$id_contactanos','$nombre_completo','$correo','$mensaje','$fecha_envio')";
    $resultado = mysqli_query($conn, $query);
    Header('location: ../index.php');
?>
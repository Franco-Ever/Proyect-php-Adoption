<?php

/* EN ESTA PARTE SE HACE REFERENCIA A LA CONEXION Y 
    LLAMAMOS A LA FUNCION MISMA PARA PODER INSERTAR DATOS DESDE UN FORMULARIO*/
    include("conexion.php");
    $conn=conectar();


    /*DEFINIMOS VARIABLES QUE COINCIDAN CON LAS DE LA BASE DE DATOS 
    IGUALANDO A LOS NOMBRES DE LOS INPUT QUE HAY EN LOS FORMULARIOS*/

    $id_donativo=['id_donativo'];
    $cantidad=['cantidad'];
    $numero_tarjeta=['numero_tarjeta'];
    $clave_seguridad=['clave_seguridad'];
    $correo=['correo'];
    $nombre_completo=['nombre_completo'];
    $carnet_identidad=['carnet_identidad'];
    $direccion=['direccion'];
    $ciudad=['ciudad'];
    $telefono=['telefono'];
    $comentario=['comentario'];

    /*ESTA ES UNA CONSULTA MYSQL PARA PODER INSERTAR CON LAS VARIABLES DEFINIDAS*/

    $query = "INSERT INTO donativos VALUES('$id_donativo','$cantidad','$numero_tarjeta','$clave_seguridad','$correo','$nombre_completo','$carnet_identidad','$direccion','$ciudad','$telefono','$comentario')";
    $resultado = mysqli_query($conn, $query);
    Header('Location: ../index.php');
?>
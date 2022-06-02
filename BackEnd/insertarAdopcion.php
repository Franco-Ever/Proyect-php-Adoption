<?php
    /* EN ESTA PARTE SE HACE REFERENCIA A LA CONEXION Y 
    LLAMAMOS A LA FUNCION MISMA PARA PODER INSERTAR DATOS DESDE UN FORMULARIO*/

    include('conexion.php');
    $conn= conectar();

    /*DEFINIMOS VARIABLES QUE COINCIDAN CON LAS DE LA BASE DE DATOS 
    IGUALANDO A LOS NOMBRES DE LOS INPUT QUE HAY EN LOS FORMULARIOS*/

    $id_adopcion=$_POST['id_adopcion'];
    $nombre_completo=$_POST['nombre_completo'];
    $correo=$_POST['correo'];
    $tipo_mascota=$_POST['tipo_mascota'];
    $razon=$_POST['razon'];

    /*ESTA ES UNA CONSULTA MYSQL PARA PODER INSERTAR CON LAS VARIABLES DEFINIDAS*/
    $query = "INSERT INTO adopciones VALUES('$id_adopcion','$nombre_completo','$correo','$tipo_mascota','$razon')";
    $resultado = mysqli_query($conn, $query);

?>
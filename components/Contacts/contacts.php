<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Contactos</title>
    <link rel="stylesheet" href="contactss.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Contacta con nosotros</h2>
        </div>
        <form action="../.././BackEnd/insertarContactanos.php" id="form" class="form" method="post">
            <div class="form-control" id="mensaje">
                <p>Contacta con nosotros escribenos un mensaje y nosotros te atenderemos.</p>
            </div>
            <div class="form-control">
                <label for="username">Nombre Completo</label>
                <input type="text" placeholder="Ingrese su nombre" id="username" name="nombre_completo" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" placeholder="@gmail.com" id="email" name="correo" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Mensaje</label>
                <textarea name="mensaje" id="sms" placeholder="Escriba su mensaje" cols="40" rows="5"></textarea>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            
            <button type="submit">Enviar</button>
            <button style="background:yellow; border:yellow;color:black;"><a href="../../index.php"></a><i class="fa-solid fa-house-chimney"></i> Volver a Inicio</button>
            
        </form>
    </div>

    <div class="container">
        <div><img src="Img/perrito.webp" style="width: 400px;"></div>
        <div style="text-align: center;"><h3>Nuestra Ubicacion</h3></div>
        <div id="map" style="width: 400px; height: 325px;"></div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=75992711&text=Hola%20Saludos%20al%20Refugio%20de%20Animales!" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
        
    <?php
    include("correo.php");
    ?>
        
    <script src="contactss.js"></script>
    <script src="map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPrnDkd1WaBNsWVkFkaavgORKzEBiQLQQ&callback=iniciarMap"></script>


</body>

</html>
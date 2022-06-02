<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.0.js"></script>
    <link rel="stylesheet" href="../.././index.css">
    <link rel="stylesheet" href="../css/FormularioAdopcionn.css">
    <title>Document</title>


    <div class="fondo-cabeza"></div>
<div class="container">
<div class="section-nav">
      <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
      <div class="navbar-brand logo">
      <a href="../../index.php">
        <img src="../.././img/LogoMakr-4xbryM.png" alt=".." />
        <img src="../.././img/wbxocm.gif" alt="" width="100">
      </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0  fw-bold">
      <li class="nav-item dropdown ">
          <a class="dropdown-toggle navegador-a" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consultas
          </a>
          <ul class="dropdown-menu " >
            <li><a class="navegador-a" href="./QuienesSomos.php" >¿Quienes Somos?</a></li>
            <li><a class="navegador-a" href="./Ayudanos.php" >Ayudanos</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="navegador-a" href="./Animales.php">Adopción</a></li>
          </ul>
        </li>
        <li class="nav-item ">
         <a class="navegador-a"  href="./noticias.php" tabindex="-1" aria-disabled="true"> Noticias</a>
        </li>
        <li class="nav-item">
          <a class="navegador-a"  href="./donativos.php" tabindex="-1" aria-disabled="true">Donativos</a>
        </li>
        <li class="nav-item">
          <a class="navegador-a"  href="../Contacts/contacts.php" tabindex="-1" aria-disabled="true">Contactanos</a>
        </li>
      </ul>
   
        
      <button class="btn btn1" ><a href="https://www.facebook.com/"><i class="fab fa-facebook-f icon"></i></a></button>
        <button class="btn btn1" ><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZXMifQ%3D%3D%22%7D"><i class="fab fa-twitter icon"></i></a></button>
        <button class="btn btn1" ><a href="https://www.instagram.com/"><i class="fab fa-instagram icon"></i></a></button>

      </div>
      </div>
      </nav>
</div>
</div>
</head>
<body>
<br><br><br><br>
<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Llenar el Siguiente Formulario PorFavor</h2>
				<form action="FormularioAdopcion.php" method="post">
                <input type="text" class="field" name="nombre_completo" placeholder="Nombre Completo">
				<input type="text" class="field" name="correo" placeholder="Email">
                <select class="field" name="tipo_mascota" >
                <option disable=''></option>
                <option>Perro</option>
                <option>Gato</option>
                </select>
				<textarea placeholder="Motivo de la Adopción" name="razon" class="field"></textarea>
                <input class="btn boton-enviar" name="submit" type="submit" value="Enviar Solicitud">
                <br><br>
                <?php
    include('../../BackEnd/conexion.php');
    $conn=conectar();


         if (isset($_POST['submit'])) {
            $id=null;
            $nombre_completo = $_POST['nombre_completo'];
            $correo = $_POST['correo'];
            $tipo_mascota = $_POST['tipo_mascota'];
            $razon = $_POST['razon'];
            $fecha_envio=date("y-m-d");
            $campos = array();
        
            if ($nombre_completo == "") {
                array_push($campos, "<i class='fa-solid fa-triangle-exclamation'></i> El campo Nombre no puede estar vacio");
            }
            if ($correo == "" || strpos($correo, "@")=== false) {
                array_push($campos, "<i class='fa-solid fa-triangle-exclamation'></i> Ingrese un correo electronico valido");
            }
            if ($tipo_mascota == "") {
                array_push($campos, "<i class='fa-solid fa-triangle-exclamation'></i> Debe Seleccionar una opción");
            }

            if (count($campos) > 0) {
                echo "<div class='error' style='color=red;'>";
                for ($i=0; $i < count($campos); $i++) { 
                    echo "<p>".$campos[$i]."</p>";
                }
                echo "</div>";
            }else {
                echo "<div class='correcto'>
                Solicictud Enviada Correctamente
                <a href='../../index.php' class='btn boton-enviar' >Volver a Inicio</a></div>";
                $query = "INSERT INTO adopciones values('$id','$nombre_completo','$correo','$tipo_mascota','$razon','$fecha_envio')";
         
                $resultado = mysqli_query($conn,$query);
                
            }
            
        }
      
?>


                </form>
			</div>
		</div>
	</div>
    <br><br><br><br>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<footer>
<div class="color-footer">
      <div class="fondo-footer">
  <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col md-4">
                    <p class="contacto">
                        LEGAL
                    </p>
                    <ul class="titulo-contacto">
                            <li >
                            <i class="fa-solid fa-clipboard"></i>
                            <span class="titulo-colonia">
                            <a href="#">Contrato de Servicios</a>
                            </span>
                            </li>
                            <li>
                            <i class="fa-solid fa-clipboard"></i>
                            <span class="titulo-colonia">
                            <a href="#">Términos y condiciones</a>
                            </span>
                            </li>
                            <li>
                            <i class="fa-solid fa-clipboard"></i>
                            <span class="titulo-colonia">
                            <a href="#">Derechos y Obligaciones de Usuarios</a>
                            </span>
                            </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p class="contacto">
                        SERVICIOS
                    </p>
                    <ul class="titulo-contacto">
                            <li >
                            <i class="fa-solid fa-clipboard"></i>
                            <span class="titulo-colonia">
                            <a href="#">Atención al Cliente</a>
                            </span>
                            </li>
                            <li>
                            <i class="fa-solid fa-clipboard"></i>
                            <span class="titulo-colonia">
                            <a href="/QuienesSomos">Sobre Nosotros</a>
                            </span>
                            </li>
                            <li>
                            <i class="fa-solid fa-clipboard"></i>
                            <span class="titulo-colonia">
                            <a href="#">Nuestra Ubicación</a>
                            </span>
                            </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p class="contacto">
                        CONTACTOS
                    </p>
                    <ul class="titulo-contacto">
                            <li >
                            <i class="fa-solid fa-clipboard"></i>
                            <span class="titulo-colonia">
                            Calle Esmeralda Quillacollo - Vinto
                            </span>
                            </li>
                            <li>
                            <i class="fa-solid fa-clipboard"></i>
                            <span class="titulo-colonia">
                            000-000-00 desde tu celular
                            </span>
                            </li>
                            <li>
                            <i class="fa-solid fa-clipboard"></i>
                            <span class="titulo-colonia">
                            80001700025 desde un fijo
                            </span>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="fondo-footer">
        
    </div>
    <div class="pie-footer">
        <div class="col-md-12 logo-pie">
            <div>
            <a  href="#">
            <img src="../.././img/LogoMakr1.png" alt=".." />
            </a>
            </div>
            <div>
            <p class="titulo-footer">
                ©2022 Todos los derechos reservados por el creador <span class="span-subtitulo">Ever C. F. || Misael M. G. || Alejandro J. M. O. </span>
            </p>
            </div>
        </div>
    </div>
    </div>
    </div>
    
</footer>
</html>
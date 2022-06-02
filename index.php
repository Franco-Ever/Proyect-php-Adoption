<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./inicio.css">
    <title>Document</title>

<!--CABECERA DE LA PAGINA-->
    <div class="fondo-cabeza"></div>
<div class="container">
<div class="section-nav">
      <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
      <div class="navbar-brand logo">
      <a href="./index.php">
        <img src="./img/LogoMakr-4xbryM.png" alt=".." />
        <img src="./img/wbxocm.gif" alt="" width="100">
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
            <li><a class="navegador-a" href="./components/FrontEnd/QuienesSomos.php" >¿Quienes Somos?</a></li>
            <li><a class="navegador-a" href="./components/FrontEnd/Ayudanos.php" >Ayudanos</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="navegador-a" href="./components/FrontEnd/Animales.php">Adopción</a></li>
          </ul>
        </li>
        <li class="nav-item ">
         <a class="navegador-a"  href="./components/FrontEnd/Noticias.php" tabindex="-1" aria-disabled="true"> Noticias</a>
        </li>
        <li class="nav-item">
          <a class="navegador-a"  href="./components/FrontEnd/Donativos.php" tabindex="-1" aria-disabled="true">Donativos</a>
        </li>
        <li class="nav-item">
          <a class="navegador-a"  href="./components/Contacts/contacts.php" tabindex="-1" aria-disabled="true">Contactanos</a>
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
  
<div class="container">
    <div class="carrusel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="justify-content-center">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./img/Carruseles_01.jpg"  alt="..."/>
                </div>
                <div class="carousel-item">
                <img src="./img/Carruseles-02.jpg"   alt="..."/>
                </div>
                <div class="carousel-item">
                <img src="./img/Carruseles-03.jpg"   alt="..."/>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    <div class="fondo-imagen">
        <div class="espacio"></div>
            <div class="container principal">
                <div class="row" id="planes">
                    <div class="col-lg-12 text-center">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 mb-4 fodo-cuadro">
                                <div class="card-section border rounded p-3 cuadro-fondo1">
                                    <div class="card-header-first rounded pb-5 text-center">
                                        <br>
                                            <h2 class=" texto-titulo"><i class="fa-solid fa-paw"></i> ADOPTAME <i class="fa-solid fa-paw"></i></h2>
                                            <h2 class="texto-titulo2">Odisea</h2>
                                        </div>
                                        <div class="card-body text-center">
                                            <br />
                                            <hr class="linea-1" />
                                            <img src="./img/dog1.jpg"/>
                                            <hr class="linea-1" />
                                            <br/>   
                                            <button class="button-efect learn-more" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <span class="circle" aria-hidden="true">
                                                <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text"> Más Información</span>
                                            </button>
                                            <br><br>
                                            <iconos.bajar data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample" style={{ fontSize: 40 }}/>
                                        </div>
                                        <div class="collapse" id="collapseExample1">
                                            <div data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <p>Me llamo "Odisea"</p>
                                                <p>Me Gusta Jugar Con al Pelota</p>
                                                <p>Puedo Hacerte Compañia</p>
                                                <p>Me Gusta Salir a Correr</p>
                                                <p>Me Gusta Bañarme</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-4 fodo-cuadro">
                                    <div class="card-section border rounded p-3 cuadro-fondo2">
                                        <div class="card-header-second rounded pb-5 text-center">
                                            <br>
                                            <h2 class=" texto-titulo"><i class="fa-solid fa-paw"></i> ADOPTAME <i class="fa-solid fa-paw"></i></h2>
                                            <h2 class="texto-titulo2">Breil</h2>
                                        </div>
                                        <div class="card-body text-center">
                                            <br />
                                            <hr class="linea-1" />
                                            <img src="./img/dogs2.jpg"/>
                                            <hr class="linea-1" />
                                            <br/>
                                            <button class="button-efect learn-more" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <span class="circle" aria-hidden="true">
                                                <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text"> Más Información</span>
                                            </button>
                                            <br><br>
                                            <iconos.bajar data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample" style={{ fontSize: 40 }}/>
                                        </div>
                                        <div class="collapse" id="collapseExample2">
                                            <div data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <p>Me llamo "Breil"</p>
                                                <p>Me Gusta Jugar Con al Pelota</p>
                                                <p>Puedo Hacerte Compañia</p>
                                                <p>Me Gusta Salir a Correr</p>
                                                <p>Me Gusta Bañarme</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-4 fodo-cuadro">
                                    <div class="card-section card-section-third border rounded cuadro-fondo3">
                                        <div class="card-header-third rounded pb-5 text-center">
                                            <br>
                                            <h2 class=" texto-titulo"><i class="fa-solid fa-paw"></i> ADOPTAME <i class="fa-solid fa-paw"></i></h2>
                                            <h2 class="texto-titulo2">Mesena</h2>
                                        </div>
                                        <div class="card-body text-center">
                                            <br />
                                            <hr class="linea-1" />
                                            <img src="./img/dog3.jpg"/>
                                            <hr class="linea-1" />
                                            <br/>    
                                            <button class="button-efect learn-more" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <span class="circle" aria-hidden="true">
                                                <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text"> Más Información</span>
                                            </button><br><br>
                                            <iconos.bajar data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample" style={{ fontSize: 40 }}/>
                                        </div>
                                        <div class="collapse" id="collapseExample3">
                                            <div data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <p>Me llamo "Mesena"</p>
                                                <p>Me Gusta Jugar Con al Pelota</p>
                                                <p>Puedo Hacerte Compañia</p>
                                                <p>Me Gusta Salir a Correr</p>
                                                <p>Me Gusta Bañarme</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
            <br><br>
            <div class="container principal">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="row">

                            <div class="col-lg-4 col-md-12 mb-4 fodo-cuadro">
                                    <div class="card-section border rounded p-3 cuadro-fondo1">
                                        <div class="card-header-first rounded pb-5 text-center">
                                            <br>
                                            <h2 class=" texto-titulo"><i class="fa-solid fa-paw"></i> ADOPTAME <i class="fa-solid fa-paw"></i></h2>
                                            <h2 class="texto-titulo2">Lucas</h2>
                                        </div>
                                        <div class="card-body text-center">
                                            <br />
                                            <hr class="linea-1" />
                                            <img src="./img/dog4.jpg"/>
                                            <hr class="linea-1" />
                                            <br/>   
                                            <button class="button-efect learn-more" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <span class="circle" aria-hidden="true">
                                                <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text"> Más Información</span>
                                            </button><br><br>
                                            <iconos.bajar data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample" style={{ fontSize: 40 }}/>
                                        </div>
                                        <div class="collapse" id="collapseExample4">
                                            <div data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <p>Me llamo "Odisea"</p>
                                                <p>Me Gusta Jugar Con al Pelota</p>
                                                <p>Puedo Hacerte Compañia</p>
                                                <p>Me Gusta Salir a Correr</p>
                                                <p>Me Gusta Bañarme</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-4 fodo-cuadro">
                                    <div class="card-section border rounded p-3 cuadro-fondo2">
                                        <div class="card-header-second rounded pb-5 text-center">
                                            <br>
                                            <h2 class=" texto-titulo"><i class="fa-solid fa-paw"></i> ADOPTAME <i class="fa-solid fa-paw"></i></h2>
                                            <h2 class="texto-titulo2">Tallarin</h2>
                                        </div>
                                        <div class="card-body text-center">
                                            <br />
                                            <hr class="linea-1" />
                                            <img src="./img/dog5.jpg"/>
                                            <hr class="linea-1" />
                                            <br/>
                                            <button class="button-efect learn-more" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <span class="circle" aria-hidden="true">
                                                <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text"> Más Información</span>
                                            </button><br><br>
                                            <iconos.bajar data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample" style={{ fontSize: 40 }}/>
                                        </div>
                                        <div class="collapse" id="collapseExample5">
                                            <div data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <p>Me llamo "Breil"</p>
                                                <p>Me Gusta Jugar Con al Pelota</p>
                                                <p>Puedo Hacerte Compañia</p>
                                                <p>Me Gusta Salir a Correr</p>
                                                <p>Me Gusta Bañarme</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-4 fodo-cuadro">
                                    <div class="card-section card-section-third border rounded cuadro-fondo3">
                                        <div class="card-header-third rounded pb-5 text-center">
                                            <br>
                                            <h2 class=" texto-titulo"><i class="fa-solid fa-paw"></i> ADOPTAME <i class="fa-solid fa-paw"></i></h2>
                                            <h2 class="texto-titulo2">Rodolfo</h2>
                                        </div>
                                        <div class="card-body text-center">
                                            <br />
                                            <hr class="linea-1" />
                                            <img src="./img/adopcionn1.jpg"/>
                                            <hr class="linea-1" />
                                            <br/>    
                                            <button class="button-efect learn-more" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <span class="circle" aria-hidden="true">
                                                <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text"> Más Información</span>
                                            </button><br><br>
                                            <iconos.bajar data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample" style={{ fontSize: 40 }}/>
                                        </div>
                                        <div class="collapse" id="collapseExample6">
                                            <div data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <p>Me llamo "Mesena"</p>
                                                <p>Me Gusta Jugar Con al Pelota</p>
                                                <p>Puedo Hacerte Compañia</p>
                                                <p>Me Gusta Salir a Correr</p>
                                                <p>Me Gusta Bañarme</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
               <br /><br />
            <br />
            <div class="row justify-content-center politicas">
                <div class="col-lg-10 col-md-10 col-xl-10 col-sm-10">
                <img src="img/img_central.png" alt="" />
                </div>
            </div>
            <br />
            <div class="row justify-content-center politicas">
                <div class="col-lg-10 col-md-10 col-xl-10 col-sm-10">
                <img src="./img/BannerAbajo.jpg" alt="" />
                </div>
            </div>
            <br /><br /><br /><br /><br />
</div>  

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
            <img src="./img/LogoMakr1.png" alt=".." />
            </a>
            </div>
            <div>
            <p class="titulo-footer">
                ©2022 Todos los derechos reservados por el creador <span class="span-subtitulo">Ever C. F. || Misael M. G. || Alejandro J. M. O. || Rodrigo A. M. || "version-1.1"</span>
            </p>
            </div>
        </div>
    </div>
    </div>
    </div>
    
</footer>
</html>
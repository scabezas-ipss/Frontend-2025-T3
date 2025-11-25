<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="dist/css/estilo.css" rel="stylesheet"/>
</head>

<body>
    <nav id="home" class="navbar bg-body-tertiary-dia fixed-top">
        <div class="container container-fluid">
            <a class="navbar-brand" href="/">
                <img src="dist/img/logo-white.png">
            </a>
            <li class="nav-item">
                <a id="linkModoDiaNoche" class="nav-link" href="#" onclick="cambiarModoDiaNoche()">Dia / Noche</a>
            </li>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#novios">Novi@s</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#history">Nuestra Historia</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section id="carrusel">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="dist/img/paisaje-carrusel.jpeg" class="d-block w-100" alt="paisaje de fondo">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 id="boda_nombre">{{boda_nombre}}</h1>
                        <h5 id="letra_chica">First slide label</h5>
                        <h4 id="letra_grande">Some representative placeholder content for the first slide.</h4>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="novios" class="mt-12">
        <div class="container bg-white">
            <h1 class="text-center titulo-seccion">Él preguntó y ella dijo que sí</h1>
            <p class="text-center">Aenean aliquam augue turpis, in tempor elit condimentum sit amet. Phasellus a sapien tincidunt nunc dapibus mollis. Etiam ultricies bibendum sodales. Nulla libero tortor, auctor at elit ut, pharetra placerat libero. Aenean gravida in libero sed tincidunt. Nulla non mattis nisl, in imperdiet justo. Proin metus mauris, gravida vel ante et, ornare laoreet libero sed ut quam vitae.</p>
            <div class="row mt-4">
                <div class="col-md-5">
                    <img id="novio1_img" class="w-100" src="dist/img/novio.jpg">
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 id="novio1_nombre_completo" class="card-title">Andrew Miller</h5>
                            <h6 id="novio1_tipo" class="card-subtitle mb-2 text-body-secondary ">The Groom</h6>
                            <p id="novio1_descripcion" class="">Someone once told me that "when you meet the right person, you'll know." Well, I just knew. Right away, we connected in a way that left me feeling complete.</p>
                            <a href="http://facebook.com/novio1" class="card-link"><i class="fab fa-facebook"></i></a>
                            <a href="http://instagram.com/novio1" class="card-link"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xs-12 col-md-7">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 id="novio2_nombre_completo" class="card-title">Andrew Miller</h5>
                            <h6 id="novio2_tipo" class="card-subtitle mb-2 text-body-secondary ">The Groom</h6>
                            <p id="novio2_descripcion" class="">Someone once told me that "when you meet the right person, you'll know." Well, I just knew. Right away, we connected in a way that left me feeling complete.</p>
                            <a href="http://facebook.com/novio1" class="card-link"><i class="fab fa-facebook"></i></a>
                            <a href="http://instagram.com/novio1" class="card-link"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5">
                    <img id="novio2_img" class="w-100" src="dist/img/novia.jpg">
                </div>
            </div>
        </div>
    </section>

    <section id="contacto" class="mt-12 bg-body-tertiary-dia text-black py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Contáctanos</h2>
                    <p class="d-none d-md-flex">Para ponerte en contacto con nosotros, nos puedes visitar en la dirección, o nos puedes llamar o nos puedes escribir.</p>
                    <p>También puedes llenar el formulario de contacto que tenemos en esta página.</p>
                    <ul>
                        <li>Dirección: 4181 Birchwood Ave Seal Beach, CA</li>
                        <li>Tel.: +0012 345 678 911</li>
                        <li>E-mail: isabella.andrew@example.com</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2>Formulario de Contacto</h2>
                    <div>
                        <div class="form-floating mb-3">
                            <input id="formNombre" type="text" class="form-control" placeholder="Ej: María González">
                            <label for="formNombre">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="formEmail" type="email" class="form-control" placeholder="mg@example.com">
                            <label for="formEmail">Email</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="formComentario" style="height: 100px"></textarea>
                            <label for="formComentario">Comentario</label>
                        </div>
                        <button type="button" class="btn btn-light mt-3" onclick="enviarMensajeFormulario(this)">Enviar Mensaje</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="d-flex flex-wrap justify-content-between align-items-center border-top bg-body-tertiary-dia">
        <div class="container">
            <div class="row py-4">
                <div class="col-4">
                    <ul>
                        <li>Saturday, 24 September 2025 at 03:00 pm</li>
                        <li>4181 Birchwood Ave Seal Beach, CA</li>
                    </ul>
                </div>
                <div class="col-4 text-center">
                    <a href="/" aria-label="Bootstrap">
                        <img src="dist/img/logo-white.png">
                    </a>
                </div>
                <div class="col-4 align-rigth">
                    <ul>
                        <li>Tel.: +0012 345 678 911</li>
                        <li>E-mail: isabella.andrew@example.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row py-4">
                <div class="col-12 text-center">
                    derechos
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js" integrity="sha512-6BTOlkauINO65nLhXhthZMtepgJSghyimIalb+crKRPhvhmsCdnIuGcVbR5/aQY2A+260iC1OPy1oCdB6pSSwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="dist/js/main.js"></script>
</body>

</html>
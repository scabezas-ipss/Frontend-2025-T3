<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .bg-body-tertiary-dia {
            background-color: #d6d6d6ff !important;
            color: #5f5f5fff;
        }

        .bg-body-tertiary-noche {

            background-color: #8eaeba !important;
            color: white;
        }

        h1 {
            font-size: 200px;
        }

        .titulo-seccion {
            font-size: 100px;
        }

        .mt-12 {
            margin-top: 120px;
        }

        .nav-item>.nav-link {
            color: white;
        }
    </style>
</head>

<body>
    <nav id="home" class="navbar bg-body-tertiary-dia fixed-top">
        <div class="container container-fluid">
            <a class="navbar-brand" href="/">
                <img src="dist/img/logo-white.png">
            </a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="cambiarModoDiaNoche()">Dia / Noche</a>
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
                <div class="col-5">
                    <img id="novio1_img" class="w-100" src="dist/img/novio.jpg">
                </div>
                <div class="col-7">
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
                <div class="col-7">
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
                <div class="col-5">
                    <img id="novio2_img" class="w-100" src="dist/img/novia.jpg">
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
    <script>
        cambiarModoDiaNoche();

        function cambiarModoDiaNoche() {
            diaNoche = localStorage.getItem("modoDiaNoche");
            if (diaNoche == null) {
                // console.log('Aplicar Dia');
                localStorage.setItem("modoDiaNoche", "dia");
                aplicarModoDia();
            } else {
                if (diaNoche == 'dia') {
                    // console.log('es de dia, cambia a modo noche');
                    localStorage.setItem("modoDiaNoche", "noche");
                    aplicarModoNoche();
                } else {
                    // console.log('es de noche, cambia a modo dia');
                    localStorage.setItem("modoDiaNoche", "dia");
                    aplicarModoDia();
                }
            }
        }

        function aplicarModoDia() {
            const secHome = document.getElementById('home');
            secHome.classList.remove('bg-body-tertiary-noche');
            secHome.classList.add('bg-body-tertiary-dia');
            // console.log('cambios de modo dia aplicados');
        }

        function aplicarModoNoche() {
            const secHome = document.getElementById('home');
            secHome.classList.remove('bg-body-tertiary-dia');
            secHome.classList.add('bg-body-tertiary-noche');
            // console.log('cambios de modo noche aplicados');
        }
        //cambiarTextoHero();
        function cambiarTextoHero(){
            const textoGigante = document.getElementById('boda_nombre');
            textoGigante.innerText = 'Ana & Seba';
        }
    </script>
</body>

</html>
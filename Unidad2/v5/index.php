<?php
$token = 'ipss.2025';
$endpoint1 = 'http://localhost/ipss/Backend-2025-T3/Unidad2/api/v2/indicador/';

include_once 'consumoEndpoint.php';

$listaIndicadores = getApiData($endpoint1, $token);
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indicadores Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <h1>Indicadores JS</h1>
        <hr>
        <div class="row" id="contendor_tarjetas">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            [{codigo}] - {nombre}
                        </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">
                            {valor}
                        </h6>
                        <p class="card-text">
                            {texto_largo}
                        </p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script>
        cargarTarjetas('contendor_tarjetas');

        function cargarTarjetas(_id) {
            const contenedor = document.getElementById(_id);
            contenedor.innerHTML = '';

            const data = JSON.stringify(<?php echo json_encode($listaIndicadores) ?>);

            for (let index = 0; index < data.length; index++) {
                console.log(data[index]);
                // const columna = document.createElement('div');
                // columna.classList.add('col-6');
                // const tarjeta = document.createElement('div');
                // tarjeta.classList.add('card');
                // const tarjetaBody = document.createElement('div');
                // tarjetaBody.classList.add('card-body');
                // const tarjetaTitulo = document.createElement('h5');
                // tarjetaTitulo.classList.add('card-title');
                // const tarjetaSubTitutlo = document.createElement('h6');
                // tarjetaSubTitutlo.classList.add('card-subtitle');
                // tarjetaSubTitutlo.classList.add('mb-2');
                // tarjetaSubTitutlo.classList.add('text-body-secondary');
                // const tarjetaTexto = document.createElement('p');
                // tarjetaTexto.classList.add('card-text');

                // tarjetaTitulo.innerText = '[' + indicador.codigo + '] - ' + indicador.nombre
                // tarjetaSubTitutlo.innerText = indicador.unidad_medida.simbolo + ' ' + indicador.valor + ' ' + indicador.unidad_medida.codigo;
                // tarjetaTexto.innerText = data[index].nombre + ' ' + indicador.unidad_medida.simbolo + ' ' + indicador.valor + ' ' + indicador.unidad_medida.nombre.plural;

                // tarjetaBody.appendChild(tarjetaTitulo);
                // tarjetaBody.appendChild(tarjetaSubTitutlo);
                // tarjetaBody.appendChild(tarjetaTexto);
                // tarjeta.appendChild(tarjetaBody);
                // columna.appendChild(tarjeta);
                // contenedor.appendChild(columna);
            }


            // <div class="col-6">
            //     <div class="card">
            //         <div class="card-body">
            //             <h5 class="card-title">
            //                 [{codigo}] - {nombre}
            //             </h5>
            //             <h6 class="card-subtitle mb-2 text-body-secondary">
            //                 {valor}
            //             </h6>
            //             <p class="card-text">
            //                 {texto_largo}
            //             </p>
            //         </div>
            //     </div>
            // </div>

        }
    </script>
</body>

</html>
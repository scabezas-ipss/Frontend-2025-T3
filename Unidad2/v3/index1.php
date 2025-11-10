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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <h1>Indicadores</h1>
        <hr>
        <div class="row">
            <?php
            foreach ($listaIndicadores as $indicador) {
                if ($indicador['activo']) {
                    $valor = $indicador['unidad_medida']['simbolo'] . ' ' . $indicador['valor'] . ' ' . $indicador['unidad_medida']['codigo'];
                    $texto_largo = $indicador['nombre'] . ' ' . $indicador['unidad_medida']['simbolo'] . ' ' . $indicador['valor'] . ' ' . $indicador['unidad_medida']['nombre']['plural'];
                    echo '
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">[' . $indicador['codigo'] . '] - ' . $indicador['nombre'] . '</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">' . $valor . '</h6>
                                <p class="card-text">' . $texto_largo . '</p>
                                <a href="#" class="card-link">{card_link}</a>
                                <a href="#" class="card-link">{otro_link}</a>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
            ?>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
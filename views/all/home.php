<?php
//DB Connection
require_once dirname(__FILE__, 3).'/models/db_connection.php';

$businessName = queryParams("Business_Name")[0]->value;

?>

<div class="row">
    <div class="col-md-8">
        <div class="container">
            <div class="white-line"></div>
            <h1 class="title-lg">Historia</h1>
            <p class="text-content">E.D.G., nace en el año 2021 en la ciudad de Bogotá D.C., Colombia, cuando un nacional colombiano y un ciudadano extranjero decidieron compartir sus vidas, teniendo en cuenta que al ser uno de ellos de un país diferente, radicarse en el país cafetero implicaba tramitar una visa para el extranjero poder estar más tiempo con el nacional colombiano en su país de origen, en vista de ello, crean <?php echo strtoupper($businessName); ?> SAS, con el único fin de asesorar a todos los extranjeros que deciden cruzar las fronteras para iniciar de nuevo con el ser que aman, pero que nació en un lugar diferente al de ellos.</p>
        </div>
    </div>
</div>
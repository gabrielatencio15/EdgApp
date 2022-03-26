<?php
//DB Connection
require_once '../../models/db_connection.php';

$businessName = queryParams("Business_Name")[0]->value;

?>

<div class="row">
    <div class="col-md-6">
        <div class="container">
            <div class="white-line"></div>
            <h1 class="title-lg">Misión</h1>
            <p class="text-content">Ayudar a ciudadanos extranjeros como usted, que deciden establecerse en Colombia con el fin de vivir, trabajar o estudiar de manera temporal o permanente.</p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="container">
            <div class="white-line"></div>
            <h1 class="title-lg">Visión</h1>
            <p class="text-content"><?php echo strtoupper($businessName); ?> SAS, para el 2027 espera poder brindarle el mejor servicio a nuestros clientes con el fin de construir un lugar donde el extranjero pueda buscar la mejor asesoría respecto a sus trámites migratorios.</p>
        </div>
    </div>

    <div class="col-md-12">
        <div class="container">
            <div class="white-line"></div>
            <h1 class="title-lg">Nuestros valores:</h1>
            <p class="text-content"><u>Profesionales:</u> Brindado un servicio de calidad para las necesidades de los ciudadanos extranjeros, que cumpla sus expectativas para que se sientan como en casa.</p>
            <p class="text-content"><u>Confianza:</u> Hemos ayudados a varios extranjeros, a quienes agradecemos enormemente la confianza que depositaron al inicio de este gran proyecto, somos un equipo que ayuda a lograr todos los objetivos que tienen aquellos expatriados porque confiamos en sus sueños.</p>
            <p class="text-content"><u>Responsables:</u> Nos caracterizamos por dar respuesta en los menores tiempos posibles, manteniendo informados a nuestros clientes de todo su proceso y acompañándolos en todo momento para obtener los mejores resultados.</p>
        </div>
    </div>
</div>
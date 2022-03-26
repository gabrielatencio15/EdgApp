<?php
//ini_set('display_errors', 1);

//DB Connection
require_once '../../models/db_connection.php';

$listServices = queryServices();
$businessName = queryParams("Business_Name")[0]->value;

?>

<div class="row" style="padding-bottom: 30px;">
    <div class="col-md-12">
        <div class="white-line"></div>
        <p class="text-content">En <?php echo $businessName; ?>, queremos ayudarte a comprender las normas migratorias que rigen en Colombia, con la finalidad de ayudarte a elegir de manera adecuada el tipo de visa que mas se adapte a sus necesidades, así como también explicarle como obtener su Cédula de Extranjería. <?php echo $businessName; ?>, le acompañara en todo su proceso migratorio.</p>

    </div>

    <?php
    if (count($listServices) > 0) {

    ?>
        <div class="col-md-6">
            <div class="text-content">
                <h2 style="text-align: left;">Nuestros servicios incluyen:</h2>
                <ul style="text-align: left;">
                    <?php
                    foreach ($listServices as $services) {
                        echo "<li>" . $services->serviceName . "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>


        <div class="col-md-6">
            <div class="text-content-tipos-visa">
                <h2>Tipos de Visa</h2>
                <span class="text-content-tipos-visa-small">(Haz clic sobre la imagen siguiente)</span>
            </div>
            <div class="visa">
                <img class="imagen-visa animacion-visa" src="assets/src/img/visa-colombiana.jpeg" title="Ejemplo de Visa" onclick="scrollDownPage(true)" data-toggle="collapse" data-target="#accordionVisas" alt="Ilustración Visa">
            </div>
        </div>


        <div class="col-md-12" style="padding-bottom: 40px; padding-top: 15px;">

            <div class="accordion collapse" id="accordionVisas">

                <!--Visas Migrante -->
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left" onclick="scrollDownPage(false)" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="text-services-content-item-title">Visa de Migrante (M)</span>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVisas">
                        <div class="card-body text-services-content">
                            <div class="container">
                                <p>La visa de Migrante tipo (M) es para el extranjero que desee ingresar o permanecer en el territorio nacional con la intención de establecerse, y no cumple con las condiciones para solicitar una visa tipo “R”.</p>

                                <div class="accordion" id="accordionVisasTipoMigrante">

                                    <!--Visa Cónyuge -->
                                    <div class="card">
                                        <div class="card-header" id="headingOneMigrante">
                                            <h2 class="mb-0">
                                                <button class="btn btn-block text-left" onclick="scrollDownPage(false)" type="button" data-toggle="collapse" data-target="#collapseOneTipoMigrante" aria-expanded="true" aria-controls="collapseOneTipoMigrante">
                                                    <span class="text-services-content-item-title">Cónyuge de nacional colombiano</span>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOneTipoMigrante" class="collapse" aria-labelledby="headingOneMigrante" data-parent="#accordionVisasTipoMigrante">
                                            <div class="card-body text-services-content">
                                                <div class="container">
                                                    <span class="text-services-content-title"></span>

                                                    <p>Para extranjeros que se encuentren casados con ciudadanos colombianos. Esta visa permite acumular tiempo de permanencia para la Visa de Residente.</p>

                                                    <p><span>✔ <u>Requisitos específicos:</u></span></p>
                                                    <ol>
                                                        <li>Pasaporte original y vigente con al menos 6 páginas en blanco.</li>
                                                        <li>Una foto de 3x4cm, a color, con fondo blanco, reciente, de frente, sin accesorios, rostro despejado, en formato JPG de máximo 300 KB.</li>
                                                        <li>Cédula de Ciudadanía del nacional colombiano.</li>
                                                        <li>Copia auténtica del Registro Civil de Matrimonio colombiano, o de la Escritura Pública o Providencia Judicial con una fecha de expedición no mayor a 3 meses.</li>
                                                        <li>Poder Especial autenticado ante notario público.</li>
                                                        <li>Carta Solicitud de Visa autenticada ante notario público.</li>
                                                        <li>Certificado de Movimientos Migratorios tanto de la persona extranjera, así como de la persona colombiana.</li>
                                                        <li>Soportes fotográficos que demuestren la veracidad, así como la antigüedad de la relación.</li>
                                                        <li>Otros documentos, sujetos a requerimiento de la visa.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Fin Visa Cónyuge -->

                                    <!--Visa Compañero Permanente -->
                                    <div class="card">
                                        <div class="card-header" id="headingTwoMigrante">
                                            <h2 class="mb-0">
                                                <button class="btn btn-block text-left" onclick="scrollDownPage(false)" type="button" data-toggle="collapse" data-target="#collapseTwoTipoMigrante" aria-expanded="true" aria-controls="collapseTwoTipoMigrante">
                                                    <span class="text-services-content-item-title">Compañero Permanente de nacional colombiano</span>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwoTipoMigrante" class="collapse" aria-labelledby="headingTwoMigrante" data-parent="#accordionVisasTipoMigrante">
                                            <div class="card-body text-services-content">
                                                <div class="container">
                                                    <span class="text-services-content-title"></span>

                                                    <p>Para extranjeros que se encuentren bajo Unión Marital de Hecho con ciudadanos colombianos. Esta visa permite acumular tiempo de permanencia para la Visa de Residente.</p>

                                                    <p><span>✔ <u>Requisitos específicos:</u></span></p>
                                                    <ol>
                                                        <li>Pasaporte original y vigente con al menos 6 páginas en blanco.</li>
                                                        <li>Una foto de 3x4cm, a color, con fondo blanco, reciente, de frente, sin accesorios, rostro despejado, en formato JPG de máximo 300 KB.</li>
                                                        <li>Cédula de Ciudadanía del nacional colombiano.</li>
                                                        <li>Copia auténtica de la Unión Marital de Hecho (Acta de Conciliación) con una fecha de expedición no mayor a 3 meses.</li>
                                                        <li>Poder Especial autenticado ante notario público.</li>
                                                        <li>Carta Solicitud de Visa autenticada ante notario público.</li>
                                                        <li>Certificado de Movimientos Migratorios tanto de la persona extranjera, así como de la persona colombiana.</li>
                                                        <li>Soportes fotográficos que demuestren la veracidad, así como la antigüedad de la relación.</li>
                                                        <li>Otros documentos, sujetos a requerimiento de la visa.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Fin Visa Compañero Permanente -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Fin Visas Migrante -->

                <!--Visas Residente -->
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left" onclick="scrollDownPage(false)" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <span class="text-services-content-item-title">Visa de Residente (R)</span>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionVisas">
                        <div class="card-body text-services-content">
                            <div class="container">
                                <p>Para el extranjero que ha permanecido en el territorio nacional como titular de las visas Migrante (M) vigentes, acumulando los tiempos establecidos por la cancilleria colombiana.</p>

                                <div class="accordion" id="accordionVisasTipoResidente">

                                    <!--Visa Residente por Tiempo Acumulado -->
                                    <div class="card">
                                        <div class="card-header" id="headingOneResidente">
                                            <h2 class="mb-0">
                                                <button class="btn btn-block text-left" onclick="scrollDownPage(false)" type="button" data-toggle="collapse" data-target="#collapseOneTipoResidente" aria-expanded="true" aria-controls="collapseOneTipoResidente">
                                                    <span class="text-services-content-item-title">Por tiempo acumulado</span>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOneTipoResidente" class="collapse" aria-labelledby="headingOneResidente" data-parent="#accordionVisasTipoResidente">
                                            <div class="card-body text-services-content">
                                                <div class="container">
                                                    <span class="text-services-content-title"></span>

                                                    <p>Podrá aplicar el extranjero titular principal de visa Tipo M por dos (2) años en calidad de cónyuge o compañero permanente de nacional colombiano, padre o hijo de nacional colombiano por nacimiento. La visa tipo “R” tendrá vigencia indefinida. El tiempo de permanencia autorizado en el territorio nacional al titular de la visa tipo (R) será igual al tiempo de vigencia.</p>

                                                    <p><span>✔ <u>Requisitos específicos:</u></span></p>
                                                    <ol>
                                                        <li>Pasaporte original y vigente con al menos 6 páginas en blanco.</li>
                                                        <li>Una foto de 3x4cm, a color, con fondo blanco, reciente, de frente, sin accesorios, rostro despejado, en formato JPG de máximo 300 KB.</li>
                                                        <li>Documento que certifique o acredite que las circunstancias o condiciones que dieron lugar al otorgamiento de la última visa aún permanecen.</li>
                                                        <li>Certificado de Movimiento Migratorios. </li>
                                                        <li>Última visa colombiana vigente.</li>
                                                        <li>Cédula de Extranjería vigente.</li>
                                                        <li>Otros documentos, sujetos a requerimiento de la visa.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Fin Visa Residente por Tiempo Acumulado -->


                                    <!--Visa Residente por Padre o Madre de nacional colombiano por nacimiento -->
                                    <div class="card">
                                        <div class="card-header" id="headingTwoResidente">
                                            <h2 class="mb-0">
                                                <button class="btn btn-block text-left" onclick="scrollDownPage(false)" type="button" data-toggle="collapse" data-target="#collapseTwoTipoResidente" aria-expanded="true" aria-controls="collapseTwoTipoResidente">
                                                    <span class="text-services-content-item-title">Padre o madre de nacional colombiano por nacimiento</span>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwoTipoResidente" class="collapse" aria-labelledby="headingTwoResidente" data-parent="#accordionVisasTipoResidente">
                                            <div class="card-body text-services-content">
                                                <div class="container">
                                                    <span class="text-services-content-title"></span>

                                                    <p>Podrá aplicar el extranjero padre de un nacional colombiano por nacimiento, bien sea porque alguno de los padres es nacional colombiano o que los padres siendo extranjeros se encontraban domiciliados en Colombia al momento del nacimiento.</p>

                                                    <p><span>✔ <u>Requisitos específicos:</u></span></p>
                                                    <ol>
                                                        <li>Pasaporte original y vigente con al menos 6 páginas en blanco.</li>
                                                        <li>Una foto de 3x4cm, a color, con fondo blanco, reciente, de frente, sin accesorios, rostro despejado, en formato JPG de máximo 300 KB.</li>
                                                        <li>Carta de solicitud según el caso:</li>
                                                        <ul>
                                                            <li>Cuando el hijo nacional colombiano es menor de edad: la carta deberá estar firmada por el otro padre manifestando que el extranjero solicitante de visa está cumpliendo cabalmente con las obligaciones alimentarias correspondientes.</li>
                                                            <li>Cuando el hijo sea mayor de edad: deberá presentar carta de solicitud de visa para el padre o la madre extranjero acompañada de una fotocopia de la cédula de ciudadanía colombiana.</li>
                                                        </ul>
                                                        <li>Copia del Registro Civil de Nacimiento del hijo nacional colombiano.</li>
                                                        <li>Última visa colombiana vigente.</li>
                                                        <li>Cédula de Extranjería vigente.</li>
                                                        <li>Otros documentos, sujetos a requerimiento de la visa.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Fin Visa Residente por Padre o Madre de nacional colombiano por nacimiento -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Fin Visas Residente -->


            </div>
        </div>

    <?php
    }
    ?>
</div>
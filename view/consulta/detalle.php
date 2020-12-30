<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Inmueble</title>
</head>

<body>
    <?php require_once 'view/header.php'; ?>
    <div class="container mt-4 py-5 mb-5 bg-light rounded">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><?php echo $this->registro->nombres . " " . $this->registro->apellido_1 . " " . $this->registro->apellido_2; ?> </h1>
                <p class="lead">
                    <strong>
                        <!-- ID: <?php echo $this->registro->id_paciente; ?> -->
                        Clave paciente: <?php echo $this->registro->cve_paciente; ?>
                    </strong>
                </p>
            </div>
        </div>
        <?php
        if (isset($this->mensaje)) {
            //echo $this->mensaje;
            Core::alert($this->mensaje, $this->tipoMensaje);
        }
        ?>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h4>General</h4>
                        <div class="row">
                            <div class="col-2">
                                <strong>Género: </strong>
                                <?php
                                echo $this->registro->genero;
                                ?>
                            </div>
                            <div class="col-4">
                                <strong>Fecha de nacimiento: </strong>
                                <?php
                                echo $this->registro->fecha_nacimiento;
                                ?>
                            </div>
                            <div class="col-3">
                                <strong>Edad: </strong>
                                <?php
                                echo Paciente::getEdad($this->registro->fecha_nacimiento);
                                ?>
                                años
                            </div>
                            <div class="col-3">
                                <strong>Ocupación: </strong>
                                <?php
                                echo $this->registro->ocupacion;
                                ?>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-3">
                                <strong>Último peso: </strong>
                                <?php
                                echo $this->registro->ultimo_peso;
                                ?>
                                kg
                            </div>
                            <div class="col-3">
                                <strong>Estatura: </strong>
                                <?php
                                echo $this->registro->estatura;
                                ?>
                                mts
                            </div>
                            <div class="col-3">
                                <strong>Cintura: </strong>
                                <?php
                                echo $this->registro->cintura;
                                ?>
                                cm
                            </div>
                            <div class="col-3">
                                <strong>Cadera: </strong>
                                <?php
                                echo $this->registro->cadera;
                                ?>
                                cm
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <strong>Presión arterial: </strong>
                                <?php
                                echo $this->registro->presion_arterial;
                                ?>
                                kg
                            </div>
                            <div class="col-6">
                                <strong>Apetito: </strong>
                                <?php
                                echo $this->registro->apetito;
                                ?>
                                mts
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h4>Comidas</h4>
                        <div class="row">
                            <div class="col-6">
                                <strong>Comidas al día: </strong>
                                <?php
                                echo $this->registro->comidas;
                                ?>
                            </div>
                            <div class="col-6">
                                <strong>Comidas en fin de semana (aprox): </strong>
                                <?php
                                echo $this->registro->comidas_fines;
                                ?>
                            </div>
                            <div class="col-6">
                                <strong>Persona que prepara alimentos: </strong>
                                <?php
                                echo $this->registro->persona_prepara;
                                ?>
                            </div>
                            <div class="col-6">
                                <strong>Horario con más apetito: </strong>
                                <?php
                                echo $this->registro->horario_mas_hambre;
                                ?>
                            </div>
                            <div class="col-6">
                                <strong>Consumo de agua promedio: </strong>
                                <?php
                                echo $this->registro->agua;
                                ?>
                                litros al día
                            </div>
                            <div class="col-6">
                                <strong>Consumo promedio de líquidos (no agua): </strong>
                                <?php
                                echo $this->registro->liquidos;
                                ?>
                                litros al día
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h4>Actividad física</h4>
                        <div class="row">
                            <div class="col-4">
                                <strong>Actividad física: </strong>
                                <?php
                                echo Paciente::traduceActividadFisica($this->registro->actividad_fisica);
                                ?>
                            </div>
                            <div class="col-4">
                                <strong>Frecuencia: </strong>
                                <?php
                                echo $this->registro->frecuencia_actividad;
                                ?>
                                días a la semana
                            </div>
                            <div class="col-4">
                                <strong>Duración: </strong>
                                <?php
                                echo $this->registro->duracion_actividad;
                                ?>
                                min/hrs
                            </div>
                        </div>
                    </li>






                    <li class="list-group-item">
                        <p>
                            <strong>Motivación</strong>
                        </p>
                        <p>
                            <?php echo $this->registro->motivo; ?>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <p>
                            <strong>Domicilio</strong>
                        </p>
                        <p>
                            <?php echo $this->registro->domicilio; ?>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-12">
                                <strong>Observaciones</strong>
                                <?php
                                !isset($this->observacion->observacion) ?  $observacion = "" : $observacion = $this->observacion->observacion;
                                ?>
                                <textarea maxlength="1000" class="form-control" name="observaciones" id="observaciones" cols="30" rows="7" disabled>
                                    <?php echo $observacion; ?>
                                </textarea>
                            </div>
                    </li>
                </ul>


            </div>
        </div>
    </div>
    <!-- //Galería de imagenes -->
    <?php
    if (isset($this->imagen)) {
        require_once 'galeria.php';
    } else {
        require_once 'agregarImg.php';
    }
    ?>
    <!-- Módulo de obra -->
    <?php
    require_once 'obra.php';
    ?>
    <div class="container bg-light rounded  mb-5 ">
        <div class="row">
            <div class="col clearfix mb-4">
                <h2>Historial de documentos</h2>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-dark bg-red-pj float-left" data-toggle="modal" data-target="#modalStatus">Agregar Status</a>
                <a href="#" class="btn btn-dark bg-red-pj float-right" data-toggle="modal" data-target="#modalAcciones">Agregar Evidencia</a>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <table class="table tabala-documentos">
                    <thead>
                        <tr>
                            <th>Status Inmueble</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($this->docStatus) {
                            foreach ($this->docStatus as $documentoStatus) {
                        ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo $documentoStatus['fecha'];
                                        ?>
                                        <a href="<?php echo constant('URL') . 'resources/archivosStatus/' . $documentoStatus['nombre']; ?> " target="_blank">
                                            <?php
                                            echo $documentoStatus['nombre'];
                                            ?>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    echo "No hay registros";
                                    ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <table class="table tabala-documentos">
                    <thead>
                        <tr>
                            <th>Acciones realizadas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($this->docAcciones) {
                            foreach ($this->docAcciones as $documentoAcciones) {
                        ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo $documentoAcciones['fecha'];
                                        ?>
                                        <a href="<?php echo constant('URL') . 'resources/archivosAcciones/' . $documentoAcciones['nombre']; ?> " target="_blank">
                                            <?php
                                            echo $documentoAcciones['nombre'];
                                            ?>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    echo "No hay registros";
                                    ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Cargamos contactos-->
    <?php
    $contactoGob  = "No hay registro";
    $contactoProp = "No hay registro";
    $contactoPJ = "No hay registro";
    $telefonoGob = "";
    $telefonoProp = "";
    $telefonoPJ = "";
    $mailGob = "";
    $mailProp = "";
    $mailPJ = "";
    if ($this->contactos) {
        // print ("Hay  registros");
        foreach ($this->contactos as $contacto) {
            // $contacto->tipo_contacto == 1 ? $contactoGob = $contacto->telefono : "-";
            // $contacto->tipo_contacto == 2 ? $contactoProp = $contacto->telefono : "-";
            // $contacto->tipo_contacto == 3 ? $contactoPJ = $contacto->telefono : "-";
            switch ($contacto->tipo_contacto) {
                case 1:
                    $contactoGob = $contacto->nombre;
                    $telefonoGob = $contacto->telefono;
                    $mailGob = $contacto->correo;
                    break;
                case 2:
                    $contactoProp = $contacto->nombre;
                    $telefonoProp = $contacto->telefono;
                    $mailProp = $contacto->correo;
                    break;
                case 3:
                    $contactoPJ = $contacto->nombre;
                    $telefonoPJ = $contacto->telefono;
                    $mailPJ = $contacto->correo;
                    break;
                default:
                    # code...
                    break;
            }
        }
    }
    ?>
    <div class="container mb-5 bg-light rounded">
        <div class="row">
            <div class="col-12">
                <h4>Contácto</h4>
            </div>
            <div class="col-12 col-sm-4 ">
                <h5>Gobierno Estatal</h5>
                <p>
                    <strong>
                        <?php echo $contactoGob ?>
                    </strong>
                </p>
                <p>
                    <a href="tel: <?php echo $telefonoGob; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <?php echo $telefonoGob; ?>
                    </a>
                </p>
                <p>
                    <a href="https://api.whatsapp.com/send?phone=52<?php echo $telefonoGob; ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                            <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                        </svg>
                        <?php echo $telefonoGob; ?>
                    </a>
                </p>
                <p>
                    <a href="mailto: <?php echo $mailGob ?> ">
                        <?php echo $mailGob; ?>
                    </a>
                </p>
            </div>
            <div class="col-12 col-sm-4 ">
                <h5>Propietario C/V</h5>
                <p>
                    <strong>
                        <?php echo $contactoProp ?>
                    </strong>
                </p>
                <p>
                    <a href="tel: <?php echo $telefonoProp; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <?php echo $telefonoProp; ?>
                    </a>
                </p>
                <p>
                    <a href="https://api.whatsapp.com/send?phone=52<?php echo $telefonoProp; ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                            <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                        </svg>
                        <?php echo $telefonoProp; ?>
                    </a>
                </p>
                <p>
                    <a href="mailto: <?php echo $mailProp ?> ">
                        <?php echo $mailProp; ?>
                    </a>
                </p>
            </div>
            <div class="col-12 col-sm-4 ">
                <h5>Poder Judicial</h5>
                <p>
                    <strong>
                        <?php echo $contactoPJ ?>
                    </strong>
                </p>
                <p>
                    <a href="tel: <?php echo $telefonoPJ; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <?php echo $telefonoPJ; ?>
                    </a>
                </p>
                <p>
                    <a href="https://api.whatsapp.com/send?phone=52<?php echo $telefonoPJ; ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                            <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                        </svg>
                        <?php echo $telefonoPJ; ?>
                    </a>
                </p>
                <p>
                    <a href="mailto: <?php echo $mailPJ ?> ">
                        <?php echo $mailPJ; ?>
                    </a>
                </p>
            </div>
            <div class="col-12 mb-2">
                <button class="btn btn-dark bg-red-pj" data-toggle="modal" data-target="#modalContacto">Editar contáctos</button>
            </div>
        </div>
    </div>
    <?php require_once 'view/footer.php'; ?>
</body>
<?php require_once 'modalImagen.php'; ?>
<?php require_once 'modalObra.php'; ?>
<?php require_once 'modalStatus.php'; ?>
<?php require_once 'modalAcciones.php'; ?>
<?php require_once 'modalContacto.php'; ?>
<!--<script src="<?php echo constant('URL'); ?>resources/js/inmuebles.js"></script>-->
<script src="<?php echo constant('URL') . 'resources/js/detallesInmuebles.js'; ?>"></script>

</html>
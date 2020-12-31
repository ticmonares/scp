<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Inmueble</title>
</head>

<body>
    <?php require_once 'view/header.php'; ?>
    <?php require_once 'view/preloader/index.php'; ?>
    <div class="container mt-5 mb-5 bg-light rounded">
        <div id="main">
            <h1 class="center">Registros</h1>
        </div>
        <?php
        if (isset($this->mensaje)) {
            //echo $this->mensaje;
            Core::alert($this->mensaje, $this->tipoMensaje);
        }
        ?>
        <a class="btn btn-dark bg-red-pj" href="<?php echo constant('URL') . 'consulta/nuevoRegistro'; ?>">Nuevo</a>

        <div class="row mt-0 ">
            <div class="col-12  d-flex justify-content-center">
                <table class="table table-responsive  " id="tabla-registros-inmuebles">
                    <thead class="thead-dark">
                        <tr>
                            <!-- <th scope="col">#</th> -->
                            <th class="tbl-heading" scope="col">#Cve Paciente</th>
                            <th class="tbl-heading" scope="col">Nombre</th>
                            <th class="tbl-heading" scope="col">Género</th>
                            <th class="tbl-heading" scope="col">Edad</th>
                            <!-- <th class="tbl-heading" scope="col">Actividad física</th> -->
                            <!-- <th class="tbl-heading" scope="col">Peso</th> -->
                            <th class="tbl-heading" scope="col">Fecha registro</th>
                            <th class="tbl-heading" scope="col">Ver</th>
                        </tr>
                    </thead>
                    <tbody id="tbody-tabla-registros">
                        <?php
                        //
                        require_once 'model/classes/ModalidadPropiedad.class.php';
                        $modalidad = new ModalidadPropiedad();
                        require_once 'model/classes/EstadoProcesal.class.php';
                        $estado = new EstadoProcesal();
                        //
                        foreach ($this->datos as $registro) {
                        ?>
                            <tr>
                                <!-- <th class="scope">
                                            <?php
                                            echo $registro->id_paciente;
                                            ?>
                                        </th> -->
                                <th>
                                    <?php
                                    echo $registro->cve_paciente;
                                    ?>
                                </th>
                                <td>
                                    <?php
                                    echo $registro->nombres . " " . $registro->apellido1 . " " . $registro->apellido2;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $registro->genero;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo Paciente::getEdad($registro->fecha_nacimiento);
                                    ?>
                                </td>
                                <!-- <td>
                                            <?php
                                            echo Paciente::traduceActividadFisica($registro->actividad_fisica);
                                            ?>
                                        </td> -->
                                <td>
                                    <?php
                                    echo $registro->fecha_registro;
                                    ?>
                                </td>


                                <td>
                                    <a href="<?php echo constant('URL') . 'consulta/VerRegistro/' . $registro->id_paciente; ?>">más</a>
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
    <?php require_once 'view/footer.php'; ?>
</body>
<script src="<?php echo constant('URL'); ?>resources/js/main.js"></script>
<script src="<?php echo constant('URL'); ?>resources/js/tabla-inmuebles.js"></script>

</html>
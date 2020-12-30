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
    <div class="container">
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
        <section class="container" >
            <div class="row">
                <div class="col-12  d-flex justify-content-center" >
                    <form action="#" class="form-inline">
                        <strong>Ver por: </strong>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3  ">
                            <div class="form-group">
                                <label for="region">Región</label>
                                <select class="form-control registro-select " name="region" id="region">
                                    <option value="0">Seleccione una región</option>
                                    <option value="1">TOLUCA</option>
                                    <option value="2">TEXCOCO</option>
                                    <option value="3">TLALNEPANTLA</option>
                                    <option value="4">ECATEPEC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 ">
                            <div class="form-group">
                                <label for="distrito">Distrito</label>
                                <select class="form-control registro-select " name="distrito" id="distrito">
                                    <option value="0">Seleccione un distrito</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 ">
                            <div class="form-group">
                                <label for="municipio">Municipio</label>
                                <select class="form-control registro-select " name="municipio" id="municipio">
                                <option value="0">Seleccione un municipio</option>
                                </select>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- <div class="row ">
                <p>
                <strong>Buscar por:</strong>    
                </p>
                <div class="col-4">
                    <div class="form-group">
                        
                        <input type="text" class="form-control" placeholder="Atributo">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        
                        <select name="criterio" id="criterio" class="form-control">
                            <option value="1">No. Expediente</option>
                            <option value="1">Modalidad</option>
                            <option value="1">Estado procesal</option>
                            <option value="1">Status</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <input type="button" value="Buscar" class="btn btn-dark bg-red-pj  " >
                    </div>
                </div>
            </div> -->

        </div>
        <div class="container mb-5 mt-0">
            <div class="row mt-0 ">
                <div class="col-12  d-flex justify-content-center">
                    <table class="table table-responsive  " id="tabla-registros-inmuebles" >
                        <thead class="thead-dark">
                            <tr>
                                <!-- <th scope="col">#</th> -->
                                <th class="tbl-heading" scope="col">#Cve Paciente</th>
                                <th class="tbl-heading" scope="col">Nombre</th>
                                <th class="tbl-heading" scope="col">Género</th>
                                <th class="tbl-heading" scope="col">Edad</th>
                                <th class="tbl-heading" scope="col">Actividad física</th>
                                <th class="tbl-heading" scope="col">Peso</th>
                                <th class="tbl-heading" scope="col">Ver</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-tabla-registros" >
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
                                        echo $registro->id_paciente;
                                        ?>
                                    </th>
                                    <td>
                                        <?php
                                        echo $registro->nombres." ".$registro->apellido_1." ".$registro->apellido_2;
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
                                    <td>
                                        <?php                    
                                            echo Paciente::traduceActividadFisica($registro->actividad_fisica);
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $registro->ultimo_peso;
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
    </div>
    <?php require_once 'view/footer.php'; ?>
</body>
<script src="<?php echo constant('URL'); ?>resources/js/main.js"></script>
<script src="<?php echo constant('URL'); ?>resources/js/tabla-inmuebles.js"></script>
</html>
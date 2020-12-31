<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Inmueble</title>
</head>

<body>
    <?php require_once 'view/header.php'; ?>
    <div class="container mt-5 mb-5 bg-light rounded">
        <div class="col">
            <div class="text-center">
                <h1 class="center encabezado">Regsitrar paciente</h1>
                <div class="alert alert-info" role="alert">
                    Los campos marcados con <span class="resaltado">*</span> son obligatorios
                </div>
            </div>
            <div class="center">
                <?php
                if (isset($this->mensaje)) {
                    //echo $this->mensaje;
                    Core::alert($this->mensaje, $this->tipoMensaje);
                }
                ?>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a id="nav-formPaso0" class=" form-paso formPaso0 nav-link active " href="#" onclick="irAPaso('formPaso0','formPaso0')">General</a>
                </li>
                <li class="nav-item">
                    <a id="nav-formPaso1" class=" form-paso formPaso1 nav-link disabled " href="#" onclick="irAPaso('formPaso0','formPaso1')">Datos clínicos</a>
                </li>
                <li class="nav-item">
                    <a id="nav-formPaso2" class=" form-paso formPaso2 nav-link disabled " href="#" onclick="irAPaso('formPaso0','formPaso2')">Actividad física</a>
                </li>
                <li class="nav-item">
                    <a id="nav-formPaso3" class=" form-paso formPaso3 nav-link disabled " href="#" onclick="irAPaso('formPaso0','formPaso3')">Alimentación</a>
                </li>
                <li class="nav-item">
                    <a id="nav-formPaso4" class=" form-paso formPaso4 nav-link disabled " href="#" onclick="irAPaso('formPaso0','formPaso4')">Detalles clínicos</a>
                </li>
            </ul>
            
            <form action="<?php echo constant('URL') . 'consulta/registrarNuevo'; ?>" method="POST" enctype="multipart/form-data" id="form-paciente">
                <section id="form-main">

                    <div id="formPaso0" class="form-pasos enabled">
                        <h4>General</h4>
                        <h5>Datos personales</h5>
                        <div class=" form-group row mt-4">
                            <div class="col-sm-4">
                                <label for="cve_paciente"><span class="resaltado">*</span>Clave paciente</label>
                                <div class="col-12">
                                    <input type="number" min="0" class="form-control " name="cve_paciente" id="cve_paciente" required>
                                </div>
                            </div>
                        </div>
                        <div class=" form-group row mt-4">
                            <div class="col-sm-4">
                                <label for="nombres"><span class="resaltado">*</span>Nombres</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="nombres" id="nombres" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="apellido1"><span class="resaltado">*</span>Primer Apellido</label>
                                <div>
                                    <input type="text" class="form-control" name="apellido1" id="apellido1" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="apellido2"><span class="resaltado">*</span>Segundo Apellido</label>
                                <div>
                                    <input type="text" class="form-control" name="apellido2" id="apellido2" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Domicilio y contáxcto</h5>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="genero"><span class="resaltado">*</span>Género</label>
                                <div class="col-12">
                                    <select class="form-select" name="genero" id="genero" class="genero" required>
                                        <option value="F" selected>Femenino</option>
                                        <option value="M">Masculino</option>
                                        <option value="O">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="fecha_nacimiento" class="col-form-label"> <span class="resaltado">*</span>Fecha de Nacimiento</label>
                                <div class="col-12">
                                    <input class="form-control" type="date" value="1990-01-01" name="fecha_nacimiento" id="fecha_nacimiento" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="ocupacion" class="col-form-label">Ocupación</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="ocupacion" id="ocupacion">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="calle-numero">Calle y número</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="calle-numero" name="calle-numero">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="colonia">Colonia</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="colonia" name="colonia">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="municipio">Municipio</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="municipio" name="municipio">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-sm-4">
                                <label for="movil"><span class="resaltado">*</span>Celular</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" id="movil" name="movil" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="telefono">Teléfono local</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" id="telefono" name="telefono">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="correo"><span class="resaltado">*</span>Correo</label>
                                <div class="col-12">
                                    <input type="mail" class="form-control" id="correo" name="correo" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="motivacion">Motivación (Aquí podemos extendernos mucho)</label>
                            <textarea class="form-control" name="motivacion" id="motivacion" cols="30" rows="10"></textarea>
                        </div>

                    </div>


                    <div id="formPaso1" class="form-pasos disabled">
                        <h4>Datos clínicos</h4>
                        <div class="form-group row ">
                            <div class="col-sm-6">
                                <label for="peso" class="col-form-label"><span class="resaltado">*</span>Peso</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" name="peso" id="peso" placeholder="Peso en kilogramos" min="0" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="talla" class="col-form-label"><span class="resaltado">*</span>Talla (estatura)</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" name="talla" id="talla" placeholder="Altura en metros" min="0" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="cintura" class="col-form-label"><span class="resaltado">*</span>Circunferencia de cintura</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" name="cintura" id="cintura" placeholder="Circunferencia en centímetros" min="0" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="cadera" class="col-form-label"><span class="resaltado">*</span>Circunferencia de cadera</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" name="cadera" id="cadera" placeholder="Circunferencia en centímetros" min="0" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="formPaso2" class="form-pasos disabled">
                        <h4>Actividad física</h4>
                        <div class="form-group row ">

                            <div class="col-sm-4">
                                <label for="actividad-fisica" class="col-form-label"><span class="resaltado">*</span>¿Cuánta actividad física realiza?</label>
                                <div class="col-12">
                                    <select name="actividad-fisica" id="actividad-fisica" class="form-select" required>
                                        <option value="0">Nada</option>
                                        <option value="1">Poca</option>
                                        <option value="2">Regular</option>
                                        <option value="3">Mucha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="frecuencia-af" class="col-form-label"><span class="resaltado">*</span>¿Cuántos días a la semana?</label>
                                <div class="col-12">
                                    <select name="frecuencia-af" id="frecuencia-af" class="form-select" required>
                                        <option value="0">0 días a la semana</option>
                                        <option value="1">1 días a la semana</option>
                                        <option value="2">2 días a la semana</option>
                                        <option value="3">3 días a la semana</option>
                                        <option value="4">4 días a la semana</option>
                                        <option value="5">5 días a la semana</option>
                                        <option value="6">6 días a la semana</option>
                                        <option value="7">7 días a la semana</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="duracion-af" class="col-form-label"><span class="resaltado">*</span>Duración promedio al día (en minutos)</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" id="duracion-af" min="0" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="formPaso3" class="form-pasos disabled">
                        <h4>Alimentación</h4>
                        <h5>General</h5>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="apetito" class="col-form-label"><span class="resaltado">*</span>Apetito</label>
                                <div class="col-12">
                                    <select name="apetito" id="apetito" class="form-select" required>
                                        <option value="0">Malo</option>
                                        <option value="1">Regular</option>
                                        <option value="2">Bueno</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="horario-hambre" class="col-form-label"><span class="resaltado">*</span>¿En qué horario tiene mas hambre?</label>
                                <div class="col-12">
                                    <select name="horario-hambre" id="horario-hambre" name="horario-hambre" class="form-select" required>
                                        <option value="Mañana">Mañana</option>
                                        <option value="Tarde">Tarde</option>
                                        <option value="Noche">Noche</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="persona-prepara" class="col-form-label"><span class="resaltado">*</span>¿Quién prepara sus alimentos?</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="persona-prepara" name="persona-prepara" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="comidas-dia" class="col-form-label"><span class="resaltado">*</span>Comidas al día</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" id="comidas-dia" name="comidas-dia" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="comidas-finde" class="col-form-label"><span class="resaltado">*</span>Comidas en fin de semana</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" id="comidas-finde" name="comidas-finde" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="dieta-fin-semana" class="col-form-label"><span class="resaltado">*</span>Dieta en fin de semana</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="dieta-fin-semana" name="dieta-fin-semana" required>
                                    <div id="help-dieta-fin-semana" class="form-text">Por ejemplo: si comes en restaurantes y no en casa, si comes postres o refrescos</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="alimentos-ok" class="col-form-label"><span class="resaltado">*</span>Alimentos preferidos</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="alimentos-ok" name="alimentos-ok" required>
                                    <div id="help-alimentos-ok" class="form-text">Separar con comas.</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="alimentos-bad" class="col-form-label"><span class="resaltado">*</span>Alimentos que causen malestar</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="alimentos-bad" name="alimentos-bad" required>
                                    <div id="help-alimentos-bad" class="form-text">Separar con comas.</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="alimentos-alergia" class="col-form-label"><span class="resaltado">*</span>Alimentos que causen alérgia</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="alimentos-alergia" name="alimentos-alergia" required>
                                    <div id="help-alimentos-alergia" class="form-text">Separar con comas.</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Líquidos y drogas</h5>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="agua" class="col-form-label"><span class="resaltado">*</span>¿Cuantos litros de agua toma al día?</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" id="agua" name="agua" required>
                                    <div id="help-agua" class="form-text">Dato aproximado. </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="liquidos" class="col-form-label">Consumo de líquidos al día aproximadamente</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" id="liquidos" name="liquidos">
                                    <div id="help-liquidos" class="form-text">No agua, por ejemplo: leche, jugo, café. </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="drogas" class="col-form-label">Consumo de drogas </label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="drogas" name="drogas">
                                    <div id="help-drogas" class="form-text">Por ejemplo: café, tabaco, alcohol. </br> *Separar con comas.</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Suplementos</h5>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="nombre-suplemento" class="col-form-label">Suplemento</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="nombre-suplemento" name="nombre-suplemento">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="dosis-suplemento" class="col-form-label">Dosis</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" id="dosis-suplemento" name="dosis-suplemento">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="motivo-suplemento" class="col-form-label">Motivo</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="motivo-suplemento" name="motivo-suplemento">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="formPaso4" class="form-pasos disabled">
                        <h4>Detalles clínicos</h4>
                        <h5>General</h5>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="problemas-actuales" class="col-form-label">Problemas actuales</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="problemas-actuales" name="problemas-actuales">
                                    <div id="help-problemas-actuales" class="form-text">Por ejemplo: diarrea, colítis, estreñimiento, etc. </br> *Separar con comas.</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="enfermedad-importante" class="col-form-label">Enfermedad importante</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="enfermedad-importante" name="enfermedad-importante">
                                    <div id="help-enfermedad-importante" class="form-text">Por ejemplo: diabetes, etc. </br> *Separar con comas.</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="medicamento" class="col-form-label">Medicamento</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="medicamento" name="medicamento">
                                    <div id="help-medicamento" class="form-text">Por ejemplo: aspirinas y demás jaja (borrame). </br> *Separar con comas.</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="dosis-medicamento" class="col-form-label">Dosis medicamento</label>
                                <div class="col-12">
                                    <input type="number" class="form-control" id="dosis-medicamento" name="dosis-medicamento">
                                    <div id="help-dosis-medicamento" class="form-text">Por ejemplo: aspirinas y demás jaja (borrame). </br> *Separar con comas.</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Aspectos ginecológicos</h5>
                        Validar sólo para mujeres
                        <div class="form-group row" id="subFormMujeres">
                            <div class="col-sm-6">
                                <label for="aspectos-ginecologicos" class="col-form-label">Aspectos Ginecológicos</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="aspectos-ginecologicos" name="aspectos-ginecologicos">
                                    <div id="help-aspectos-ginecologicos" class="form-text">Por ejemplo: Embarazo actual, Uso de anticonceptivos orales, etc. </br> *Separar con comas.</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="detalles-ginecologicos" class="col-form-label">Cuales y/o desde cuando</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="detalles-ginecologicos" name="detalles-ginecologicos">
                                    <div id="help-detalles-ginecologicos" class="form-text">En caso de que alguna de tu respuesta anterior sea SI, por favor especifica </br> *Separar con comas.</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Detalles bioqímicos</h5>
                        <div class="form-group row" id="subFormMujeres">
                            <div class="col-sm-6">
                                <label for="detalles-bioquimicos" class="col-form-label">Detalles bioquímicos rlevantes</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="detalles-bioquimicos" name="detalles-bioquimicos">
                                    <div id="help-detalles-bioquimicos" class="form-text">Algún valor bioquímico que sepas que tienes elevado o bajo. </br> *Separar con comas.</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="presion-arterial" class="col-form-label">Presión arterial</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="presion-arterial" name="presion-arterial">
                                    <div id="help-presion-arterial" class="form-text">en caso de que conozcas este dato, por favor anota valor, fecha y hora de la lectura.</div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="doc-evaluacion-bioquimica" class="col-form-label">Evaluación bioqímica</label>
                                <div class="col-12">
                                    <input class="form-control" type="file" name="doc-evaluacion-bioquimica" id="doc-evaluacion-bioquimica">
                                    <div id="help-doc-evaluacion-bioquimica" class="form-text">En caso de tener algun documento, foto, datos, etc...por favor, adjunta el archivo.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- Cerramos el section principal -->
                <div class="row pt-3 pb-5">
                    <div class="col-2">
                        <a id="btnAtras" class="btn btn-dark bg-main float-left disabled" onclick="irAPaso('fromPaso0','formPaso-1')">Anterior</a>
                    </div>
                    <div class="col-2 offset-8">
                        <a id="btnSiguiente" class="btn btn-dark bg-main float-left" onclick="irAPaso('formPaso0','formPaso1')">Siguente</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'view/footer.php'; ?>
</body>
<script src="<?php echo constant('URL'); ?>resources/js/inmuebles.js"></script>
<script src="<?php echo constant('URL'); ?>resources/js/nuevo.js"></script>

</html>
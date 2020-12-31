function validaDatosSubform(idSubForm, idShowSubForm) {
    let intIdSubForm = parseInt(idSubForm.substr(8));
    let intIdShowSubForm = parseInt(idShowSubForm.substr(8));
    // console.log('Validamos datos llenos de: ' + idSubForm );
    let datosVacios = 0;
    let datosLlenos = false;
    let $subFrom = document.querySelector('#' + idSubForm);
    let inputsRequired = $subFrom.querySelectorAll('input');
    inputsRequired.forEach(
        $inputRequired => {
            $inputRequired.addEventListener('change', function (event) {
                validaDatosSubform(idSubForm, idSubForm);
            });
            // console.log($inputRequired.required);
            //SOlo  el paso anterior es menor o igual que el que vamos a mostrar hacemos la validación
            // console.log('Paso actual: ' + idSubForm );
            // console.log('Paso a mostrar: ' + idShowSubForm );
            if (intIdSubForm <= intIdShowSubForm) {
                //Si tiene el atributo required
                // console.log('Se ejecuta validación de form');
                if ($inputRequired.required) {
                    //Y si esta vacío
                    if ($inputRequired.value == "") {
                        $inputRequired.classList.add('input-is-required');
                        datosVacios++;
                        $inputRequired.focus();
                    } else {
                        $inputRequired.classList.remove('input-is-required');
                        $inputRequired.classList.add('input-is-required-ok');
                    }
                }
            }
        });
    datosVacios == 0 ? datosLlenos = true : datoLlenos = false;
    // console.log('datosLlenos:' + datosLlenos );
    return datosLlenos;
}

// // Example starter JavaScript for disabling form submissions if there are invalid fields
// (function () {
//     'use strict'
//     console.log('Hola');
// })()

function escondeSubForm(divId) {
    // console.log("Escondemos a " + divId);
    let $divId = document.getElementById(divId);
    $divId.classList.remove("enabled");
    $divId.classList.add("disabled");
}

function muestraSubFrom(divId) {
    // console.log("Mostramos a " + divId);
    let $divId = document.getElementById(divId);
    $divId.classList.remove("disabled");
    $divId.classList.add("enabled");
}

function irAPaso(divIdActual, divIdShow) {
    if (validaDatosSubform(divIdActual, divIdShow)) {
        activaTabSubMenu(divIdShow)
        //Obtenemos el valor númerico del subForm
        let numPasoInt = parseInt(divIdShow.substr(8));
        let $btnAtras = document.getElementById('btnAtras');
        let $btnSiguiente = document.getElementById('btnSiguiente');
        //Escondemos todos los pasos
        let $divsForm = document.querySelectorAll('.form-pasos');
        $divsForm.forEach($divForm => {
            escondeSubForm($divForm.id);
        });
        //Mostramos el paso a activar
        muestraSubFrom(divIdShow);
        //Acttualizamos los tabs del submenu
        actualizaTabsSubMenu(divIdShow);
        //Asignamos el valor de los pasos
        let pasoAnterior = numPasoInt - 1;

        let pasoSiguiente = numPasoInt + 1;
        //Creamos el string del form para enviarlo correctamente por parametro
        let pasoAnteriorString = "formPaso" + pasoAnterior;
        let pasoActualString = divIdShow;
        let pasoSiguienteString = "formPaso" + pasoSiguiente;
        //Actualizamos las funciones en los botones
        $btnAtras.removeAttribute('onclick');
        $btnAtras.setAttribute('onclick', 'irAPaso( "' + pasoActualString + '", "' + pasoAnteriorString + '")');
        $btnSiguiente.removeAttribute('onclick');
        $btnSiguiente.setAttribute('onclick', 'irAPaso("' + pasoActualString + '" , "' + pasoSiguienteString + '")');
        //Controlamos los botónes para habilitar/deshabilitar
        controlaBotones(divIdShow);
    } else {
        // alert("Falta información en este formulario");
        Swal.fire({
            icon: 'warning',
            title: 'Advertencia',
            text: 'Falta información importante en este formulario',
        });
    }
}

function controlaBotones(fromPaso) {
    let $btnAtras = document.getElementById('btnAtras');
    let $btnSiguiente = document.getElementById('btnSiguiente');
    if (fromPaso == 'formPaso0') {
        $btnAtras.classList.add("disabled");
    } else {
        $btnAtras.classList.remove("disabled")
    }
    if (fromPaso == 'formPaso4') {
        // $btnSiguiente.classList.add("disabled");
        $btnSiguiente.innerHTML = 'Registrar';
        $btnSiguiente.removeAttribute('onclick');
        $btnSiguiente.setAttribute('onclick', 'registrarPaciente()');
    } else {
        $btnSiguiente.innerHTML = 'Siguiente';
        $btnSiguiente.classList.remove("disabled");
    }
}

function actualizaTabsSubMenu(idActiveForm) {
    let $tabs = document.querySelectorAll('.form-paso');
    $tabs.forEach($tabNav => {
        $tabNav.classList.remove('active');
        //Actualizamos el parámetro de la función de las navs para saber cual es el actual
        let classIdForm = $tabNav.id;
        classIdForm = classIdForm.substr(4, 12);
        let onclickValue = $tabNav.getAttribute('onclick');
        // console.log(onclickValue);
        $tabNav.removeAttribute('onclick');
        $tabNav.setAttribute('onclick', 'irAPaso( "' + idActiveForm + '", "' + classIdForm + '")');
    });
    // console.log('Activamos al tab submenu : ' + idActiveForm);
    $idActiveForm = document.querySelectorAll('.' + idActiveForm);
    $idActiveForm.forEach($tabNav => {
        $tabNav.classList.add('active')
    });
}

function activaTabSubMenu(idActiveForm) {
    // console.log('Activaremos el tab: ' + idActiveForm);
    let $tabs = document.querySelectorAll('.' + idActiveForm);
    $tabs.forEach(
        $tab => {
            $tab.classList.remove('disabled');
        }
    );
}

function registrarPaciente(){
    if (validaDatosSubform('formPaso4', 'formPaso4')){
        // var datosFromPaciente = [];
        // const urlGetMunicipios = "http://localhost/scp/consulta/registrarNuevo/";
        // let $formulario = document.querySelector('#form-paciente');
        // let inputs = $formulario.querySelector('input');
        // inputs.forEach(
        //     input => {
        //         let inputId = input.id;
        //         let inputVal = input.value;
        //     } 
        // );
        let $formulario = document.querySelector('#form-paciente');
        $formulario.submit();
    }else {
        // alert("Falta información en este formulario");
        Swal.fire({
            icon: 'warning',
            title: 'Advertencia',
            text: 'Falta información importante en este formulario',
        });
    }
}



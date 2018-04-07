/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */,
/* 2 */,
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(4);


/***/ }),
/* 4 */
/***/ (function(module, exports) {

/***************
****************
****************
* REGISTRO DE RESERVA CONSULTA
* @type: Javascript, Jquery
* @author: Pablo Diego Montes Jordan
* @date: 2018-01-12
****************
****************
****************/
// ESPERAR A QUE EL DOCUMENTO SE CARGUE COMPLEMTAMENTE
$(document).ready(function () {
  // Ocultar la alerta de error en el form
  $('#alert-form').hide();
  // Arrays vacios, con la info subida de la BD
  var genders = [];
  var states = [];
  var services = [];
  // Peticion AJAX para obtener los valores dinamicos del formulario
  $.ajax({
    method: 'GET',
    url: localStorage.API_URL + 'form-data'
  }).done(function (data) {
    if (data.success) {
      genders = data.genders.genders;
      states = data.states.states;
      services = data.services.services;
      var servInput = $('#services');
      for (var i = 0; i < services.length; i++) {
        servInput.append($('<option></option>').attr('value', services[i].id).text(services[i].name));
      }
      servInput.trigger('contentChanged');
    } else {
      Materialize.toast('Hubo un error al cargar los datos del formulario', 5000);
    }
  });
  // Evento de click en el boton para subir el formulario
  $('#form').on('click', function () {
    // Objeto conteniendo los valores
    // del formulario
    var formFields = {
      names: $('#names').val().trim(),
      apat: $('#apat').val().trim(),
      amat: $('#amat').val().trim(),
      dir: $('#dir').val().trim(),
      email: $('#mail').val().trim(),
      phone: $('#phone').val().trim(),
      cellphone: $('#cellphone').val().trim(),
      birthdate: $('#birthdate').val(),
      dni: $('#dni').val().trim(),
      gender_id: $('#gender').val(),
      state_id: $('#state').val(),
      services_ids: $('#services').val(),
      _token: $('#_token').val()
    };
    // Validar formulario
    if (!validateTextFields(formFields)) return;
    if (!validateEmail(formFields)) return;
    if (!validateNumFields(formFields)) return;
    if (!validateBirthDate(formFields)) return;
    if (!validateSelectFields(formFields)) return;
    // Ocultar alerta
    $('#alert-form').hide('fast');
    console.log(formFields);
    // Realizar peticion POST a la API
    $.ajax({
      method: 'POST',
      url: localStorage.API_URL + 'register',
      data: formFields
    }).done(function (data) {
      if (data.success) {
        Materialize.toast(data.msg, 4000);
        setTimeout(function () {
          window.location.href = localStorage.WEB_URL;
        }, 4000);
      } else {
        Materialize.toast(data.msg, 5000);
      }
    });
  });
  $('select').on('contentChanged', function () {
    // re-initialize (update)
    $(this).material_select();
  });
  function validateTextFields(formFields) {
    console.log(formFields);
    if (formFields.names === '' || formFields.apat === '' || formFields.amat === '') {
      $('#alert-form').show('slow');
      $('#alert-form').html($('<span></span>').addClass('center white-text').text('Debe llenar todos los campos con *'));
      return false;
    }
    return true;
  }
  function validateEmail(formFields) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(formFields.email)) {
      $('#alert-form').show('slow');
      $('#alert-form').html($('<span></span>').addClass('center white-text').text('Debe introducir un correo electrónico correcto'));
      return false;
    }
    return true;
  }
  function validateNumFields(formFields) {
    if (!$.isNumeric(formFields.phone) || !$.isNumeric(formFields.cellphone) || !$.isNumeric(formFields.dni)) {
      $('#alert-form').show('slow');
      $('#alert-form').html($('<span></span>').addClass('center white-text').text('Debe introducir números en el celular, teléfono y carnet de identidad'));
      return false;
    }
    return true;
  }
  function validateSelectFields(formFields) {
    if (formFields.services_ids.length === 0) {
      $('#alert-form').show('slow');
      $('#alert-form').html($('<span></span>').addClass('center white-text').text('Debe seleccionar al menos un servicio que requiera'));
      return false;
    }
    return true;
  }
  function validateBirthDate(formFields) {
    if (formFields.birthdate === '') {
      $('#alert-form').show('slow');
      $('#alert-form').html($('<span></span>').addClass('center white-text').text('Debe seleccionar su fecha de nacimiento'));
      return false;
    }
    return true;
  }
});

/***/ })
/******/ ]);
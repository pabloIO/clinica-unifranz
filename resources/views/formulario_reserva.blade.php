@include('header')

<div class="container">
  <div class="row">
    <div class="col s10 offset-s1">
      <h2 class="center">Realiza una reserva para una consulta médica</h2>
      <h5 class="center">
        Una vez enviada su consulta, se le contactará personalmente
        para que pueda ser atendido.</br > Todos los campos con <span style="color:red">*</span> son
        obligatorios
      </h5>
    </div>
    <div class="col s10 offset-s1">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Escriba sus nombres" id="names" type="text" class="validate">
          <label for="nombres">Nombres <span style="color:red">*</span></label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Escriba su apellido paterno" id="apat" type="text" class="validate">
          <label for="apat">Apellido paterno <span style="color:red">*</span></label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Escriba su apellido materno" id="amat" type="text" class="validate">
          <label for="amat">Apellido materno <span style="color:red">*</span></label>
        </div>
        <div class="input-field col s12">
          <textarea placeholder="Escriba su dirección" id="dir" type="text" class="materialize-textarea"></textarea>
          <label for="amat">Dirección</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Escriba su correo electrónico" id="mail" type="email" class="validate">
          <label for="mail">Correo electrónico <span style="color:red">*</span></label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Escriba su correo electrónico" id="phone" type="text" class="validate">
          <label for="phone">Teléfono fijo</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Escriba su correo electrónico" id="cellphone" type="text" class="validate">
          <label for="cellphone">Celular <span style="color:red">*</span></label>
        </div>
        <div class="input-field col s12">
          <input id="birthdate" type="text" class="datepicker" id="birthdate">
          <label for="birthdate">Fecha de nacimiento <span style="color:red">*</span></label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Escriba su carnet de identidad" id="dni" type="text" class="validate">
          <label for="dni">Carnet de identidad <span style="color:red">*</span></label>
        </div>
        <div class="input-field col s12">
          <select id="gender" >
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
          </select>
          <label for="state">Género <span style="color:red">*</span></label>
        </div>
        <div class="input-field col s12">
          <select id="state" >
            <option value="1">Soltero/a</option>
            <option value="2">Casado/a</option>
            <option value="3">Viudo/a</option>
            <option value="4">Divorciado/a</option>
          </select>
          <label for="state">Estado civil <span style="color:red">*</span></label>
        </div>
        <div class="input-field col s12">
          <select id="services" multiple>
            <option value="none" disabled>Seleccione el servicio que necesite</option>
          </select>
          <label for="state">Servicio/os requerido/os <span style="color:red">*</span></label>
        </div>
        <input type="hidden" id="_token" value="{{ csrf_token() }}">
        <div class="col s12" >
          <div class="card-panel red darken-2" id="alert-form">
          </div>
        </div>
        <div class="col s12">
          <button type="submit" id="form" class="btn waves-effect waves-light">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="row footer-row">
    <div class="col s12 m10 offset-m1 footer-box-blue center" style="margin-bottom:20px;">
      <p>HORARIO DE ATENCIÓN: Lunes a Viernes: 10:00 - 13:00 y 14:00 - 20:00 Sábado, Domingo y Feriados: 09:00 - 20:00</p>
    </div>
    <div class="col s12 m3">
      <div class="row">
        <div class="col m1 offset-m1 " >
          <i class="fa fa-map-marker footer-box-background-blue-icon center"></i>
        </div>
        <div class="col m9 offset-m1 footer-box-background-blue center">
          <p>Calle Héroes del Acre N 1855, </br> Edif. Unifranz (Zona San Pedro)</p>
        </div>
      </div>
    </div>
    <div class="col s12 m3">
      <div class="row">
        <div class="col m1 offset-m2" >
          <i class="fa fa-phone footer-box-background-blue-icon center"></i>
        </div>
        <div class="col m4 offset-m2 footer-box-background-blue center">
          <p>2494600 </br> 2480102</p>
        </div>
      </div>
    </div>
    <div class="col s12 m3">
      <div class="row">
        <div class="col m1 offset-m1 " >
          <i class="fa fa-envelope footer-box-background-blue-icon center"></i>
        </div>
        <div class="col m9 offset-m1 footer-box-background-blue center">
          <p>infoclinica@unifranz.edu.bo </br> www.clinicaunifranz.org</p>
        </div>
      </div>
    </div>
    <div class="col s12 m3">
      <div class="row">
        <div class="col m1 offset-m1 " >
          <i class="fa fa-facebook footer-box-background-blue-icon center"></i>
        </div>
        <div class="col m9 offset-m1 footer-box-background-blue center">
          <p>www.facebook.com/clinicaunifranz</p>
        </div>
      </div>
    </div>
  </div>
</footer>
@include('footer')

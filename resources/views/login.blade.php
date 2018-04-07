@include('header')
<div class="container">
  <div class="row">
    <div class="col s10 offset-s1">
      <h2 class="center">Administración - Clínica Unifranz</h2>
    </div>
    <div class="col s10 offset-s1">
      <div class="row">
        <div class="input-field col s12">
          <input id="username" type="text" class="validate">
          <label for="username">Nombre de usuario</label>
        </div>
        <div class="input-field col s12">
          <input id="pass" type="password" class="validate">
          <label for="pass">Contraseña</label>
        </div>
        <input type="hidden" id="_token" value="{{ csrf_token() }}">
        <div class="col s12">
          <div class="card-panel red darken-2" id="alert-form">
          </div>
        </div>
        <div class="col s12">
          <button type="submit" id="loginForm" class="btn waves-effect waves-light">Iniciar sesión</button>
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

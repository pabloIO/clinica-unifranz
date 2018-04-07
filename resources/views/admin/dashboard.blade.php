@include('admin.header')
  <div class="container-fluid">
    <div class="row">
      <div class="col s12 m10 offset-m1">
        <h2 class="center">Reservas</h2>
        <table class="responsive-table highlight centered" >
          <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Correo electrónico</th>
                <th>Teléfono</th>
                <th>Celular</th>
                <th>Fecha de nacimiento</th>
                <th>C.I.</th>
                <th>Fecha de reserva</th>
                <th>Estado civil</th>
                <th>Género</th>
                <th>Servicios deseados</th>
            </tr>
          </thead>
          <tbody id="reservesTable"></tbody>
        </table>
      </div>
    </div>
  </div>
  <p style="padding:70px;"></p>
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
@include('admin.footer')

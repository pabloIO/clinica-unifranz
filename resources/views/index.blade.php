	@include('header')
	<div class="row">
		<div class="slider">
		    <ul class="slides">
		      <li>
		      	<img src="images/slider1.png" class="image-home" style="width:100%;height:100%;">
		        <div class="caption center-align">
		          <h3 >MEJORAR LA CALIDAD DE VIDA RESOLVIENDO LAS NECESIDADES DEL CIUDADO DE SALUD</h3>
		          <p class="light grey-text text-lighten-3" style="font-size:20px;">Contribuir al desarrollo del conocimiento médico en beneficio de nuestra sociedad</p>
		        </div>
		      </li>
		    </ul>
		  </div>
	</div>
	<div class="row row-content" style="">
			<div class="col s12 m6 personal-box center">
				<div style="margin-top:100px;">
					<i class="fa fa-arrow-circle-right white-color fa-4x"></i>
					<h4 class="white-color" ><a class="links" href="http://localhost:8000/quien-somos"> NUESTRO PERSONAL</a></h4>
				</div>
			</div>
			<div class="col s12 m6 services-box center">
				<div style="margin-top:100px;">
						<i class="fa fa-arrow-circle-right white-color fa-4x"></i>
						<h4 class="white-color"><a class="links" href="http://localhost:8000/servicios">NUESTROS SERVICIOS</a></h4>
					</div>
			</div>
	</div>
	<div class="row row-background-img">
			<a href="http://localhost:8000/campanas">
			<img src="images/home2.jpg"  style="width:100%;height:80%;"alt="">
			</a>
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

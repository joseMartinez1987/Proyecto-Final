
<footer>
	<div class="row feet">
		<div class="col-md-4 contact">
			<h2 class="etiquetas">Escribenos</h2>
			<div class="contacto">
		    	<div class="form-group">
		    		<form action="" class="form">
				  	<label class="etiquetas" for="nombre">Nombre</label>
				     <input type="text" class="form-control" id="nombre" placeholder="Nombre"> <br><br>
				    <label class="etiquetas" for="email">Correo electronico(requerido)</label>
				    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"><br><br>
				    <label class="etiquetas" for="asunto">Asunto</label>
				    <input type="text" class="form-control" id="asunto"> <br><br>
				    <label class="etiquetas" for="exampleFormControlTextarea1">Mensaje</label>
			    	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
			    	<button type="submit" id="formulario" class="btn btn-primary">Enviar</button>
			    	</form>
				</div>
		  	</div>
		</div>

		<div class="col-md-4 direccion">
		  	<div class="horario">
		  		<h2 class="hrs">Horarios</h2> <br>
		  		<table>
		  		<tr>
		  			<th>Lu-Ma-Mi</th>
		  			<th>12:30 - 00:30</th>
		  		</tr>
		  			<th>Ju-Vi-Sa</th>

		  			<th>12:00 - 2:00</th>
		  		</tr>
		  	</table>
		  	<br>
		  	
		  	<table>
		  		<tr>
		  			<th>Direccion: Granaderos 1328, Providencia (barrio Manuel Montt)</th> 
		  		</tr>
		  		<tr>
		  			<th>Teléfono:+56 2 2264 0753</th>
		  		</tr>
		  		<tr>
		  			<th>Email: reservas@pizzeriadomani.cl </th>
		  		</tr>
		  	</table>
		  	</div>
		</div>
		<div class="colmd-4 ">
			<div class="embed-responsive embed-responsive-1by1 map">
				<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.70078606322!2d-70.62057578515363!3d-33.431044403901915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf7cde88e97b%3A0x5edaf2c7a53abbc!2sGranaderos+1328%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1513203308781" width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<img class="advisor" src="assets/images/login/certificado-de-excelencia_ESP.png" alt="">
			<img class="verace" src="assets/images/login/VERACE.png" alt="">
		</div>
	</div>
</footer>

<?php wp_footer() ?>


<?php if(is_page('galeria')){ ?>
<script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>
<?php } ?>
</body>
</html>
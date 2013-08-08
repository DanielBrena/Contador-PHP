<html>
<head>
	<title>Contador</title>
	<script type="text/javascript" src='js/jquery.js'></script>
	<script type="text/javascript" src='js/contador.js'></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id='contenedor'>
		<div id='cabeza'>
			
		</div>


		<div id='cuerpo'>
			<div id='botones'>
				<input class='caja_text' id='hora' type='text'>
				<input class='caja_text' id='minuto' type='text'>
				<input class='caja_text' id='segundo' type='text'>

				<input type='button' id='enviar' value='Actualizar'>
			</div>

			<div id='contador'>

				<div class='box'  > 
					<div class ='most_' id='h_'>
							<?php
							include 'hora.php';
							?>
					</div>
					<div class ='most_' id='m_'>
						<?php
							include 'minuto.php';
						?>
					</div>
					<div class ='most_' id='s_'>
						<?php
							include 'segundo.php';
						?>
					</div>
				</div>
				
				
			</div>
		</div>


		<div id='pie'>
			<input class='botones_a' type='button' id='ascendente' value='Ascendente'>
			<input class='botones_a' type='button' id='descendente' value='Descendente'>
			<input class='botones_a' type='button' id='parar' value='Parar'>
		</div>
	</div>

</body>
</html>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Imprimir por pantalla - Master en PHP</title>
	</head>
	<body>
		<h1> - PHP - <?php echo "franco.miweb"; ?></h1>
		
		<?="Bienvenido al curso mas grande de PHP"?>
		
		<?php
		    // Titular de la sección
			echo "<h3>Listado de videojuegos:</h3>";
			
			/*
				Esta es una lista
				de videojuegos
				moderno
			*/
			echo "<ul>"
				 ."<li>GTA</li>"
				 ."<li>Fifa</li>"
				 ."<li>Mario Bros</li>"
				 ."</ul>";
			
			// echo "<br>HOLA HOLA HOLA<br>";
			
			// Parrafo explicativo
			echo '<p>Esta es toda'.' - '.'lista de juegos </p>';
		?>
	</body>
</html>
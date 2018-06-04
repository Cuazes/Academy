<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Academ</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/a.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/t.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>


<?php

include("include/menu.php");

?>


<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:10px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/2.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Nuestra institución</h4>
				  <p>
                 En nuestra Institucion las materia que imparten son muy eficientes para el futuro de nuestros alumnos, en esta academia, lo importante es continuar los estudios, contamos con muy buenas especialidades.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/3.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Contamos con</h4>
				  <p>
				  Un buen plantel en el que podras estar y trabajar sin nigun problema, ambos turnos, becas, concursos, proyectos y de mas, tambien contamos con maestros de mucha antiguadad que imparten muy buenas materias y como no puede faltar, un amplio estacionamiento.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/4.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Consejo </h4>
				  <p>
				  No olvide que la clave del éxito en la vida es estudiar, principalmente se radica en eso, ya despues viene lo demas, un buen trabajo y una familia estable, un buen futuro te esta esperando!. 
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>Todos nuestros cursos</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Algebra Lineal</h4>
					<a target="_blank" href="https://es.wikipedia.org/wiki/%C3%81lgebra_lineal">Click aquí</a> 

				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>Topografía Aplicada</h4>
					<a target="_blank" href="https://es.wikipedia.org/wiki/Topograf%C3%ADa">Click aquí</a> 
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Contabilidad</h4>
					<a target="_blank" href="https://es.wikipedia.org/wiki/Contabilidad">Click aquí</a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Programación</h4>
					<a target="_blank" href="https://es.wikipedia.org/wiki/Programaci%C3%B3n">Click aquí</a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Mercadotecnia</h4>
					<a target="_blank" href="https://es.wikipedia.org/wiki/Mercadotecnia">Click aquí</a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Pintura</h4>
					<a target="_blank" href="https://es.wikipedia.org/wiki/Pintura">Click aquí</a>
				</div>
			</div>

	
			<div class="span12">
				<div class="well well-small">
					<h4 >La importancia de elegir una carrera</h4>
					<a target="_blank" href="https://psicologiaymente.net/miscelanea/importancia-elegir-carrera-universitaria">Click aquí</a>
					
					<h4>La concecuencia de no elegir una buena carrera</h4>
					<a target="_blank" href="http://www.finanzaspersonales.co/trabajo-y-educacion/articulo/las-consecuencias-elegir-mal-carrera-profesional/57272">Click aquí</a>


				</div>
			</div>
		
			
			
</div>
<h3>Nuestros cursos mas sobresalientes</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Algebra Lineal</h3>	
	<img src="images/j.jpg" alt="#"/>
	<div class="caption">
	<h5>Descripción del Curso</h5>	
	<p align="justify">
	
El álgebra lineal es una teoría matemática degeneralizaciones y métodos de análisis, en la que los conceptos son tanimportantes como los cálculos. El álgebra lineal pretende descubrir y matematizar las relaciones existentes entrelas distintas variables que caracterizan un fenómeno o un proceso. El álgebra lineal se aplica en distintos campos dela ciencia y tecnología como los modelos de pronóstico del clima, la investigación de operaciones, la utilización de reómetros, manejo de robots,las ciencias administrativas, etc.
	</p>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Topografía Aplicada</h3>	
	<img src="images/g.jpg" />
	<div class="caption">
	<h5> Descripción del Curso</h5>	
	<p align="justify">
	
La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo. Su estudio es de gran importancia para el diseño de Obras de Ingeniería Civil.
	</p>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Programación</h3>	
	<img src="images/computacion.jpg"/>
	<div class="caption">
	<h5>Descripción del Curso</h5>	
	<p align="justify">
	
La programación informática o programación algorítmica, acortada como programación, es el proceso de diseñar, codificar, depurar y mantener el código fuente de programas de computadora. El código fuente es escrito en un lenguaje de programación.
	</p>
	<br/>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>Importante</h3>	
		<p>
		Lo mejor para nosotros es proporcionar un acceso libre, sencillo y coherente a los materiales de los cursos que se ofrecen en sus modalidades de estudio presencial y a distancia para educadores, estudiantes y autodidactas de todo el mundo.<br><br></b></b>
		Cabe recalcar que los links anclados en el "Click aquí" es directamente de la página de Wikipedia.
		</p>
	</div>
	</div>
	<div class="span6">
	<div class="well well-small">
		<h3> Lo que vendrá</h3>
		<h5>Nuevos cursos</h5>	
		<p>
		Tendremos una página actualizada y nuestros miembros podrán contar con todos nuestros cursos disponibles, asi como la visualización de nuevos cursos que se añadan a la página.
		
		</p>
		
	</div>
	</div>
	
	
</div>
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Old cuazes <br/><br/></p>
 </footer>
</div>
	</style>
  </body>
</html>
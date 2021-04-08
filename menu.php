<div id="anuncioscuadro">
	<div id="titulo">
		Menu principal
	</div>
    <div id="anuncios_contenido1">
		<?php
		    //session_start();
			$rol=0;			
			switch($_SESSION['idrol'])
			{
				case 0:{}break;
				case 1:{
		?>
						<ul class="estilomenu">
							
							<li><a href="usuariolistado.php" title="Enlace a la pagina principal"  onmouseout="fuera(this);" onmouseover="encima(this);">Gestion Alumno/Docente</a></li>							
							<li><a href="docentenotaspordepartamento.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Ver Notas Forma 1</a></li> 
							<li><a href="docentenotaspordepartamento2.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Ver Notas Forma 2</a></li> 
							<li><a href="usuariolistadoblanco.php" title="Vea los principios que seguimos"   onmouseout="fuera(this);" onmouseover="encima(this);">Inscripcion Materia</a></li>		  	      		                     							
							<li><a href="index.php" title="Salir de aplicacion"   onmouseout="fuera(this);" onmouseover="encima(this);">Salir</a></li>		  	      		  	    
						</ul>
		<?php
				}break;
				case 2:{
		?>
						<ul class="estilomenu">
							
							<li><a href="editarusuario.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Editar Datos</a></li>  								
							<li><a href="docentenotaspordepartamento.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Ver Notas Forma 1</a></li> 
							<li><a href="docentenotaspordepartamento2.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Ver Notas Forma 2</a></li> 
							<li><a href="index.php" title="Salir de aplicacion"   onmouseout="fuera(this);" onmouseover="encima(this);">Salir</a></li>		  	      		  	     							
						</ul>		
		<?php	
				}break;
				case 3:{
		?>
						<ul class="estilomenu">
							
							<li><a href="editarusuario.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Editar Datos</a></li>  								
							<li><a href="usuariovernota.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Ver Notas</a></li> 
							<li><a href="index.php" title="Salir de aplicacion"   onmouseout="fuera(this);" onmouseover="encima(this);">Salir</a></li>		  	      		  	     							
						</ul>	
		<?php	
				}break;
			}
		?>

	</div>      
</div>

<div id="anuncioscuadro">
	<div id="titulo">
		Visitenos:
	</div>
	<div id="anuncios_contenido">
		<ul class="estilomenu">
			<li><a href="http://www.fcpn.edu.bo" title="Facultad de ciencias puras y naturales"   onmouseout="fuera(this);" onmouseover="encima(this);">Nuestra Facultad</a></li>  
			<li><a href="http://cmat.umsa.bo" title="Carrera de matematica"   onmouseout="fuera(this);" onmouseover="encima(this);">Carrera de Matematica</a></li>    
			<li><a href="http://www.fiumsa.edu.bo" title="Carrra de fisica"  onmouseout="fuera(this);" onmouseover="encima(this);">Carrera de Fisica</a></li>				  	
		  	<li><a href="http://www.informatica.edu.bo" title="Carrera de Informatica"   onmouseout="fuera(this);" onmouseover="encima(this);">Carrera de Informatica</a></li>		  	      		  	                   
		</ul>
	</div>
</div>



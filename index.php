<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Programacion Multimedial</title>
<link href="Estilos.css" rel="stylesheet" title="adiep" type="text/css" />
<script language="javascript" type="text/javascript" src="eventos.js">
</script>
</head>
<body bgcolor="e0cfae">
    <?php session_start();
	  $_SESSION['idusuario']=0;
	  $_SESSION['nombre']='';
	  $_SESSION['idrol']='0';
	  $_SESSION['rol']='0';
	  $_SESSION['color']='';
	?>
	<div id="contenedor">
	    <div id="cabezera">
        	<?php include('encabezado.php')?>
    	</div>   
   		<div style="width:800px;">
			<!-- Cuerpo -->
	   		<div id="informacion">
		        <?php include('login.php')?>
    		</div>                             
    	</div>     
   		<div id="piedepagina">
	        <?php include('pie.php')?>
    	</div>       
    </div>   
</body>
</html>

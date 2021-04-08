<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Programacion Multimedial</title>
<link href="Estilos.css" rel="stylesheet" title="UMSA" type="text/css" />
<script language="javascript" type="text/javascript" src="eventos.js">
</script>
</head>
<body bgcolor="e0cfae">
	<?php session_start();?>
	<?php		    
			$colori=$_SESSION['color'];			
			switch($colori)
			{
				case 'negro':{
	?>
								<style type="text/css">

									#anuncioscuadro #anuncios_contenido1
									{		
										background-color:rgb(0,0,0);
										background-repeat:repeat-y;
										height:210px;									
									}
									#cuadropie{
										border-style:solid;
										border-color:#FFFFFF;
										border-width:1px;
										background-color:rgb(0,0,0);
									}
									#anuncioscuadro2 #titulo2
									{
										border-style:solid;
										border-color:#ffffff;
										border-width:1px;
										background-color:rgb(0,0,0);		
										height:25px;
										font-size:12px;
										font-family:Verdana, Arial, Helvetica, sans-serif;
										font-weight:700;	
										text-align:center;
										color:#FFFFFF;
										padding-top:5px;
																
									}

									ul.estilomenu li {
										background-color:rgb(0,0,0);
										border-style: solid;
										height:30px;
									}
									#anuncioscuadro #titulo
									{
										border-style:solid;
										border-color:#ffffff;
										border-width:1px;
										background-color:rgb(0,0,0);
										height:25px;
										font-size:12px;
										font-family:Verdana, Arial, Helvetica, sans-serif;
										font-weight:700;	
										text-align:center;
										color:#ffffff;
										padding-top:5px;									
									}
									#anuncioscuadro #anuncios_contenido
									{		
										background-color:rgb(0,0,0);			
										font-size:15px;
										color:#000000;									
										padding-left:0px;
										padding-right:0px;
										margin-top:0px;
										height: 800px;
									}
									#cabezera{
											width:800px;
											height:50px;
											background-color:rgb(0,0,0);
											margin:0 auto;				
										}
								</style>
	<?php
				}break;
					case 'cafe':{
	?>

								<style type="text/css">

									#anuncioscuadro #anuncios_contenido1
									{		
										background-color:brown;
										background-repeat:repeat-y;
										height:210px;									
									}	
									#cuadropie{
										border-style:solid;
										border-color:#FFFFFF;
										border-width:1px;
										background-color:brown;
									}
									#anuncioscuadro2 #titulo2
									{
										border-style:solid;
										border-color:#ffffff;
										border-width:1px;
										background-color:brown;	
										height:25px;
										font-size:12px;
										font-family:Verdana, Arial, Helvetica, sans-serif;
										font-weight:700;	
										text-align:center;
										color:#FFFFFF;
										padding-top:5px;
																
									}

									ul.estilomenu li {
										background-color:brown;
										border-style: solid;
										height:30px;
									}
									#anuncioscuadro #titulo
									{
										border-style:solid;
										border-color:#ffffff;
										border-width:1px;
										background-color:brown;
										height:25px;
										font-size:12px;
										font-family:Verdana, Arial, Helvetica, sans-serif;
										font-weight:700;	
										text-align:center;
										color:#ffffff;
										padding-top:5px;									
									}
									#anuncioscuadro #anuncios_contenido
									{		
										background-color:brown;			
										font-size:15px;
										color:#000000;									
										padding-left:0px;
										padding-right:0px;
										margin-top:0px;
										height: 800px;
									}
									#cabezera{
											width:800px;
											height:50px;
											background-color:brown;
											margin:0 auto;				
										}
								</style>

	<?php	
				}break;
				case 'verde':{
	?>

								<style type="text/css">

								#anuncioscuadro #anuncios_contenido1
									{		
										background-color:rgb(20,108,11);
										background-repeat:repeat-y;
										height:210px;									
									}
									#cuadropie{
										border-style:solid;
										border-color:#FFFFFF;
										border-width:1px;
										background-color:rgb(20,108,11);
									}
									#anuncioscuadro2 #titulo2
									{
										border-style:solid;
										border-color:#ffffff;
										border-width:1px;
										background-color:rgb(20,108,11);
										height:25px;
										font-size:12px;
										font-family:Verdana, Arial, Helvetica, sans-serif;
										font-weight:700;	
										text-align:center;
										color:#FFFFFF;
										padding-top:5px;
																
									}

									ul.estilomenu li {
										background-color:rgb(20,108,11);
										border-style: solid;
										height:30px;
									}
									#anuncioscuadro #titulo
									{
										border-style:solid;
										border-color:#ffffff;
										border-width:1px;
										background-color:rgb(20,108,11);
										height:25px;
										font-size:12px;
										font-family:Verdana, Arial, Helvetica, sans-serif;
										font-weight:700;	
										text-align:center;
										color:#ffffff;
										padding-top:5px;									
									}
									#anuncioscuadro #anuncios_contenido
									{		
										background-color:rgb(20,108,11);
										font-size:15px;
										color:#000000;									
										padding-left:0px;
										padding-right:0px;
										margin-top:0px;
										height: 800px;
									}
									#cabezera{
											width:800px;
											height:50px;
											background-color:rgb(20,108,11);
											margin:0 auto;				
										}
								</style>


	<?php	
				}break;
			}
	?>
	<div id="contenedor">
	    <div id="cabezera">
        	<?php include('encabezado.php')?>
    	</div>   
   		<div id="contenido">
			<!-- Menu -->
	   		<div id="menu">
        		<?php include('menu.php')?>
    		</div>   
			<!-- Cuerpo -->
	   		<div id="informacion">
			    <?php $_SESSION['idusuarioeditar']=$_GET['idusuarioeditar'];?>
		        <?php include('usuarioformularioeditar.php')?>
    		</div>                             
    	</div>     
   		<div id="piedepagina">
	        <?php include('pie.php')?>
    	</div>       
    </div>   
</body>
</html>

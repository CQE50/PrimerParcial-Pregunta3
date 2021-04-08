<div id="informacioncuadro2">
	<div id="anuncioscuadro2">
		<div id="titulo2">
			Editar Usuario
		</div>   
		<div id="anuncios_contenido2">   
			<div style="margin:170px;margin-left:50px;">
					<form action="phpmodificacolor.php" method="GET">				
						<table style="width:520px" border="5">
							<caption style="font-weight: bold;font-size:25px;">Datos de Usuario</caption>
							<tr>
								<td style="width:100px">CI:</td>
								<td style="width:400px"><?php echo $_SESSION['ci'];?></td>
							</tr>
							<tr>
								<td>Nombre:</td>
								<td><?php echo $_SESSION['nombre'];?></td>
							</tr>
							<tr>
								<td style="width:100px">Color Actual:</td>
								<td style="width:400px"><?php echo $_SESSION['color'];?></td>
							</tr>
							<tr>
								<td style="width:100px">Nuevo Color:</td>
								<td style="width:400px">
									<select name="color">
									<option>Defecto</option>
									<option>negro</option>
									<option>cafe</option>
									<option>verde</option>									
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<input type="submit" value="Modificar">
								</td>
							</tr>
						</table>
					</form> 	
				</div>			     
		</div>
 	</div>
</div>
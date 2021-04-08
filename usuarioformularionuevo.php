<?php
	include('configuracion.php');
    $objetoconeccion=new Configuracion();
    $coneccion=new mysqli($objetoconeccion->gethost(),$objetoconeccion-> getusuario(),$objetoconeccion-> getpassword(),$objetoconeccion->getbase()) or die("Error de coneccion....");
    $sql='Select t0.idusuario,t1.nombrecompleto,t1.fechanacimiento,t3.descripcion,t2.descripcion from usuario t0,persona t1,sys_rol t2,sys_departamento t3 where t0.ci=t1.ci and t0.idrol=t2.idrol and t1.departamento=t3.departamento and t0.idrol='.'2';
    $resultado=mysqli_query($coneccion,$sql);
    $coneccion->close();	
?>

<div id="informacioncuadro2">
	<div id="anuncioscuadro2">
		<div id="titulo2">
			Docente Nuevo
		</div>   
		<div id="anuncios_contenido2">   
			<div style="margin:100px;margin-left:50px;">
					<form action="phpadicionusuario.php" method="GET">				
						<table style="width:520px" border="5">
							<caption style="font-weight: bold;font-size:25px;">Nuevo docente</caption>
							<tr>
								<td style="width:100px">CI:</td>
								<td style="width:400px"><input type="text" name="ci"></td>
							</tr>
							<tr>
								<td>Nombre:</td>
								<td><input type="text" name="nombre"></td>
							</tr>
							<tr>
								<td style="width:100px">Fecha Nacimiento:</td>
								<td style="width:400px"><input type="date" name="fn"></td>
							</tr>
							<tr>
								<td>Departamento:</td>
								<td><input type="text" name="departamento"></td>
							</tr>
							<tr>
								<td>Usuario:</td>
								<td><input type="text" name="usuario"></td>
							</tr>
							<tr>
								<td>Contraseña:</td>
								<td><input type="text" name="contrasena"></td>
							</tr>
							<tr>
								<td style="width:100px">Color:</td>
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
								<td>Rol:</td>
								<td><select name="rol">
									<option>administrador</option>
									<option>docente</option>
									<option>estudiante</option>									
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<input type="submit" value="Guardar">
								</td>
							</tr>
						</table>
					</form> 	
				</div>			 
		</div>
 	</div>
</div>
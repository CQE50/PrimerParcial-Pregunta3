<?php
	include('configuracion.php');
	$idusuarioatratar=$_SESSION['idusuarioeditar'];
    $objetoconeccion=new Configuracion();
    $coneccion=new mysqli($objetoconeccion->gethost(),$objetoconeccion-> getusuario(),$objetoconeccion-> getpassword(),$objetoconeccion->getbase()) or die("Error de coneccion....");
    $sql='  Select t1.ci,
			t1.nombrecompleto,
			t1.fechanacimiento,
			t1.departamento,
			t0.usuario,
			t0.contrasena,
			t0.color,
			t2.descripcion
			
			from usuario t0,persona t1,sys_rol t2 
			where t0.ci=t1.ci and 
				t0.idrol=t2.idrol and 
				t0.idusuario='.$idusuarioatratar;
    $resultado=mysqli_query($coneccion,$sql);
	$fila=mysqli_fetch_array($resultado,MYSQLI_NUM);
    $ci=$fila[0];        
	$nombrecompleto=$fila[1];
	$fechanacimiento=$fila[2];        
	$departamento=$fila[3];
	$usuario=$fila[4];
	$contrasena=$fila[5];
	$color=$fila[6];;
	$descripcion=$fila[7]; //descripcion rol
	
	$_SESSION['idusuarioeditar']=$idusuarioatratar;
	$_SESSION['ciusuarioeditar']=$ci;    	
?>

<div id="informacioncuadro2">
	<div id="anuncioscuadro2">
		<div id="titulo2">
			Editar Usuario
		</div>   
		<div id="anuncios_contenido2">   
			<div style="margin:100px;margin-left:50px;">
					<form action="phpmodificarusuario.php" method="GET">				
						<table style="width:520px" border="5">
							<caption style="font-weight: bold;font-size:25px;">Editar Usuario</caption>
							<tr>
								<td style="width:100px">CI:</td>
								<td style="width:400px"><?php echo $ci;?></td>
							</tr>
							<tr>
								<td>Nombre:</td>
								<td><input type="text" name="nombre" value="<?php echo $nombrecompleto;?>"></td>
							</tr>
							<tr>
								<td style="width:100px">Fecha Nacimiento:</td>
								<td style="width:400px"><input type="date" name="fn" value="<?php echo $fechanacimiento;?>"></td>
							</tr>
							<tr>
								<td>Departamento:</td>
								<td><input type="text" name="departamento" value="<?php echo $departamento;?>"></td>
							</tr>
							<tr>
								<td>Usuario:</td>
								<td><input type="text" name="usuario" value="<?php echo $usuario;?>"></td>
							</tr>
							<tr>
								<td>Contraseña:</td>
								<td><input type="text" name="contrasena" value="<?php echo $contrasena;?>"></td>
							</tr>
							<tr>
								<td>Color actual:</td>
								<td><?php echo $color;?></td>
							</tr>
							<tr>
								<td style="width:100px">Elija nuevo Color:</td>
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
								<td>Rol actual:</td>
								<td><?php echo $descripcion;?></td>
							</tr>
							<tr>
								<td>Rol nuevo:</td>
								<td><select name="rol">
									<option>administrador</option>
									<option>docente</option>
									<option>estudiante</option>									
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
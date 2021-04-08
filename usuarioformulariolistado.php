<?php
	include('configuracion.php');
    $objetoconeccion=new Configuracion();
    $coneccion=new mysqli($objetoconeccion->gethost(),$objetoconeccion-> getusuario(),$objetoconeccion-> getpassword(),$objetoconeccion->getbase()) or die("Error de coneccion....");
    $sql='Select t0.idusuario,t1.nombrecompleto,t1.fechanacimiento,t3.descripcion,t2.descripcion from usuario t0,persona t1,sys_rol t2,sys_departamento t3 where t0.ci=t1.ci and t0.idrol=t2.idrol and t1.departamento=t3.departamento order by t0.idusuario desc';
    $resultado=mysqli_query($coneccion,$sql);
    $coneccion->close();	
?>

<div id="informacioncuadro2">
	<div id="anuncioscuadro2">
		<div id="titulo2">
			Listado docente
		</div>   
		<div id="anuncios_contenido2">   
			<div style="margin:100px;margin-left:15px;">
					
						<table style="width:500px" border="3">
							
							<tr style="font-weight: bold;font-size:25px;">
								<td colspan="6">Listado de Docente</td>								
								<td colspan="3" align="center"><a href='usuarionuevo.php'>Nuevo</a></td>								
							</tr>
							<tr align="center">
								<td style="width:20px">Nro.</td>
								<td style="width:20px">Idusuario</td>
								<td style="width:100px">Nombre</td>
								<td style="width:100px">Fecha/N</td>
								<td style="width:100px">Departamento</td>
								<td style="width:100px">Rol</td>
								<td colspan="3" style="width:100px">Operaciones</td>								
							</tr>
							
								<?php
									$nro=0;
									while($fila=mysqli_fetch_array($resultado,MYSQLI_NUM))
									{
										$nro=$nro+1;
										print '<tr><td>'.$nro.'</td>
										<td>'.$fila[0].'</td>
										<td>'.$fila[1].'</td>
										<td>'.$fila[2].'</td>
										<td>'.$fila[3].'</td>
										<td>'.$fila[4].'</td>
										<td><a href="usuarioeditar.php?idusuarioeditar='.$fila[0].'">Editar</a></td>
										<td><a href="usuarioeliminar.php?idusuarioeditar='.$fila[0].'">Eliminar</a></td>
										<td><a href="usuariover.php?idusuarioeditar='.$fila[0].'">Ver</a></td></tr>';
									}									
								?>								
																					
						</table>
					
				</div>			     
		</div>
 	</div>
</div>
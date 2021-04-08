<?php
	include('configuracion.php');
	$idusuario=$_SESSION['idusuario'];
    $objetoconeccion=new Configuracion();
    $coneccion=new mysqli($objetoconeccion->gethost(),$objetoconeccion-> getusuario(),$objetoconeccion-> getpassword(),$objetoconeccion->getbase()) or die("Error de coneccion....");
    $sql='  select t1.sigla,
			(select ta.descripcion from sys_materia ta where ta.sigla=t1.sigla) as Descripcion,
			t2.nota1,
			t2.nota2,
			t2.nota3,
			t2.notafinal,
			(select tc.nombrecompleto from dicta tb, persona tc where tb.iddicta=t2.iddicta and tb.ci=tc.ci) as Docente
			from usuario t0,inscrito t1,nota t2
			where t0.ci=t1.ci
			and t1.idinscrito=t2.idinscrito
			and t0.idusuario='.$idusuario;
    $resultado=mysqli_query($coneccion,$sql);
	$coneccion->close();
?>

<div id="informacioncuadro2">
	<div id="anuncioscuadro2">
		<div id="titulo2">
			Notas de Materia Inscritas
		</div>   
		<div id="anuncios_contenido2">   
			<div style="margin:100px;margin-left:30px;font-size:small;">
							
					<table style="width:550px" border="3" align="center">
						<caption style="font-weight: bold;font-size:25px;">Notas por materia<br>
								 <?php echo 'Estudiante:'.$_SESSION['nombre'];?>
								 <br>
								 <?php echo 'CI:'.$_SESSION['ci'].' '.$_SESSION['departamento'];?>
						</caption>
						<tr align="center">
							<td style="width:20px">Nro.</td>
							<td style="width:30px">Sigla</td>
							<td style="width:100px">Materia</td>
							<td style="width:100px">Nota 1</td>
							<td style="width:100px">Nota 2</td>
							<td style="width:100px">Nota 3</td>
							<td style="width:100px">Nota Final</td>
							<td style="width:100px">Docente</td>
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
									<td>'.$fila[5].'</td>
									<td>'.$fila[6].'</td>';
								}									
							?>								
																				
					</table>		
			</div>			 
		</div>
 	</div>
</div>
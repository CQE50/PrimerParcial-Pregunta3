<?php
	include('configuracion.php');
	$idusuarioatratar=$_SESSION['idusuarioeditar'];
    $objetoconeccion=new Configuracion();
    $coneccion=new mysqli($objetoconeccion->gethost(),$objetoconeccion-> getusuario(),$objetoconeccion-> getpassword(),$objetoconeccion->getbase()) or die("Error de coneccion....");
    $sql="		  select ta.sigla,
				  avg(case when ta.departamento='LP' then ta.notafinal else 0 end) as 'LP',
				  avg(case when ta.departamento='OR' then ta.notafinal else 0 end) as 'OR',
				  avg(case when ta.departamento='PT' then ta.notafinal else 0 end) as 'PT',
				  avg(case when ta.departamento='SU' then ta.notafinal else 0 end) as 'SU',
				  avg(case when ta.departamento='TR' then ta.notafinal else 0 end) as 'TR',
				  avg(case when ta.departamento='CB' then ta.notafinal else 0 end) as 'CB',
				  avg(case when ta.departamento='SC' then ta.notafinal else 0 end) as 'SC',
				  avg(case when ta.departamento='PA' then ta.notafinal else 0 end) as 'PA',
				  avg(case when ta.departamento='BE' then ta.notafinal else 0 end) as 'BE'       
		   from (
		   select t0.sigla,
				  t3.departamento,
				  sum(t2.notafinal) as Notafinal
		   from sys_materia t0,inscrito t1,nota t2,persona t3
		   where t0.sigla=t1.sigla
				 and t1.idinscrito=t2.idinscrito
				 and t1.ci=t3.ci
		   group by t0.sigla,t3.departamento	
		   ) ta
		   group by ta.sigla ";

    $resultado=mysqli_query($coneccion,$sql);
 	$coneccion->close();
?>

<div id="informacioncuadro2">
	<div id="anuncioscuadro2">
		<div id="titulo2">
		Ver Notas por Departamento - Forma 2
		</div>   
		<div id="anuncios_contenido2">   
			<div style="margin:100px;margin-left:20px;">
			<table style="width:570px" border="3" align="center">
						<caption style="font-weight: bold;font-size:25px;">Promedio por Departamento y Materia - Forma 2<br>
						</caption>
						<tr align="center">
							<td style="width:20px">Nro.</td>
							<td style="width:120px">Sigla</td>
							<td style="width:80px">LP</td>
							<td style="width:80px">OR</td>
							<td style="width:80px">PT</td>
							<td style="width:80px">SU</td>
							<td style="width:80px">TR</td>
							<td style="width:80px">CB</td>
							<td style="width:80px">SC</td>
							<td style="width:80px">PA</td>
							<td style="width:80px">BE</td>
						</tr>
						
							<?php
								$nro=0;
								while($fila=mysqli_fetch_array($resultado,MYSQLI_NUM))
								{
									$nro=$nro+1;
									print '<tr><td>'.$nro.'</td>
									<td>'.$fila[0].'</td>
									<td>'.number_format($fila[1],2,'.',',').'</td>
									<td>'.number_format($fila[2],2,'.',',').'</td>
									<td>'.number_format($fila[3],2,'.',',').'</td>
									<td>'.number_format($fila[4],2,'.',',').'</td>
									<td>'.number_format($fila[5],2,'.',',').'</td>
									<td>'.number_format($fila[6],2,'.',',').'</td>
									<td>'.number_format($fila[7],2,'.',',').'</td>
									<td>'.number_format($fila[8],2,'.',',').'</td>
									<td>'.number_format($fila[9],2,'.',',').'</td>';
								}									
							?>								
																				
					</table>					
			</div>			 
		</div>
 	</div>
</div>
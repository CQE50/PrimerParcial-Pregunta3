<div id="informacioncuadro2">
	<div id="anuncioscuadro2">
		<div id="titulo2">
			Ver Notas por Departamento - Forma 1
		</div>   
		<div id="anuncios_contenido2">   
		<div style="margin:100px;margin-left:20px;">
			<table style="width:570px" border="3" align="center">
						<caption style="font-weight: bold;font-size:25px;">Promedio por Departamento y Materia - Forma 1<br>
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
						
								include('configuracion.php');
								$idusuarioatratar=$_SESSION['idusuarioeditar'];
								$objetoconeccion=new Configuracion();
								$coneccion=new mysqli($objetoconeccion->gethost(),$objetoconeccion-> getusuario(),$objetoconeccion-> getpassword(),$objetoconeccion->getbase()) or die("Error de coneccion....");
								$sql='  select 	t0.sigla,
											t3.departamento,
											avg(t2.notafinal) as Promedio
											from sys_materia t0,inscrito t1,nota t2,persona t3
											where t0.sigla=t1.sigla
											 and t1.idinscrito=t2.idinscrito
											 and t1.ci=t3.ci
									group by t0.sigla,t3.departamento';
								$resultadoprincipal=mysqli_query($coneccion,$sql);
								$sql0='select * from sys_materia';
								$resultadomateria=mysqli_query($coneccion,$sql0);
								$sql1='select * from sys_departamento';
								$resultadodepartamento=mysqli_query($coneccion,$sql1);
								  
								$nro=1;
								$cadena='';
								$sw=0;
								while($filamateria=mysqli_fetch_array($resultadomateria,MYSQLI_NUM))
								{
									$cadena='<tr><td>'.$nro.'</td><td>'.$filamateria[0].'</td>';
									$resultadodepartamento=mysqli_query($coneccion,$sql1);
									while($filadepartamento=mysqli_fetch_array($resultadodepartamento,MYSQLI_NUM))
									{
										$sw=0;
										//$combinacion=$filamateria[0].$filadepartamento[0];
										//echo '<br> a-'.$combinacion;
										$resultadoprincipal=mysqli_query($coneccion,$sql);
										while($filaprincipal=mysqli_fetch_array($resultadoprincipal,MYSQLI_NUM))
										{	
											//$combinacion2=$filaprincipal[0].$filaprincipal[1];
											//echo ' b-'.$combinacion2;
											if($filamateria[0]==$filaprincipal[0] and $filadepartamento[0]==$filaprincipal[1])
											{
												$sw=1;
												$valor=$filaprincipal[2];
											}
											

										}	
										if($sw==1)
										{
											$cadena=$cadena.'<td>'.number_format($valor,2,'.',',').'</td>';											
										}
										else
										{											
											$cadena=$cadena.'<td>'.number_format(0,2,'.',',').'</td>';
										}										
									}		
									$cadena=$cadena.'</tr>';				
									$nro=$nro+1;
									echo $cadena;	
								}	
								$coneccion->close();							
							?>								
																				
					</table>
			</div>			 
		</div>
 	</div>
</div>
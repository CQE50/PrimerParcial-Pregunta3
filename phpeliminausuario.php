<?php
    include('configuracion.php');
    session_start();
    $idusuario=$_SESSION['idusuarioeditar'];
	$ci=$_SESSION['ciusuarioeditar'];
    
    $nombre=$_GET['nombre'];    
    $fecha=$_GET['fn'];
    $departamento=$_GET['departamento'];
    $usuario=$_GET['usuario'];
    $contrasena=$_GET['contrasena'];
    $color=$_GET['color'];    
    $rol=0;
    switch($_GET['rol'])
    {
        case 'administrador':{$rol=1;}break;
        case 'docente':{$rol=2;}break;
        case 'estudiante':{$rol=3;}break;
    }
    
    $objetoconeccion=new Configuracion();
    $coneccion=new mysqli($objetoconeccion->gethost(),$objetoconeccion-> getusuario(),$objetoconeccion-> getpassword(),$objetoconeccion->getbase()) or die("Error de coneccion....");
    $sql="delete from persona where ci='".$ci."'";
          
    $resultado=mysqli_query($coneccion,$sql);
    $sql="delete from usuario where idusuario='".$idusuario."'";          
    $resultado=mysqli_query($coneccion,$sql);
    $coneccion->close();
    header("location: usuariolistado.php");
?>
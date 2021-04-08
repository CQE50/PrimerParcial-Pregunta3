<?php
    include('configuracion.php');
    session_start();
    $ci=$_GET['ci'];    
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
    $sql="insert into persona(ci,nombrecompleto,fechanacimiento,departamento)values('".
          $ci."','".
          $nombre."','".
          $fecha."','".
          $departamento.
          "')";
    $resultado=mysqli_query($coneccion,$sql);
    $sql="insert into usuario(usuario,contrasena,color,ci,idrol)values('".
          $usuario."','".
          $contrasena."','".
          $color."','".
          $ci."','".
          $rol.
          "')";
    $resultado=mysqli_query($coneccion,$sql);
    $coneccion->close();
    header("location: usuariolistado.php");
?>
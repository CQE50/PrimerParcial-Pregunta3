<?php
    include('configuracion.php');
    $usuario=$_GET['usuario'];
    $contrasena=$_GET['contrasena'];    
    $objetoconeccion=new Configuracion();
    $coneccion=new mysqli($objetoconeccion->gethost(),$objetoconeccion-> getusuario(),$objetoconeccion-> getpassword(),$objetoconeccion->getbase()) or die("Error de coneccion....");
    $sql="select t0.*,t1.nombrecompleto,t2.descripcion,t1.departamento from usuario t0,persona t1,sys_rol t2 where t0.ci=t1.ci and t0.idrol=t2.idrol and t0.usuario='".$usuario."' and t0.contrasena='".$contrasena."'";			
    $resultado=mysqli_query($coneccion,$sql);
    if($resultado->num_rows > 0)
    {
        $fila=mysqli_fetch_array($resultado,MYSQLI_NUM);
        $idusuario=$fila[0];        
        $nombre=$fila[6];
        $idrol=$fila[5];
        $rol=$fila[7];
        $color=$fila[3];
        $ci=$fila[4];
        $departamento=$fila[8];
        session_start();
        $_SESSION['idusuario']=$idusuario;
        $_SESSION['nombre']=$nombre;
        $_SESSION['idrol']=$idrol;
        $_SESSION['rol']=$rol;
        $_SESSION['color']=$color;
        $_SESSION['ci']=$ci;
        $_SESSION['departamento']=$departamento;
        header("location: principal.php");
    }
    else
    {
        header("location: index.php");
    }
    /*while($fila=mysqli_fetch_array($resultado,MYSQLI_NUM))
    //{
      //  print"<tr><td>$nro</td><td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td><a href=''></a></td><td><a href=''></a></td></tr>";
    //}*/
    $coneccion->close();
?>
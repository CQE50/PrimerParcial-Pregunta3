<?php
    include('configuracion.php');
    session_start();
    $ci=$_SESSION['ci'];
    $color=$_GET['color'];    
    $objetoconeccion=new Configuracion();
    $coneccion=new mysqli($objetoconeccion->gethost(),$objetoconeccion-> getusuario(),$objetoconeccion-> getpassword(),$objetoconeccion->getbase()) or die("Error de coneccion....");
    $sql="update usuario set color='".$color."' where ci='".$ci."'";			    
    $resultado=mysqli_query($coneccion,$sql);
    $coneccion->close();
    header("location: principal.php");
?>
<?php
 class Configuracion{
  private $host = "localhost";
  private $usuario = "root";
  private $password = "";
  private $base = "mibase";
  function Configuracion(){}

  function gethost()
  {
    return $this-> host;
  }
  function getusuario()
  {
    return $this-> usuario;
  }
  function getpassword()
  {
    return $this-> password;
  }
  function getbase()
  {
    return $this-> base;
  }  
 }
 ?>
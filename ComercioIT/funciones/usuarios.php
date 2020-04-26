<?php

   ###########################
   ##### CRUD DE USUARIOS ####
   ###########################

   /**
    * @return bool|mysqli_result $resultado 
   */

   function listarUsuarios()
   {
      $link = conectar();
      $sql  = "SELECT 
                     idUsuario,
                     usuNombre,
                     usuApellido,
                     usuEmail,
                     usuPass,
                     usuEstado
                  FROM usuarios";
      $resultado = mysqli_query( $link , $sql)
                           or die( mysqli_error($link) );
      return $resultado;
   }

   function agregarUsuario()
   {
      // capturamos los datos enviados por el form
      $usuNombre =$_POST['usuNombre'];
      $usuApellido =$_POST['usuApellido'];
      $usuEmail =$_POST['usuEmail'];
      $usuPass =$_POST['usuPass'];
      $usuEstado =$_POST['usuEstado'];

      $link = conectar();
      $sql  = "INSERT INTO usuarios 
                  VALUES
                  (DEFAULT,
                     '".$usuNombre."',
                     '".$usuApellido."',
                     '".$usuEmail."',
                     '".$usuPass."',
                     ".$usuEstado."
                  )";
      $resultado = mysqli_query( $link , $sql)
                           or die(mysqli_error($link));
      return $resultado;

   }

   function verUsuarioPorID($idUsuario)
   {
      $link = conectar();
      $sql  = "SELECT 
                     idUsuario,
                     usuNombre,
                     usuApellido,
                     usuEmail,
                     usuPass,
                     usuEstado
               FROM usuarios
               WHERE idUsuario = ".$idUsuario;
      $resultado = mysqli_query( $link , $sql)
                        or die(mysqli_error($link));
      $usuario = mysqli_fetch_assoc($resultado);
      return $usuario; 
   }

   function modificarUsuario()
   {
      // capturamos los datos enviados por el form
      $idUsuario = $_POST['idUsuario'];
      $usuNombre =$_POST['usuNombre'];
      $usuApellido =$_POST['usuApellido'];
      $usuEmail =$_POST['usuEmail'];
      $usuPass =$_POST['usuPass'];
      $usuEstado =$_POST['usuEstado'];

      $link = conectar();
      $sql  = "UPDATE usuarios
                  SET
                     usuNombre = '".$usuNombre."',
                     usuApellido = '".$usuApellido."',
                     usuEmail = '".$usuEmail."',
                     usuPass = '".$usuPass."',
                     usuEstado = ".$usuEstado."
                  WHERE idUsuario = ".$idUsuario;
      $resultado = mysqli_query( $link , $sql)
                           or die(mysqli_error($link));
      return $resultado;
   }

   function eliminarUsuario()
   {
      //capturamos los datos enviados por el form 
      $idUsuario = $_POST['idUsuario'];

      $link = conectar();
      $sql  = "DELETE FROM usuarios
                      WHERE idUsuario = ".$idUsuario; 
      $resultado = mysqli_query( $link , $sql)
                           or die(mysqli_error($link));
      return $resultado;
   }



   /**
    * listarUsuarios()
    * verUsuarioPorID()
    * agregarUsuario()
    * modificarUsuario()
    * eliminarUsuario
   */
?>
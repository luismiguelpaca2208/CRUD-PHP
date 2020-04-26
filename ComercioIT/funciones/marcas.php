<?php

   #########################
   ##### CRUD DE MARCAS ####
   #########################

   /**
    * @return bool|mysqli_result $resultado
    */


   function listarMarcas()
   {
       $link = conectar();
       $sql  = "SELECT idMarca,mkNombre
                    FROM marcas";
       $resultado = mysqli_query( $link , $sql)
                            or die( mysqli_error($link) );
       return $resultado;
   }

   function agregarMarca()
   {
       // capturamos los datos enviados por el form
       $mkNombre = $_POST['mkNombre'];

       $link = conectar();
       $sql  = "INSERT INTO marcas 
                        VALUES
                        (DEFAULT,'".$mkNombre."')";
        $resultado = mysqli_query( $link , $sql)
                            or die(mysqli_error($link));
        return $resultado;
   }

   function verMarcaPorID($idMarca)
   {
        $link = conectar();
        $sql  = "SELECT idMarca,mkNombre
                    FROM marcas
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link , $sql)
                            or die(mysqli_error($link));
        $marca = mysqli_fetch_assoc($resultado);
        return $marca;
   }

   function modificarMarca()
   {
       // capturamos los datos enviados por el form
       $mkNombre = $_POST['mkNombre'];
       $idMarca  = $_POST['idMarca'];

       $link = conectar();
       $sql  = "UPDATE marcas
                    SET
                        mkNombre = '".$mkNombre."'
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link , $sql)
                            or die(mysqli_error($link));
        return $resultado;
   }

   function productoPorMarca()
   {
       $idMarca = $_GET['idMarca'];

       $link = conectar();
       $sql  = "SELECT 1 
                    FROM productos
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link, $sql)
                            or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);
        return $cantidad;
   }

   function eliminarMarca()
   {
       //capturamos los datos enviados por el form 
       $idMarca = $_POST['idMarca'];

       $link = conectar();
       $sql  = "DELETE FROM marcas 
                       WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link , $sql)
                            or die($link);
        return $resultado;
   }

   /**
    * listarMarcas()
    * verMarcaPorID()
    * agregarMarca()
    * modificarMarca()
    * eliminarMarca
    */
?>

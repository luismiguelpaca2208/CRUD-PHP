<?php

  #############################
  ##### CRUD DE CATEGORIAS ####
  #############################

  /**
  * @return bool|mysqli_result $resultado 
  */

    function listarCategorias()
    {
      $link = conectar();
      $sql  = "SELECT idCategoria,catNombre
                  FROM categorias";
      $resultado = mysqli_query( $link , $sql)
                          or die( mysqli_error($link) );
      return $resultado;
    }

    function agregarCategoria()
    {
      // capturamos los datos enviados por el form
      $catNombre = $_POST['catNombre'];

      $link = conectar();
      $sql  = "INSERT INTO categorias
                      VALUES
                      (DEFAULT ,'".$catNombre."')";
      $resultado = mysqli_query( $link , $sql )
                          or die( mysqli_error($link) );
      return $resultado;
    }

    function verCategoriaPorID($idCategoria)
    {
      $link = conectar();
      $sql  = "SELECT idCategoria,catNombre
                  FROM categorias
                  WHERE idCategoria = ".$idCategoria;
      $resultado = mysqli_query( $link , $sql)
                          or die(mysqli_error($link));
      $categoria = mysqli_fetch_assoc($resultado);
      return $categoria;
    }

    function modificarCategoria()
    {
      // capturamos los datos enviados por el form
      $catNombre = $_POST['catNombre'];
      $idCategoria = $_POST['idCategoria'];

      $link = conectar();
      $sql  = "UPDATE categorias
                  SET 
                    catNombre = '".$catNombre."'
                  WHERE idCategoria = ".$idCategoria;
      $resultado = mysqli_query( $link , $sql)
                          or die(mysqli_error($link));
      return $resultado;
    }


    /**
     * chequear si hay productos de una categoría
    */

    function productoPorCategoria()
    {
      $idCategoria = $_GET['idCategoria'];

      $link = conectar();
      $sql  = "SELECT 1 
                  FROM productos
                  WHERE idCategoria =".$idCategoria;
      $resultado = mysqli_query( $link , $sql)
                          or die(mysqli_error($link));
      $cantidad = mysqli_num_rows($resultado);
      return $cantidad;
    }

    function eliminarCategoria()
    {
      //capturamos los datos enviados por el form 
      $idCategoria = $_POST['idCategoria'];

      $link = conectar();
      $sql  = "DELETE FROM categorias
                      WHERE idCategoria = ".$idCategoria;
      $resultado = mysqli_query( $link , $sql)
                          or die(mysqli_error($link));
      return $resultado;
    }

  /**
  * listarCategorias()
  * verCategoriaPorID()
  * agregarCategoria()
  * modificarCategoria()
  * eliminarCategoria
  */

?>
<?php

    const SERVER   ='localhost';
    const USUARIO  ='root';
    const CLAVE    = '';
    const BBDD     = 'catalogo';

    /** 
     * @return mysqli $link 
    */

    function conectar()
    {
        $link = mysqli_connect(
                                SERVER,
                                USUARIO,
                                CLAVE,
                                BBDD
        );
        return $link;
    }
?>
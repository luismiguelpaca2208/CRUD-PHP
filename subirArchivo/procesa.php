<?php

    //Capturar lo que envio el formulario

    $prdImagen = $_FILES['prdImagen'];

?>
<pre>
    <?php 
        print_r($prdImagen);
    ?>
</pre>
<?php 

    function subirArchivo()
    {
    $ruta = 'fotos/';
    $prdImagen = $_FILES['prdImagen']['name'];
    $temp = $_FILES['prdImagen']['tmp_name'];
    
    move_uploaded_file($temp,$ruta.$prdImagen);
    }

    subirArchivo();
?>
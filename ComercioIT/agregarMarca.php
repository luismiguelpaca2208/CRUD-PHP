<?php 
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = agregarMarca();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Alta de una nueva Marca </h1>

        <?php 
            $clase = 'danger';
            $mensaje = 'No se pudo agregar la Marca';
            if ($chequeo) {
                $clase = 'success';
                $mensaje = 'Marca agregada correctamente';
            }
        ?>

        <div class="alert alert-<?php echo $clase ?> mt-3">
            <?php echo $mensaje?>
        </div>

        <a href="adminMarcas.php" class="btn btn-outline-secondary">Volver al panel de Marcas</a>


    </main>

<?php  include 'includes/footer.php';  ?>
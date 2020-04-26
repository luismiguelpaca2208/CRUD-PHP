<?php  
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = eliminarMarca();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Baja de una Marca</h1>

        <?php 
            $clase = 'danger';
            $mensaje = 'No se pudo eliminar la marca';
            if ($chequeo) {
                $clase = 'success';
                $mensaje = 'Marca eliminada correctamente';
            }
        ?>

        <div class="alert alert-<?php echo $clase ?> mt-3">
            <?php echo $mensaje?>
        </div>

        <a href="adminMarcas.php" class="btn btn-outline-secondary">Volver al panel de Marcas</a>

    </main>

<?php  include 'includes/footer.php';  ?>
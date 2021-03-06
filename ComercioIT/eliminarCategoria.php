<?php  
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chequeo = eliminarCategoria();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Baja de una Categoría</h1>
        
        <?php 
            $clase = 'danger';
            $mensaje = 'No se pudo eliminar la categoría';
            if ($chequeo) {
                $clase = 'success';
                $mensaje = 'Categoría eliminada correctamente';
            }
        ?>

        <div class="alert alert-<?php echo $clase ?> mt-3">
            <?php echo $mensaje?>
        </div>

        <a href="adminCategorias.php" class="btn btn-outline-secondary">Volver al panel de Categorías</a>

    </main>

<?php  include 'includes/footer.php';  ?>
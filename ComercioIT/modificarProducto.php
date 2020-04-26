<?php  
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = modificarProducto();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Modificación de un Producto</h1>

        <?php 
            $clase = 'danger';
            $mensaje = 'No se pudo modificar el producto';
            if ($chequeo) {
                $clase = 'success';
                $mensaje = 'Producto modificado correctamente';
            }
        ?>

        <div class="alert alert-<?php echo $clase ?> mt-3">
            <?php echo $mensaje?>
        </div>

        <a href="adminProductos.php" class="btn btn-outline-secondary">Volver al panel de Productos</a>


    </main>

<?php  include 'includes/footer.php';  ?>
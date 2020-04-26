<?php  
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = agregarProducto();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">

        <h1>Alta de un nuevo Producto </h1>

        <?php 
            $clase = 'danger';
            $mensaje = 'No se pudo agregar el producto';
            if ($chequeo) {
                $clase = 'success';
                $mensaje = 'Producto agregado correctamente';
            }
        ?>

        <div class="alert alert-<?php echo $clase ?> mt-3">
            <?php echo $mensaje?>
        </div>

        <a href="adminProductos.php" class="btn btn-outline-secondary">Volver al panel de Productos</a>

    </main>

<?php  include 'includes/footer.php';  ?>
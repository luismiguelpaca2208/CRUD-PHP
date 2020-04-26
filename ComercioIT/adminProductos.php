<?php  
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">

        <h1>Panel de Administración de Productos</h1>

        <a href="admin.php" class="btn btn-outline-secondary mt-4 mb-4">Volver al Dashboard</a>

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Producto</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Categoría</th>
                    <th class="text-center">Presentación</th>
                    <th class="text-center">Imagen</th>
                    <th colspan="2">
                        <a href="formAgregarProducto.php" class="btn btn-dark mb-3">Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($producto = mysqli_fetch_assoc($productos)){
                ?>
                <tr>
                    <td class="text-center"><?php echo $producto['prdNombre'] ?></td>
                    <td class="text-center"><?php echo $producto['prdPrecio'] ?></td>
                    <td class="text-center"><?php echo $producto['mkNombre'] ?></td>
                    <td class="text-center"><?php echo $producto['catNombre'] ?></td>
                    <td class="text-center"><?php echo $producto['prdPresentacion'] ?></td>
                    <td class="text-center"><img src="productos/<?php echo $producto['prdImagen'] ?>" class="img-thumbnail"></td>
                    <td class="text-center"><a href="formModificarProducto.php?idProducto=<?php echo $producto['idProducto']?>" class="btn btn-outline-secondary">Modificar</a></td>
                    <td class="text-center"><a href="formEliminarProducto.php?idProducto=<?php echo $producto['idProducto']?>" class="btn btn-outline-secondary">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary mt-3 mb-4">Volvera Dashboard</a>

    </main>

<?php  include 'includes/footer.php'; ?>
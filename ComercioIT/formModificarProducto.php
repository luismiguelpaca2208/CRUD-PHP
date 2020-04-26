<?php  
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    require 'funciones/categorias.php';
    require 'funciones/productos.php';
    $marcas = listarMarcas();
    $categorias = listarCategorias();
    $producto = verProductoPorID($_GET['idProducto']);
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">

        <h1>Modificación de un Producto</h1>

        <div class="alert alert-secondary mt-4 p-3">
            <form action="modificarProducto.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="prdNombre">Nombre del Producto</label>
                    <input type="text" class="form-control" value="<?php echo $producto['prdNombre'] ?>" name="prdNombre" id="prdNombre" required>
                </div>
                <label for="prdPrecio">Precio del Producto</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number" class="form-control" value="<?php echo $producto['prdPrecio'] ?>" name="prdPrecio" id="prdPrecio" min= "0" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="idMarca">Marca</label>
                    <select class="form-control" name="idMarca" id="idMarca" required>
                        <option value="<?php echo $producto['idMarca'] ?>"><?php echo $producto['mkNombre'] ?></option>
                        <?php while($marca = mysqli_fetch_assoc($marcas)){?>
                        <option value="<?php echo $marca['idMarca'] ?>"><?php echo $marca['mkNombre']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idCategoria">Categoría</label>
                    <select class="form-control" name="idCategoria" id="idCategoria" required>
                        <option value="<?php echo $producto['idCategoria'] ?>"><?php echo $producto['catNombre'] ?></option>
                        <?php while ($categoria = mysqli_fetch_assoc($categorias)){?>
                        <option value="<?php echo $categoria['idCategoria'] ?>"><?php echo $categoria['catNombre'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prdPresentacion">Presentación del Producto</label>
                    <textarea  class="form-control" name="prdPresentacion" id="prdPresentacion" required><?php echo $producto['prdPresentacion'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="prdStock">Stock del Producto</label>
                    <input type="number" class="form-control" value="<?php echo $producto['prdStock'] ?>" name="prdStock" id="prdStock" min="0" required>
                </div>
                <div class="form-group">
                    <label for="prdImagen">Imagen del Producto</label><br>
                    <img src="productos/<?php echo $producto['prdImagen'] ?>" class="img-thumbnail"><br>
                    <input type="file" class="form-control-file"  name="prdImagen" id="prdImagen">
                </div>

                <input type="hidden" name="idProducto" value="<?php echo $producto['idProducto'] ?> ">
                <input type="hidden" name="imagenAnterior" value="<?= $producto['prdImagen'] ?>">
                <button class="btn btn-dark">Modificar Producto</button>
                <a href="adminProductos.php" class="btn btn-outline-secondary">Volver al panel de Productos</a>

            </form>
        </div>
        <br>
    </main>

<?php  include 'includes/footer.php';  ?>
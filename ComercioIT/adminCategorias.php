<?php  
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $categorias = listarCategorias();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de Administración de Categorías</h1>

        <a href="admin.php" class="btn btn-outline-secondary  mt-4 mb-4">Volver al Dashboard</a>

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Categoría</th>
                    <th colspan="2">
                    <a href="formAgregarCategoria.php" class="btn btn-dark">Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                     while ($categoria = mysqli_fetch_assoc($categorias)){
                ?>
                <tr>
                    <td class="text-center"><?php echo $categoria['catNombre'] ?></td>
                    <td class="text-center"><a href="formModificarCategoria.php?idCategoria=<?php echo $categoria['idCategoria'] ?>" class="btn btn-outline-secondary">Modificar</a></td>
                    <td class="text-center"><a href="formEliminarCategoria.php?idCategoria=<?php echo $categoria['idCategoria'] ?>" class="btn btn-outline-secondary">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary mt-3 mb-4">Volver al Dashboard</a>

    </main>

<?php  include 'includes/footer.php';  ?>
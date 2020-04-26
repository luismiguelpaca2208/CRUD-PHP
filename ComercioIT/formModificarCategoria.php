<?php  
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $categorias = listarCategorias();
    $categoria  = verCategoriaPorID($_GET['idCategoria']);
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">

        <h1>Modificación de una Categoría</h1>

        <div class="alert alert-secondary mt-4 p-3">
            <form action="modificarCategoria.php" method="POST">
                <label for="catNombre">Categoría</label>
                <input type="text" name="catNombre"  value="<?php echo $categoria['catNombre'] ?>" id="catNombre" class="form-control" required>
                <br>
                <input type="hidden" name="idCategoria" value="<?php echo $categoria['idCategoria'] ?>">
                <button class="btn btn-dark">Agregar Categoría</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">Volver a Panel de Categorías</a>
               
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
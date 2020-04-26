<?php  
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">

        <h1>Alta de una nueva Categoría </h1>

        <div class="alert alert-secondary mt-4 p-3">
            <form action="agregarCategoria.php" method="POST">
                <label for="catNombre">Categoría</label>
                <input type="text" name="catNombre" id="catNombre" class="form-control" required>
                <br>
                <button class="btn btn-dark">Agregar Categoría</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">Volver a Panel de Categorías</a>
               
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
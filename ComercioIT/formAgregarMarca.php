<?php  
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Alta de una Marca </h1>

        <div class="alert alert-secondary mt-4 p-3">
            <form action="agregarMarca.php" method="POST">
                <label for="mkNombre">Marca</label>
                <input type="text" name="mkNombre" id="mkNombre" class="form-control" required>
                <br>
                <button class="btn btn-dark">Agregar Marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">Volver a Panel de Marcas</a>
               
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
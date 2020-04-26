<?php  
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marcas = listarMarcas();
    $marca = verMarcaPorID($_GET['idMarca']);
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Modificación de una Marca</h1>

        <div class="alert alert-secondary mt-4 p-3">
            <form action="modificarMarca.php" method="POST">
                <label for="mkNombre">Marca</label>
                <input type="text" name="mkNombre" value="<?php echo $marca['mkNombre']?>" id="mkNombre" class="form-control" required>
                <br>
                <input type="hidden" name="idMarca" value="<?php echo $marca['idMarca'] ?> ">
                <button class="btn btn-dark">Modificar Marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">Volver a Panel de Marcas</a>
               
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
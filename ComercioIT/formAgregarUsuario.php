<?php  
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Alta de un nuevo Usuario</h1>

        <div class="alert alert-secondary mt-4 p-3">
            <form action="agregarUsuario.php" method="POST">
                <div class="form-group">
                    <label for="usuNombre">Nombre</label>
                    <input type="text" name="usuNombre" id="usuNombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="usuApellido">Apellido</label>
                    <input type="text" name="usuApellido" id="usuApellido" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="usuEmail">E-mail</label>
                    <input type="email" name="usuEmail" id="usuEmail" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="usuPass">Clave</label>
                    <input type="text" name="usuPass" id="usuPass" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="usuEstado">Estado</label>
                    <input type="number" name="usuEstado" id="usuEstado" class="form-control" min ="0" max = "1" required>
                </div>
                
                <button class="btn btn-dark" >Agregar Usuario</button>
                <a href="adminUsuarios.php" class="btn btn-outline-secondary">Volver a Panel de Usuarios</a>
               
            </form>
        </div>
        <br>
    </main>

<?php  include 'includes/footer.php';  ?>
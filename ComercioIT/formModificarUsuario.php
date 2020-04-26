<?php  
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $usuarios = listarUsuarios();
    $usuario  = verUsuarioPorID($_GET['idUsuario']);
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Modificar Usuario</h1>

        <div class="alert alert-secondary mt-4 p-3">
            <form action="modificarUsuario.php" method="POST">
                <div class="form-group">
                    <label for="usuNombre">Nombre</label>
                    <input type="text" value="<?php echo $usuario['usuNombre'] ?>" name="usuNombre" id="usuNombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="usuApellido">Apellido</label>
                    <input type="text" value="<?php echo $usuario['usuApellido'] ?>" name="usuApellido" id="usuApellido" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="usuEmail">E-mail</label>
                    <input type="email" value="<?php echo $usuario['usuEmail'] ?>" name="usuEmail" id="usuEmail" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="usuPass">Clave</label>
                    <input type="text" value="<?php echo $usuario['usuPass'] ?>" name="usuPass" id="usuPass" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="usuEstado">Estado</label>
                    <input type="number" value="<?php echo $usuario['usuEstado'] ?>" name="usuEstado" id="usuEstado" class="form-control" min ="0" max = "1" required>
                </div>
                <br>
                <input type="hidden" name="idUsuario" value="<?php echo $usuario['idUsuario'] ?> ">
                <button class="btn btn-dark" >Modificar Usuario</button>
                <a href="adminUsuarios.php" class="btn btn-outline-secondary">Volver a Panel de Usuarios</a>
               
            </form>
        </div>
        <br>
    </main>

<?php  include 'includes/footer.php';  ?>
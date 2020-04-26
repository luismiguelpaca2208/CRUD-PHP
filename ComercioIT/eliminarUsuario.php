<?php  
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = eliminarUsuario();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Baja de un Usuario</h1>

        <?php 
            $clase = 'danger';
            $mensaje = 'No se pudo eliminar el usuario';
            if ($chequeo) {
                $clase = 'success';
                $mensaje = 'Usuario eliminado correctamente';
            }
        ?>

        <div class="alert alert-<?php echo $clase ?> mt-3">
            <?php echo $mensaje?>
        </div>

        <a href="adminUsuarios.php" class="btn btn-outline-secondary">Volver al panel de Usuarios</a>

    </main>

<?php  include 'includes/footer.php';  ?>
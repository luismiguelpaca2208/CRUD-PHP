<?php  
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $usuario = verUsuarioPorID($_GET['idUsuario']);
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Baja de un Usuario</h1>

        <div class="alert border-danger text-danger text-center col-6 mx-auto mt-5">
           Se eliminará el siguente usuario : <span class="lead"><?php echo $usuario['usuNombre']?></span>

           <form action="eliminarUsuario.php" method="POST">
                <input type="hidden" name="idUsuario" value="<?php echo $usuario['idUsuario']?>">
                <button class="btn btn-danger btn-block my-2">Confirmar Baja</button>
                <a href="adminUsuarios.php" class="btn btn-outline-secondary btn-block">
                    Volver a Panel
                </a>
            </form>

        </div>

        <script>
            Swal.fire({
              title: '¿Desea eliminar el usuario seleccionado?',
              text: "Esta acción no se puede deshacer",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#22262b',
              confirmButtonText: 'Si, lo quiero eliminar!',
              cancelButtonText: 'No, lo quiero eliminar!'
            }).then((result) => {
                if (!result.value) {
                    //redirección a admin
                    window.location = 'adminUsuarios.php';

                }
            })
        </script>

    </main>

<?php  include 'includes/footer.php';  ?>
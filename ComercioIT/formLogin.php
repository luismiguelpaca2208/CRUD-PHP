<?php  
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1 class="text mb-5">Ingreso al sistema</h1>

        <div class="alert bg-light col-6 mx-auto p-3 border">
            <form action="login.php" method="POST">
                <div class="text-dark mb-2">
                    Usuario:
                </div>
                <input type="text" name="usuEmail" class="form-control">
                <div class="text-dark mb-2 mt-3">
                    Clave:
                </div>
                <input type="password" name="usuPass" class="form-control">
                <div class="boton mt-3">
                    <button class="btn btn-dark btn-block">
                        Ingresar
                    </button>
                </div>
                
            </form>
        </div>
        <?php 
            if ( isset($_GET['error']) ) {
            $error = $_GET['error'];
            $titulo  = 'Error en el login';
            $leyenda = 'Nombre de usuario y/o contraseña incorrectos';
            if ($error ==2) {
                $titulo  = 'Error de ingreso';
                $leyenda = 'Debe loguearse para ingresar al sistema';
            }
        ?>
           <script>
               Swal.fire(
                   '<?php echo $titulo ?>',
                   '<?php echo $leyenda ?>',
                   'error'
               )
           </script>
        <?php
            }
        ?>
    </main>

<?php  include 'includes/footer.php';  ?>
<?php 
    require 'config/config.php';
    require 'funciones/autenticacion.php';
             logout();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Salir de sistema</h1>

        <div class="alert alert-info mt-5">
            Gracias por su visita.
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
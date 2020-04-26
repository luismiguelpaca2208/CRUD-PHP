<?php  
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $cantidad = productoPorMarca();
        if ($cantidad == 0) {
            $marca = verMarcaPorID($_GET['idMarca']);
        }
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Baja de una Marca</h1>

        <?php 
            if ($cantidad > 0) {//si hay productos de esa marca
        ?>
        <div class="alert alert-danger text-center col-6 mx-auto mt-5">
            No se puede eliminar la marca 
            seleccionada ya que tiene productos relacionados
        </div>
        <br>
        <a href="adminMarcas.php" class="btn btn-secondary mx-2">
            Volver al Panel
        </a>
        <?php }
            else{//si hay productos de esa marca
        ?>
        <div class="alert border-danger text-danger text-center col-6 mx-auto mt-5">
            Se eliminara la Marca: <span class="lead"><?php echo $marca['mkNombre']?></span> 
            <form action="eliminarMarca.php" method="POST">
                <input type="hidden" name="idMarca" value="<?php echo $marca['idMarca']?>">
                <button class="btn btn-danger btn-block my-2">Confirmar Baja</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary btn-block">
                    Volver a Panel
                </a>
            </form>
        </div>

        <script>
            Swal.fire({
              title: '¿Desea eliminar la marca seleccionada?',
              text: "Esta acción no se puede deshacer",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#22262b',
              confirmButtonText: 'Si, lo quiero eliminar!',
              cancelButtonText: 'No lo quiero eliminar'
            }).then((result) => {
                if (!result.value) {
                    //redirección a admin
                    window.location = 'adminMarcas.php';

                }
            })
        </script>

        <?php
            }
        ?>
    </main>

<?php  include 'includes/footer.php';  ?>
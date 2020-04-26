<?php  
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $cantidad = productoPorCategoria();
    if ($cantidad == 0) {
        $categoria = verCategoriaPorID($_GET['idCategoria']);
    }
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Baja de una Categoría</h1>

        <?php 
            if ($cantidad > 0) {//si hay productos de esa categoría
        ?>
        <div class="alert alert-danger text-center col-6 mx-auto mt-5">
            No se puede eliminar la categoría 
            seleccionada ya que tiene productos relacionados
        </div>
        <br>
        <a href="adminCategorias.php" class="btn btn-secondary mx-2">
            Volver al Panel
        </a>
        <?php }
            else{//si hay productos de esa categoría
        ?>
        <div class="alert border-danger text-danger text-center col-6 mx-auto mt-5">
            Se eliminara la Categoría: <span class="lead"><?php echo $categoria['catNombre']?></span> 
            <form action="eliminarCategoria.php" method="POST">
                <input type="hidden" name="idCategoria" value="<?php echo $categoria['idCategoria']?>">
                <button class="btn btn-danger btn-block my-2">Confirmar Baja</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary btn-block">
                    Volver a Panel
                </a>
            </form>
        </div>

        <script>
            Swal.fire({
              title: '¿Desea eliminar la categoría seleccionada?',
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
                    window.location = 'adminCategorias.php';

                }
            })
        </script>

        <?php
            }
        ?>

    </main>

<?php  include 'includes/footer.php';  ?>
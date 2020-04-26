<?php  
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $producto = verProductoPorID($_GET['idProducto']);
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1 class="text-dark mb-4 pb-4">Baja de un Producto</h1>
        
       <article class="card col-6 mx-auto text-danger border-danger ">
            <div class="row">
                <div class="col-6 p-0">
                    <img src="productos/<?php echo $producto['prdImagen'] ?>" class="img-thumbnail">
                </div>
                <div class="card-body col-6">
                    <span class="lead">
                        <?php echo $producto['prdNombre'] ?>
                    </span>
                    <div>
                        Marca : <?php echo $producto['mkNombre'] ?>
                    </div>
                    <div>
                        Categoría : <?php echo $producto['catNombre'] ?>
                    </div>
                    <div>
                        Presentación : <?php echo $producto['prdPresentacion'] ?>
                    </div>
                    <div>
                        Stock : <?php echo $producto['prdStock'] ?>
                    </div>
                    Precio
                    <span class="lead">
                        <?php echo $producto['prdPrecio'] ?>
                    </span>
                    <form action="eliminarProducto.php" method="POST">
                        <input type="hidden" name="idProducto" value="<?php echo $producto['idProducto']?>">
                        <button class="btn btn-danger btn-block py-2 mt-3">
                            Confirmar Baja
                        </button>
                        <a href="adminProductos.php" class="btn btn-outline-secondary btn-block">
                            Volver al Panel
                        </a>
                    </form>
                </div>
            </div>
       </article>
    </main>

    <script>
        Swal.fire({
            title: '¿Desea eliminar la producto seleccionada?',
            text: "Esta acción no se puede deshacer",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#22262b',
            confirmButtonText: 'Si, lo quiero eliminar!',
            cancelButtonText: 'No, lo quiero eliminar'
        }).then((result) => {
            if (!result.value) {
                //redirección a admin
                window.location = 'adminProductos.php';

            }
        })
    </script>

<?php  include 'includes/footer.php';  ?>
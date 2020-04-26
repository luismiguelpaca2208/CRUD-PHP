<?php  
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1>Catálogo de Productos</h1>

        <section class="row mt-5">
            <?php while($producto = mysqli_fetch_assoc($productos)){ ?>
                
                <article class="card col-4 p-0">
                    <img src="productos/<?php echo $producto['prdImagen']?>" class="card-img-top">
                    <div class="card-body">
                        <h2 class="text-info"><?php echo $producto['prdNombre'] ?></h2>
                        <div>
                            <div>
                                <?php echo $producto['mkNombre'] ?>
                            </div>
                            <div>
                                <?php echo $producto['catNombre'] ?> 
                            </div>
                            <div>
                                <?php echo $producto['prdPresentacion'] ?> 
                            </div>
                            <div>
                                <?php echo $producto['prdStock'] ?>
                            </div>
                            <span class="text-info lead">
                                $<?php echo $producto['prdPrecio'] ?>
                            </span>
                            <a href="" class="btn btn-info btn-block">Ver detalle</a>
                        </div>
                    </div>
                </article>
            <?php } ?>

        </section>
        
    </main>

<?php  include 'includes/footer.php';  ?>
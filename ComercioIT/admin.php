<?php  
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de Administración </h1>
        <div class="list-group mt-4">
            <a href="adminMarcas.php" class="list-group-item list-group-item-action">Panel de Administración de Marcas</a>
            <a href="adminCategorias.php" class="list-group-item list-group-item-action">Panel de Administración de Categorias</a>
            <a href="adminProductos.php" class="list-group-item list-group-item-action">Panel de Administración de Productos</a>
            <a href="adminUsuarios.php" class="list-group-item list-group-item-action">Panel de Administración de Usuarios</a>
        </div>

    </main>

<?php  include 'includes/footer.php'; ?>
<?php  
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $usuarios = listarUsuarios();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">

        <h1>Panel de Administración de Usuarios</h1>

        <a href="admin.php" class="btn btn-outline-secondary mt-4 mb-4">Volvera Dashboard</a>

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">E-mail</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Estado</th>
                    <th colspan="2">
                        <a href="formAgregarUsuario.php" class="btn btn-dark mb-3">Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($usuario = mysqli_fetch_assoc($usuarios)){
                ?>
                <tr>
                    <td class="text-center"><?php echo $usuario['usuNombre']?></td>
                    <td class="text-center"><?php echo $usuario['usuApellido']?></td>
                    <td class="text-center"><?php echo $usuario['usuEmail']?></td>
                    <td class="text-center"><?php echo $usuario['usuPass']?></td>
                    <td class="text-center"><?php echo $usuario['usuEstado']?></td>
                    <td class="text-center"><a href="formModificarUsuario.php?idUsuario=<?php echo $usuario['idUsuario'] ?> " class="btn btn-outline-secondary">Modificar</a></td>
                    <td class="text-center"><a href="formEliminarUsuario.php?idUsuario=<?php echo $usuario['idUsuario'] ?>" class="btn btn-outline-secondary">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary mt-3 mb-4">>Volver a Dashboard</a>

    </main>

<?php  include 'includes/footer.php'; ?>
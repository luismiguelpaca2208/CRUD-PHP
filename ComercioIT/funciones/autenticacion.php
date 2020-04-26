<?php 

    ###################################
    ######### AUTENTICACION ###########
    ###################################


    function login()
    {
        // capturar los datos enviados en el form
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];

        $link = conectar();
        $sql  = "SELECT usuNombre, usuApellido 
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."' 
                    AND usuPass = '".$usuPass."' ";
        $resultado = mysqli_query( $link, $sql)
                            or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);

        if ($cantidad == 0) {
            //error en login -> redireccion a formLogin
            header('location: formLogin.php?error=1');
        }
        else {
            //login OK
            ######## autenticación con sesiones
            //session start() está en config

            $_SESSION['login']=1;

            //guardamos nombre y apellido
            $datos = mysqli_fetch_assoc($resultado);
            $_SESSION['usuNombre'] = $datos['usuNombre'];
            $_SESSION['usuApellido'] = $datos['usuApellido'];

            //redirecciones al admin
            header('location:admin.php');
        }
    }

    function logout()
    {
        session_unset();
        session_destroy();
        //redireccion a index (con delay)
        header('refresh:3; url=index.php');
    }

    function autenticar()
    {
        if (!isset($_SESSION['login'])) {
            header('location: formLogin.php?error=2');
        }
    }

?>
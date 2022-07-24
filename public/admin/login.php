<?php ob_start(); ?>
<?php session_start();
include 'conexion.php';
$error = false;
#validar datos
if ($_POST) {
    $conexion = new conexion();
    $usuario = $conexion->consultarConParametros(
        'SELECT * FROM usuarios WHERE email= :email AND clave= :clave AND activo',
        [':email' => $_POST['email'], ':clave'=> $_POST['clave']]
    );
    if($usuario){
        $_SESSION['usuario'] = "Admin";
        #redirecciono porque ingreso ok 
        header("location:index.php");
        die();
    } else {
        $error = true;
    }
} ?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <form method="POST" class="row mt-3 m-0 d-flex justify-content-center">
            <div class="col-lg-4 col-sm-12 p-3 border border-success rounded">
                <img src="img/img_avatar4.png" class="img-fluid rounded-circle">
                <?php if($error){ ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Usuario y/o Contraseña incorrecta
                </div>
                <?php } ?>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="clave" class="form-label">Clave</label>
                    <input type="password" class="form-control" id="clave" name="clave">
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
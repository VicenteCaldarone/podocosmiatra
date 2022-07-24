<?php ob_start(); #esto evita los errores de envios de headers
set_error_handler("var_dump");
include 'conexion.php';
session_start(); #inicializamos variables de sesion
#si esta logueado lo dejo trabajar y sino lo mando al login de nuevo 
if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
    die();
}
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <title>Admin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #70b9b0;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/admin/home.php">Administración</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/home.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="alert('Funcionalidad en desarrollo!'); return false;">Portfolio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" onclick="alert('Funcionalidad en desarrollo!'); return false;">Atenciones</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <div class="navbar-nav">
                        <a class="nav-link" href="cerrar.php" title="Salir">Salir <i class="bi bi-box-arrow-right"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </nav>
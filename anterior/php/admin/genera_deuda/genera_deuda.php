<?php session_start();
include_once "../../../funciones/funciones.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php head() ?>
    <script>
        function cerrarPagina() {
            window.close();
        }
    </script>
</head>

<body>

    <div>
        <form class="form" action="genera.php" method="POST" name="movil">
            <h1>Ingrese Movil</h1>
            <br><br>
            <input type="text" name="movil" class="gui-input" autofocus>
            <br><br>
            <input type="submit" value="BUSCAR" class=" btn btn-primary">
        </form>
    </div>
    <br><br><br>
    <button onclick="cerrarPagina()" class="btn btn-primary btn-sm">CERRAR PAGINA</button>

    <?php foot() ?>
</body>

</html>
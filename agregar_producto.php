<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/nav.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://kit.fontawesome.com/8446c158db.js" crossorigin="anonymous"></script>
    <title>Agregar</title>
</head>
<body>
<header>
    <div class="menuContainer"></div>
</header>
<?php include_once "encabezado.php" ?>
<div class="columnss">
    <div class="column">
        <h2 class="is-size-2">Nuevo producto</h2>
        <form action="guardar_producto.php" method="post">
            <div class="field">
                <label for="nombre">Nombre</label>
                <div class="control">
                    <input required id="nombre" class="input" type="text" placeholder="Nombre" name="nombre">
                </div>
            </div>
            <div class="field">
                <label for="descripcion">Descripción</label>
                <div class="control">
                    <textarea name="descripcion" class="textarea" id="descripcion" cols="30" rows="5" placeholder="Descripción" required></textarea>
                </div>
            </div>
            <div class="field">
                <label for="precio">Precio</label>
                <div class="control">
                    <input required id="precio" name="precio" class="input" type="number" placeholder="Precio">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-success">Guardar</button>
                    <a href="productos.php" class="button is-warning">Volver</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
        $(document).ready(function () {
            $('.menuContainer').load('nav2.php');
        });
    </script>
</body>
</html>

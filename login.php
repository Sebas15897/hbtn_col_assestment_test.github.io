<?php
    session_start();

    if (isset($_SESSION['user_id'])) {
    header('Location: tienda.php');
}
require 'database.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (is_countable($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        header("Location: /php-login");
        } else {
        $message = 'Sorry, those credentials do not match';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="shortcut icon" href="img/carrito.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>Login</title>
</head>
<body>
    <header>
        <div class="menuContainer"></div>
    </header>
    <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
    <?php endif; ?>
    <section class="login">
        <form action="login.php" method="POST">
            <div class="text">
                <img src="img/carrito.png" alt="">
            <p>Bienvenido.</p>
            </div>
            <input class="flex-item" type="email" placeholder="Ingrese su correo electronico" name="email">
            <input class="flex-item" type="password" placeholder="Ingrese su contraseña" name="password">
            <input class="item" type="submit" value="Inicio">
            <a class="item-a" href="register.php">¿No tienes cuenta?, registrate</a>
        </form>
    </section>
    -->
    <script>
        $(document).ready(function () {
            $('.menuContainer').load('nav.php');
        });
    </script>
</body>
</html>
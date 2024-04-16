<?php

$is_invalid = false;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";
    $username = mysqli_real_escape_string($mysqli, strtolower($_POST['uname']));
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

    if ($username == "admin" && $password == "password") {
        session_start();
        session_regenerate_id();
        $_SESSION["user_id"] = "admin";
        header('Location: appointment_details.php');
    }

    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document | Login</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/login_style.css">
</head>

<body>


    <section id="home">
        <form method="post">
            <div class="loginform" id="login-form">
                <h4 class="form-title">Login to the admin panel.</h4>
                <p class="form-desc">Enter email and password | <a href="index.php">Go home.</a></p>
                <p class="form-desc"><?php if ($is_invalid) : ?>
                        <em>Invalid login</em>
                    <?php endif; ?>
                </p>

                <div class="input-box email w-100">
                    <input type="text" placeholder="Enter username" class="form-control-plaintext" name="uname" id="inputEmail">

                </div>
                <div class="input-box passcode w-100">
                    <input type="password" placeholder="Passcode" name="password" class="form-control-plaintext" id="inputPassword">
                </div>
                <button class="btn btn-primary login-button w-100">Log in</button>
            </div>
        </form>
    </section>

</body>

</html>
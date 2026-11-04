<?php
session_start();

$_SESSION = [];
session_unset();
session_destroy();

header('Location: login.php');
exit;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Salmeira</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Halaman Login */
        .page-register {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .page-register .container {
            width: 100%;
            max-width: 520px;
            margin: 0;
        }

        .page-register .form-card {
            padding: 40px 45px;
        }
    </style>
</head>

<body class="page-register">

    <div class="container">
        <div class="form-card">
            <h3 style="text-align: center;"> Login Salmeira </h3>

            <form action="" method="post">
                <!-- Username -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Masukkan username" required>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Masukkan password" required>
                </div>

                <!-- Button -->
                 <div class="button-group">
                    <button type="submit" name="login" class="btn btn-edit"> Login </button>
                    <a href="registrasi.php" class="btn btn-kembali"> Registrasi </a>
                 </div>
            </form>
        </div>
    </div>
</body>
</html>

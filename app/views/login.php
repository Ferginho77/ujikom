
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Login Page</title>
</head>

<body>
    <div class="input">
        <h1>LOGIN</h1>
        <form action="" method="POST">
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" autocomplete="current-password" required="" id="id_password" placeholder="Password"><i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
            </div>
            <a href="dashboard.html">
                <button type="submit" name="login" class="btn-input">Login</button>
            </a>
            <div class="bottom">
                <p>Belum punya akun?
                    <a href="register.php">Register disini</a>
                </p>
            </div>
        </form>
    </div>
    <script>
      feather.replace();
    </script>
    <script src="../public/assets/js/login.js">
    </script>
</body>

</html>
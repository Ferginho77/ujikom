<?php
session_start();
// require_once '../models/m_user.php';
// require_once '../controllers/conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once'../../assets/layouts/navbar.php'?>
<main class="mt-3">
<h1> Selamat Datang <?= $_SESSION['data']['Username'] ?>,</h1>
<p>Coba Logout</p><a href="../controllers/c_user.php?aksi=logout">Logout</a>
</main>
</body>
</html>
<?php
session_start();

if (!isset($_GET['page'])) {
    header('location: index.php?page=login');
}

require_once('./app/controllers/c_user.php');
$cek = new C_user;

if($_GET['page'] == 'login'){
    require('./app/views/login.php');
}elseif($_GET['page'] == 'register'){
    require('./app/views/register.php');
}elseif($_GET['page'] == 'posregister'){
   $data['Username'] = $_POST['Username'];
   $data['Password'] = $_POST['Password'];
   $data['Email'] = $_POST['Email'];
   $data['NamaLengkap'] = $_POST['NamaLengkap'];
   $data['Alamat'] = $_POST['Alamat'];
   $cek->register($data);
}elseif($_GET['page'] == 'proslogin'){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $cek->login($Username, $Password);
}elseif($_GET['page'] == 'home'){
    require('./app/views/home.php');
}elseif($_GET['page'] == 'updateprof'){
    $data['Username'] = $_POST['Username'];
    $data['Email'] = $_POST['Email'];
    $data['NamaLengkap'] = $_POST['NamaLengkap'];
    $data['Alamat'] = $_POST['Alamat'];
    $cek->UpdateProfil($data);
}elseif($_GET['page'] == 'profile'){
    require('./app/views/profile.php');
}



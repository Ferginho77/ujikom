<?php 
include_once'../models/m_regis.php';

$regis = new Register();

if(isset($_POST['regis'])){ 
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $NamaLengkap = $_POST['NamaLengkap'];
    $Alamat = $_POST['Alamat'];

    if ($_GET['aksi'] == 'regis') {
        $result = $regis->input($Username, $Password, $Email, $NamaLengkap, $Alamat);

        if ($result) {
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/login.php'</script>";
        } else {
            echo "<script>alert('Data Gagal Ditambah');window.location='../views/tampil_data.php'</script>";
        }
    } 
}
<?php 

include_once '../models/m_user.php';

$login = new c_login();


        //        
        try {
            if ($_GET['aksi'] == 'regis') {
        
                $Username = $_POST['Username'];
                $Password = password_hash($Password, PASSWORD_DEFAULT);
                $Email = $_POST['Email'];
                $NamaLengkap = $_POST['NamaLengkap'];
                $Alamat = $_POST['Alamat'];
            
                    //memanggil method register
                    $login->register($Username, $Password, $Email, $NamaLengkap, $Alamat);
                    if ($login) {
                        echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/login.php'</script>";
                    } else {
                        echo "<script>alert('Data Gagal Ditambah');window.location='../views/tampil_data.php'</script>";
                    }
                   
                }
                    elseif ($_GET['aksi'] == 'login') {
                    $Username = $_POST['Username'];
                    $Password = $_POST['Password'];
                    if ($login) {
                        echo "<script>alert('Login Berhasil');window.location='../views/home.php'</script>";
                    } else {
                        echo "<script>alert('Login Gagal');window.location='../views/login.php'</script>";
                    }
                    $login->login($Username, $Password);
                } elseif ($_GET['aksi'] == 'logout') {
                    $login->logout();
                    if($login){
                        echo "<script>alert('Logout Berhasil');window.location='../views/login.php'</script>";
                    } else {
                        echo "<script>alert('Logout Gagal');window.location='../views/home.php'</script>";
                    }
                }
                
        } catch (Exception $e) {
            echo $e->getMessage();
        }

?>
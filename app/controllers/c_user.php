<?php 

include_once '../models/m_user.php';

$login = new c_login();


        //        
        try {
            if (isset($_POST['regis']) || isset($_POST['update'])) {
                $Username = $_POST['Username'];
                $Password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
                $Email = $_POST['Email'];
                $NamaLengkap = $_POST['NamaLengkap'];
                $Alamat = $_POST['Alamat'];
                
                if ($_GET['aksi'] == 'regis') {
                
                    $Username = $_POST['Username'];
                    $Password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
                    $Email = $_POST['Email'];
                    $NamaLengkap = $_POST['NamaLengkap'];
                    $Alamat = $_POST['Alamat'];
                    
                
                        //memanggil method register
                        $login->register($Username, $Password, $Email, $NamaLengkap, $Alamat);
                        $login->isUsernameExists($Username);
                        if ($login) {
                            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/login.php'</script>";
                        } else {
                            echo "<script>alert('Data Gagal Ditambah');window.location='../views/tampil_data.php'</script>";
                        }
                       
                    }
                    // elseif ($_GET['aksi'] == 'update') {
                    //     $result = $login->UpdateProfil($id, $nama, $jk, $alamat);
                    //     if ($result) {
                    //         echo "<script>alert('Data Berhasil Diubah');window.location='../views/tampil_data.php'</script>";
                    //     } else {
                    //         echo "<script>alert('Data Gagal Diubah');window.location='../views/tampil_data.php'</script>";
                    //     }
                    // }
            }            
           
                    elseif ($_GET['aksi'] == 'login') {
                    $Username = $_POST['Username'];
                    $Password = $_POST['Password'];
                    // echo var_dump($Username, $Password);
                    $login->login($Username, $Password);

                    // if ($login) {
                    //     header("Location: ../views/home.php");
                    //     exit;
                    // }
                    // echo 'gagal';
                    
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
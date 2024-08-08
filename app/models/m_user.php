<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//memanggil file koneksi kedalam file c_login
include_once '../controllers/conn.php';

//membuat kelas dari file C_login, harus sama dengan nama file
class c_login{

    //membuat method atau fungsi untuk menampung data dari form register yang di input oleh user kedalam tabel user
    public function register($Username, $Password, $Email, $NamaLengkap,  $Alamat){
        
        // membuat variabel yang bertipe data objek dari kelas c_koneksi
        $conn = new database();

        // perintah untuk memasukan data register kedalam tabel users
        $sql = "INSERT INTO user VALUES (NULL, '$Username', '$Password', '$Email', '$NamaLengkap',  '$Alamat')";

        //harjon menjalankan perintah $sql dengan memiliki 2 parameter, 1. koneksi, 2.perintahnya
        $result = mysqli_query($conn->koneksi, $sql);
		return $result;
        //mengecek kondisi data berhasil atau tidak
        if ($result) {
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/login.php'</script>";
        } else {
            echo "<script>alert('Data Gagal Ditambah');window.location='../views/register.php'</script>";
        }
        
    }
    public function isUsernameExists($Username) {
        $conn = new database();
        
        // Menggunakan prepared statement untuk mencegah SQL injection
        $stmt = $conn->koneksi->prepare("SELECT COUNT(*) as count FROM user WHERE Username = ?");
        $stmt->bind_param("s", $Username);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        
        // Jika count lebih dari 0, username sudah ada
        $stmt->close();
        return $count > 0;
    }


    //fungsi  mengatur proses identifikasi login
    public function login($Username=null, $Password=null){
        
        $conn = new database();
        //untuk mengecek apakah tombol login di tekan, jika di tekan akan menjalankan perintah dibawahnya
        if (isset($_POST['login'])) {
            
            //menampilkan semua data dari tabel user berdasarkan username dari user
            $sql = "SELECT * FROM user WHERE Username  = '$Username' AND Password = '$Password'";

            $result = mysqli_query($conn->koneksi, $sql);
            return $result;
            //mengecek kondisi data berhasil atau tidak
            if ($result) {
                echo "<script>alert(Login Berhasil');window.location='../views/home.php'</script>";
            } else {
                echo "<script>alert('Data Gagal Ditambah');window.location='../views/login.php'</script>";
            }

            //merubah data menjadi array asosiatif
            $data = mysqli_fetch_assoc($result);
            if ($data) {
                
                //untuk mengecek password dari form login dan password dari tabel user
                if (password_verify($Password, $data['Password'])) {
                    header("Location: ../views/home.php");
                    exit;
                }
            }
        }
    }

    public function logout(){

        //menghentikan session
        session_destroy();
      

        echo "<script>
        alert('Logout berhasil');
        window.location.href='../views/login.php';
      </script>";
        exit;
    }

    
}

?>
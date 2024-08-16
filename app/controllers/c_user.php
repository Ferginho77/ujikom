<?php
include_once './app/controllers/conn.php';

class C_user
{

    public function register($data)
    {
        $Username = $data['Username'];
        $Password = password_hash($data['Password'], PASSWORD_BCRYPT);
        $Email = $data['Email'];
        $NamaLengkap = $data['NamaLengkap'];
        $Alamat = $data['Alamat'];
        $conn = new database();
        $sql = "INSERT INTO user VALUES (NULL, '$Username', '$Password', '$Email', '$NamaLengkap',  '$Alamat')";
        $result = mysqli_query($conn->koneksi, $sql);
        if ($result) {
            echo "<script>";
            echo 'alert("Berhasil Daftar.");';
            echo 'window.location.href = "index.php?page=login";';
            echo '</script>';
        } else {
            echo "<script>";
            echo 'alert("Gagal.");';
            echo 'window.location.href = "index.php?page=register";';
            echo '</script>';
        }
    }

    public function login($Username = null, $Password = null)
    {

        $conn = new database();
        $sql = "SELECT * FROM user WHERE Username  = '$Username'";
        $result = mysqli_query($conn->koneksi, $sql);
        $data = mysqli_fetch_assoc($result);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                if (password_verify($Password, $data['Password'])) {
                $_SESSION["data"] = $data;
                    echo "<script>
                alert('Password Benar');
                window.location.href='index.php?page=home';
                </script>";
                } else {
                    echo "<script>
                alert('Password Salah');
                window.location.href='index.php?page=login';
                </script>";
                }
            }
        }
    }

    public function UpdateProfil($data){
        $UserId = $data['UserId'];
        $Username = $data['Username'];
        $Email = $data['Email'];
        $NamaLengkap = $data['NamaLengkap'];
        $Alamat = $data['Alamat'];
        $conn = new database();
        $sql = "UPDATE user SET Username='$Username', Email='$Email', NamaLengkap='$NamaLengkap', Alamat='$Alamat' WHERE UserId = '$UserId'";
        $result = mysqli_query($conn->koneksi, $sql);
        if ($result) {
            echo "<script>";
            echo 'alert("Berhasil Daftar.");';
            echo 'window.location.href = "index.php?page=profile";';
            echo '</script>';
        } else {
            echo "<script>";
            echo 'alert("Gagal.");';
            echo 'window.location.href = "index.php?page=register";';
            echo '</script>';
        }
    }


}

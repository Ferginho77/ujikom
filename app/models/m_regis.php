<?php
    include_once'../controllers/conn.php';
class Register {
    function input( $Username, $Password, $Email, $NamaLengkap,  $Alamat)
	{
		$conn = new database();
		$sql = "INSERT INTO user VALUES ('$Username', '$Password', '$Email', '$NamaLengkap',  '$Alamat')";
		$result = mysqli_query($conn->koneksi, $sql);
		return $result;
	}
}
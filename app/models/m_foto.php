<?php
session_start();
include_once '../controllers/conn.php';
 
class Foto {
    public function TambahFoto($JudulFoto, $DeskripsiFoto, $TanggalUnggah, $LokasiFile,  $AlbumId, $UserId) {
     $conn = new database();
     $sql = "INSERT INTO foto VALUES (NULL, '$JudulFoto', '$DeskripsiFoto', '$TanggalUnggah', '$LokasiFile',  '$AlbumId', '$UserId')";

     $query = mysqli_query($conn->conn(), $sql);   
    }
}
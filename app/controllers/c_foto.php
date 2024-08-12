<?php 

include_once '../models/m_foto.php';

$foto = new Foto();

if ($_GET['aksi'] == 'tambah') {

    $JudulFoto = $_POST['JudulFoto'];
    $DeskripsiFoto = $_POST['DeskripsiFoto'];
    $TanggalUnggah = $_POST['TanggalUnggah'];
    $LokasiFile = $_POST['LokasiFile'];
    $AlbumId = $_POST['AlbumId'];
    
    $foto->TambahFoto($JudulFoto, $DeskripsiFoto, $TanggalUnggah, $LokasiFile,  $AlbumId, $UserId);
    if ($foto) {
        echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/home.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambah');window.location='../views/tampil_data.php'</script>";
    }
}
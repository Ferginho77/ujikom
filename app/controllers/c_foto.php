<?php 

include_once '../models/m_foto.php';

$foto = new Foto();

if (isset($_POST['tambah']) || isset($_POST['update'])) {
    $JudulFoto = $_POST['JudulFoto'];
    $DeskripsiFoto = $_POST['DeskripsiFoto'];
    $TanggalUnggah = $_POST['TanggalUnggah'];
    $LokasiFile = $_POST['LokasiFile'];
    $AlbumId = $_POST['AlbumId'];

    if ($_GET['aksi'] == 'tambah') {
        
        $foto->TambahFoto($JudulFoto, $DeskripsiFoto, $TanggalUnggah, $LokasiFile,  $AlbumId, $UserId);
        if ($foto) {
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/home.php'</script>";
        } else {
            echo "<script>alert('Data Gagal Ditambah');window.location='../views/uploads.php'</script>";
        }
        
    }elseif ($_GET['aksi'] == 'update') {
        $result = $foto->UpdateFoto($JudulFoto, $DeskripsiFoto, $TanggalUnggah, $LokasiFile,  $AlbumId, $UserId);
        if ($result) {
            echo "<script>alert('Data Berhasil Diubah');window.location='../views/home.php'</script>";
        } else {
            echo "<script>alert('Data Gagal Diubah');window.location='../views/uploads.php'</script>";
        }
    }else {
        if ($_GET['aksi'] == 'hapus') {
            $FotoId = $_GET['fotoId'];
            $result = $foto->hapus($FotoId);
    
            if ($result) {
                echo "<script>alert('Data Berhasil Dihapus');window.location='../views/tampil_data.php'</script>";
            } else {
                echo "<script>alert('Data Gagal Dihapus');window.location='../views/tampil_data.php'</script>";
            }
        }
    }

}
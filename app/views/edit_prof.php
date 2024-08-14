<?php require_once'../../assets/layouts/navbar.php';
session_start()
?>
 <a class="btn text-white bg-danger" href="profile.php">Kembali</a>
     
<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    Edit Profil Anda
                </div>
                <div class="card-body">
                    <form action="../controllers/c_user.php?aksi=update" class="p-2">
                    <input type="hidden" name="UserId" value="<?= $_SESSION['data']['UserId']?>">
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input class="form-control" type="text" name="Username" value="<?= $_SESSION['data']['Username']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="text" name="Email" value="<?= $_SESSION['data']['Email']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input class="form-control" type="text" name="NamaLengkap" value="<?= $_SESSION['data']['NamaLengkap']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input class="form-control" type="text" name="Alamat" value="<?= $_SESSION['data']['Alamat']?>">
                        </div>
                        <button type="submit" name="update" class="btn btn-outline-info mt-3">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
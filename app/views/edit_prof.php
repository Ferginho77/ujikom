<?php foreach ($login->tampil_data_id($_GET['UserId']) as $login) :  ?>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="UserId" value="<?= $siswa->UserId ?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Siswa" name="nama_siswa" value="<?= $siswa->nama_siswa ?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk_siswa" id="flexRadioDefault1" value="laki-laki" <?= ($siswa->jk_siswa == 'laki-laki') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk_siswa" id="flexRadioDefault2" value="perempuan" <?= ($siswa->jk_siswa == 'perempuan') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat_siswa"><?= $siswa->alamat_siswa ?></textarea>
                        </div>
<?php endforeach ?>
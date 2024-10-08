<?php
require_once'./assets/layouts/navbar.php'
?>
<main class="mt-3">
<h1> Selamat Datang <?= ucwords($_SESSION['data']['Username']); ?></h1>
<section>
    
    <div class="card">
        <div class="card-body">
            <div class="row tm-mb-90 tm-gallery">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                            <figure class="effect-ming tm-video-item">
                                <img src="../../assets/img/IDN-2.png" alt="Image" class="img-fluid" width="225px" height="250px" >
                                <figcaption class="d-flex align-items-center justify-content-center">
                                    <h5><?= $_SESSION['data']['JudulFoto']?></h5>
                                    <a href="photo-detail.php">Lihat Detail Foto</a>
                                </figcaption>                    
                            </figure>
                            <div class="d-flex justify-content-between tm-text-gray">
                                <span>9,906 views</span>
                            </div>
                        </div>
                </div>
        </div>
    </div>
    
</section>
</main>

<?php require_once'../../assets/layouts/navbar.php';
session_start()
?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 mt-5 pt-5">
            <div class="row z-depth-3">
                <div class="col-sm-4 bg-info rounded-left">
                    <div class="card-block text-center text-white">
                    <i class="far fa-user mt-5"></i>
                    <h4><?php  $_SESSION['Username']?></h4>
                    </div>
                </div>
                <div class="col-sm-8">

                </div>
            </div>
        </div>

    </div>
</div>
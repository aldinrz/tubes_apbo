<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- online bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    
    <!-- offline bootstrap -->
    <link rel="stylesheet" href="../../bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap-5.1.3-dist/css/dadangcor.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

    <!-- javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title><?= $title; ?></title>
</head>
<body>

<div class="d-flex" id="wrapper">
    <!-- sidebar -->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">
            <a href="<?= base_url('/');?>">Dadang Cornering</a>
        </div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="<?= base_url('/customer');?>">Home</a>
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="<?= base_url('/customer/booking');?>">Booking Service</a>
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="<?= base_url('/customer/pembayaran');?>">Pembayaran</a>
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="<?= base_url('/customer/spareparts');?>">Spareparts</a>
        </div>
    </div>

    <!-- page content wrapper -->
    <div id="page-content-wrapper">
        <!-- Top navigation / navbar / header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <button class="btn btn-primary" id="sidebarToggle">///</button>

                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="collapse-toggler-icon"></span>
                </button> -->

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $user_status; ?></a>
                    <div class="dropdown-menu dropdown-menu-end pr-8" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('/customer/profil');?>">Profil</a>
                        <a class="dropdown-item" href="#!">Logout</a>
                            <!-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!" disabled>Something else here</a> 
                            </div>  -->
                </div>
            </div>
        </nav>

        <div class="container-fluid p-3">


        <?= $this->renderSection('content'); ?>

        </div>
    </div>
</div>

<!-- offline js -->
<script src="../../bootstrap-5.1.3-dist/js/dadangcor.js"></script>

<!-- online js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

</body>
</html>
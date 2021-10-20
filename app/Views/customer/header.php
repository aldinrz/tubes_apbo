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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">


    <title>Page</title>
</head>
<body>

<!-- <div class="container-fluid p-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">DADANG CORNERING</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/customer">Home</a>
            <a class="nav-link" href="/customer/pages/booking">Booking Service</a>
            <a class="nav-link" href="/customer/pages/change_password">Ubah Password</a> 
            <a class="nav-link" href="/customer/pages/pembayaran">Menu Pembayaran</a>
            <a class="nav-link" href="/customer/pages/profil">Profil</a> 
            <a class="nav-link" href="/customer/pages/registration">Registrasi</a> 
            <a class="nav-link" href="/customer/pages/spareparts">List Spareparts</a>

        </div>
        </div>
    </div>
    </nav>
</div>


<div class="container-fluid" id="poppins">

 -->

 <div class="d-flex" id="wrapper">
    <!-- sidebar -->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-llight">
            Dadang Cornering
        </div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="/customer">Home</a>
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="/customer/pages/booking">Booking Service</a>
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="/customer/pages/pembayaran">Pembayaran</a>
            <a class="list-group-item list-group-item-action list-group item-light p-3" href="/customer/pages/spareparts">Data Spareparts</a>
        </div>
    </div>

    <!-- page content wrapper -->
    <div id="page-content-wrapper">
        <!-- Top navigation / navbar / header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <button class="btn btn-primary" id="sidebarToggle">///</button>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="collapse-toggler-icon">Admin</span>
                </button>
                
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <a class="dropdown-item" href="#!">Profil</a>
                        <a class="dropdown-item" href="#!">Logout</a>
                        <!-- <li class="nav-item active"><a class="nav-link" href="#!">Profil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Logout</a></li>
                        <li class="nav-item dropdown"> -->
                        <!-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                            <div class="dropdown-menu dropdown-menu-end pr-8" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#!">Profil</a>
                                <a class="dropdown-item" href="#!">Logout</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a> 
                            </div> 
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid p-3">
<?php
    if(isset($_SESSION['title']))
    {
        $title = $_SESSION['title'];
    }
    else
    {
        $title ="runcycle";
    }
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $title ?></title>

    <link rel="stylesheet" href="<?php echo base_url; ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>bootstrap-icons/bootstrap-icons.css">

</head>

<body class="v-100">

    <!-- awal navbar -->
    <nav class="navbar navbar-expand-lg bg bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="#">runcycle</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="#"> <i class="bi bi-house"></i> Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href=""> <i class="bi bi-houses"></i> Dealer</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">stok</a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">sepeda anak</a></li>
                            <li><a class="dropdown-item" href="#">sepeda listrik</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">semua sepeda</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="cari tipe atau kategori" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">cari</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- akir navbar -->
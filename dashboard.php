<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- DATA TABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" crossorigin="anonymous">
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- BOOSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- DATA AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Olympus Bibliotheca</title>
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">
  </head>
  <body>
    <header>
    <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container" >
        <a class="navbar-brand" href="dashboard.php"><i class="bi bi-book-half"></i> <i>Olympus</i> Bibliotheca</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="dashboard.php">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  Menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="view/inputBuku.php">Input Buku</a></li>
                  <li><a class="dropdown-item" href="view/daftarBuku.php">Daftar Buku</a></li>
                </ul>
              </li>
              
          </ul>
          <form class="d-flex">
              <ul class="nav navbar-expand-lg justify-content-end ">
                  <li class="nav-item dropdown">
                  <li class="nav-right">
                      <a class="nav-link btn btn-secondary" aria-current="page" href="logout.php" style="color:white;"onclick="return confirm('Anda Yakin Ingin Keluar?')"><i class="bi bi-box-arrow-left"></i>  Logout</a>
                  </li>
                  </li>
              </ul>
            </form>
          </div>
        </div>
      </nav>
    <!-- PENUTUP NAVBAR -->
    </header>
    
    <!-- Body -->
    <main class="container my-5">
      <div class="jumbotron bg-light py-2 px-4 border rounded-1" data-aos="fade-down">
        <h1 class="display-4">Hello, Olyms Fam</b></h1>
        <p class="lead">Selamat Datang di <b>Olympus Bibliotheca</b>. Temukan Berbagai Macam Buku Menarik Khususnya Buku-Buku Mitologi Yang Penuh Misteri.</p>  
      </div>

      <div class="row my-3">
        <div class="col-md-6" data-aos="fade-right">
          <div class="bg-white row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Olyms Liber Initus</strong>
              <h3 class="mb-0">Input Buku</h3>
              <p class="card-text mb-auto">Rekomendasikan buku menarik yang kamu baca agar para <i>Olyms Fam</i> ikut merasakan duniamu.</p>
              <a href="view/inputBuku.php" class="stretched-link">Learn More</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
              <img src="assets/img/god2.gif" alt="" class="bd-placeholder-img rounded-start" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            </div>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <div class="bg-white row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success">Olyms Liber List</strong>
              <h3 class="mb-0">Daftar Buku</h3>
              <p class="mb-auto">Temukan banyak buku menarik di <i>Olympus Bibliotheca</i>. Dan rasakan sensasi kedihupan para Dewa Olympus.</p>
              <a href="view/daftarBuku.php" class="stretched-link">Learn More</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
              <img src="assets/img/god3.gif" alt="" class="bd-placeholder-img rounded-start" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Penutup Body -->

    <!-- Footer -->
    <footer class="py-2 pt-4 mt-4 bg-light">
      <p class="text-center text-muted"><b>&copy; 2021 Olympus Bibliotheca, Inc</b></p>
    </footer>
    <!-- Penutup Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Data Table -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- Data AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(document).ready(function() {
            $('#tableAll').DataTable();
        } );

        AOS.init({
          delay:500,
          duration:1000
        });
    </script>
    <!-- <script>
      AOS.init({
        delay:500
      });
    </script> -->
  </body>
</html>
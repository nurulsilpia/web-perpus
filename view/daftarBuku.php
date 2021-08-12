<?php
include '../config/koneksi.php';
include '../library/controller.php';

    $go = new controller();
    $tabel = "tbl_buku";
    @$field = array('kode_buku'=>$_POST['kode_buku'],
                'judul'=>$_POST['judul'],
                'penulis'=>$_POST['penulis'],
                'penerbit'=>$_POST['penerbit']);
    $redirect = "?menu=semua_data_buku";
    @$where = "kode_buku= $_GET[id]";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Daftar Buku</title>
    <link rel="shortcut icon" href="../assets/img/icon.png" type="image/x-icon">
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container" >
      <a class="navbar-brand" href="../dashboard.php"><i class="bi bi-book-half"></i> <i>Olympus</i> Bibliotheca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../dashboard.php">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                Menu
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="inputBuku.php">Input Buku</a></li>
                <li><a class="dropdown-item" href="daftarBuku.php">Daftar Buku</a></li>
              </ul>
            </li>
            
        </ul>
        <form class="d-flex">
            <ul class="nav navbar-expand-lg justify-content-end ">
                <li class="nav-item dropdown">
                <li class="nav-right">
                    <a class="nav-link btn btn-secondary" aria-current="page" href="../index.php" style="color:white;"onclick="return confirm('Anda Yakin Ingin Keluar?')"><i class="bi bi-box-arrow-left"></i>  Logout</a>
                </li>
                </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
    <!-- PENUTUP NAVBAR -->

    <div class="container my-5">
      <div class="card" data-aos="zoom-in">
        <div class="card-header">
           <b>Daftar Buku</b>
        </div>
        <div class="card-body">
          <div style="padding:10px;">
              <form class="d-flex justify-content-start">
                  <a href="?menu=input_buku" class="btn btn-outline-success" type="submit">Refresh</a>
              </form>
              <div class="table-responsive mt-3">
                  <table align="center" border="1" class="mt-4 table table-striped table-hover bg-white text-center" id="tableAll">
                      <thead>
                          <tr>
                              <th>Kode Buku</th>
                              <th>Judul Buku</th>
                              <th>Penulis</th>
                              <th>Penerbit</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                              $data = $go->tampil($con, $tabel);
                              $no = 0;
                              if($data==""){
                                  echo "<tr><td colspan='4'>No Data</td></tr>";
                              }else{
                              foreach($data as $r){
                              $no++
                          ?>
                          <tr>
                              <td><?php echo $r['kode_buku']?></td>
                              <td><?php echo $r['judul']?></td>
                              <td><?php echo $r['pengarang']?></td>
                              <td><?php echo $r['penerbit']?></td>
                          </tr>
                          <?php } } ?>
                      </tbody>
                  </table>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Penutup Body -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Data AOS
        AOS.init({
          delay:500
        });

        // Data Table
        $(document).ready(function() {
            $('#tableAll').DataTable();
        } );
    </script>
  </body>
</html>

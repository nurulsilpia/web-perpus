<?php 
    include "config/koneksi.php";
    include "library/controller.php";

    $go = new controller();

    $tabel = "tbl_login";
    @$username = $_POST['user'];
    @$password = $_POST['pass'];
    $redirect = "dashboard.php";

    if(isset($_POST['login'])){
        $go->login($con, $tabel, $username, $password, $redirect);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Login Perpustakaan</title>
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">
  </head>
  <body>

    <div class="container mt-4">
        <div class="d-flex justify-content-center p-2 bd-highlight position-absolute top-50 start-50 translate-middle" >
            <div>
            <center>
                <img class="d-flex justify-content-center pt-2" src="assets/img/login.svg" alt="login" height="200">
            </center>
            
            <div id="emailHelp" class="form-text text-center">We'll never share your account with anyone else.</div>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username :</label>
                    <input type="text" name="user" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password :</label>
                    <input type="password" name="pass" class="form-control" id="showPass" required>
                    <input type="checkbox" onclick="myFunction()"> Show Password
                </div>
        
                <div class="d-grid gap-2 mb-2 pt-3">
                    <button class="btn btn-primary btn-block type="submit" name="login" value="LOGIN">Login</button>
                    <p class="mt-3 text-muted text-center">&copy; 2021-<?= date('Y') ?></p>
                </div>
            </form>
            </div>
        </div>

    <!-- SHOW PASSWORD -->
    <script>
        function myFunction() {
            var x = document.getElementById("showPass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);

session_destroy();
echo "<script>alert('Anda Berhasil Logout');document.location='index.php'</script>";
?>

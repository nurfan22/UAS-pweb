<?php
session_start();
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bukawarung</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body > 
   <header>
   <div class="container">
   <h1><a href="dasboard.php">Bukawarung</a></h1>
   <ul>
   <li><a href="dasboard.php">Dashboard</a></li>
   <li><a href="profil.php">Profil</a></li>
   <li><a href="data-kategori.php">Data Kategori</a></li>
   <li><a href="data-produk.php">Data Produk</a></li>
   <li><a href="keluar.php">Logout</a></li>
   </ul>
   </div>
   </header>
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name?> Di Toko Online</h4>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <small>Copyright &copy; 2020-Bukawarung</small>
        </div>
    </div>
</body>
</html>
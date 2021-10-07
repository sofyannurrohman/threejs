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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokodigital</title>
    <link rel='stylesheet' type="text/css" href="css/style.css">
 

</head>
<body>
    <!---Header-->
    <header>
      <div class="container">
        <h1><a href="dasboard.php">TokoDigital</a></h1>
         <ul>
           <li><a href="dasboard.php">Dashboard</a></li>
           <li><a href="profil.php">Profile</a></li>
            <li><a href="kategori.php">Kategori</a></li>
             <li><a href="produk.php">Produk</a></li>
             <li><a href="logout.php">Logout</a></li>
        
        </ul>
     </div>
</header>
<!--Content-->

  <div class="container">
    <h3>Dashboard</h3>
    <div class="box">
      <h4>Selamat Datang <?php echo $_SESSION['a_global']->name_admin?> di TokoDigital</h4>
    </div>
  </div>

<!---footer-->
    <footer>
      <div class="container">
        <small>
          Copyright &copy; 2021 - TokoDigital.        </small>
      </div>
    </footer>
</body>
</html>

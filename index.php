<?php
  require'function.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Tyce Warp Cloth</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/font-awesome-reboot.min.css.map">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="stylesheet" href="css/css-laen.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
	<style>
		
	</style>

  </head>
  <body>
<!-- bagian navbar -->
    <header class="header">
      <div class="container-fluid">
        <div class="row navbar">
          <div class="col-lg-3">
            <a href="indek.html" class="navbar-brand header__logo" id="logo">tyce</a>
          </div>
          <div class="col-lg-6 offset-lg-3 menu_navbar">
            <nav class="header__menu menu-mobile">
              <ul>
                <li><a class="menu_login" href="">login</a></li>
                <!-- <li><a href=""><i class="bi bi-grid ikon_menu_expand"></i></a></li> -->
                <li><a href=""><span class="material-icons">view_agenda</span><!--<img src="img/icon/list.svg" alt="">--></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
<!-- akhir bagian navbar -->
    
  <div class="body">
<!-- bagian utama -->
      <div class="bagian-utama">
        <div class="container konten-artikel">
          <div class="row judul-konten">
            <h3>ini judul ny</h3>
          </div>
          <div class="row isi-konten">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, perspiciatis deleniti! Atque, neque qui distinctio mollitia doloribus delectus beatae possimus molestiae temporibus, unde consequatur, quis reprehenderit at nulla sed facilis.</p>
          </div>
          <div class="row ecommers-konten">
            <div class="col-4"><a class="thumbnail" href=""><img class="tokopedia" src="img/ecommers/logo-tokopedia-15.png" alt=""></a></div>
            <div class="col-4"><a class="thumbnail" href=""><img class="lazada" src="img/ecommers/lazada-icon.png" alt=""></a></div>
            <div class="col-4"><a class="thumbnail" href=""><img class="shopee" src="img/ecommers/shopee-icon-png-5.png" alt=""></a></div>  
          </div>
        </div>
        <div class="container gambar-artikel">
        </div>
        <div class="iklan-konten"></div>
      </div>
<!-- akhir bagian utama -->

<!-- bagian uji coba konten -->
    <p>
    <!-- <?php $kolom1 = mysqli_fetch_array($result1); echo $kolom1["judul"]?> -->
     </p>
    <?php while($kolom1 = mysqli_fetch_assoc($result1)) : ?>
    <div>
      <p><?php echo $kolom1["header"]?></p>
      <ul>
        <li><?php echo $kolom1["isi"]?></li> 
      </ul>
    </div>
    <?php endwhile; ?>
<!-- akhir bagian uji coba konten -->

<!-- bagian footer -->
      <footer class="text-center text-lg-start bg-dark text-muted">
        <section class="d-flex justify-content-lg-between p-4">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 offset-lg-6 copyright">
               <a href=""> </a>
              </div>
              <div class="col-lg-3">
                <a href="">hai</a>
              </div>
            </div>
          </div>
        </section>
      </footer>
<!-- akhir bagian footer -->
    </div>

     <!-- <nav class="navbar navbar-expand-lg">
         <div class="container-fluid" style="background-color: black; opacity: 0.5;">
            <p style="color:blueviolet">hai cantik</p>
         </div>
     </nav> -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <!-- <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>    
    <script src="js/smoothscroll.js"></script>    
    <script src="js/jquery.slicknav.js"></script>     
    <script src="js/wow.js"></script>   
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script> -->
    <script src="js/js-laen.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script>
		
	</script>
  </body>
</html>

<!-- ========================================================================================================
       contoh pembatas
   =========================================================================================================-->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

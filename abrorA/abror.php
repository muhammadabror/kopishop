<?php
    require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>KOPI SHOP</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">KopiShop</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="abror.php">Home</a></li>
        <li><a href="offer.php">Offer</a></li>
        <li><a href="about us.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">KOPI BERKUALITAS</h1>
        <div class="row center">
          <h5 class="header col s12 light">"Merupakan tempat untuk mencobakan rasa baru kopi dalam tema DrinkKOPI dan HotKOPI"</h5>
        </div>
        <div class="row center">
          
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/kopi1.jpg" alt="Unsplashed background img 1"></div>
  </div>



<div class="container">
  <div class="row">
    <div class="col s12 center">
      <h3<i class="mdi-content-send brown-text"></i></h3>
      <h4>Offers</h4>

      
      <?php 
      $makanan =query ("SELECT * FROM makanan");
      foreach ($makanan as $row ) : 
       ?>
     <div class="">
        <div class="row col s3">
        <div class="col">
            <div class="card">
              <div class="card-image">
                <img src="admin/img/<?php echo $row ['gambar_makanan']; ?>">
                <span class="card-title">Drink Kopi</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
              </div>
              <div class="card-content">
                <p><h4><?php echo $row ['nama_makanan']; ?></h4></p>
                <p><?php echo $row ['deskripsi_makanan']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
         <?php endforeach; ?>
    
      
    </div>
  </div>
</div>

    

  

    </div>
   </div> 


  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>

          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
$conn = mysqli_connect("localhost","root","","kopishop");
?>
	<head>
		<title>KOPISHOP</title>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	</head>
	<body>
		<nav>
		<div class="nav-wrapper teal lig">
			
			<div class="container">
			<a href="" class="brandlogo" style="font-size: 25px; font-family:Arial;">Administrator</a>
			<a href="#" class="sidenav-trigger" data-target="slide-out"><i class="material-icons">menu</i></a>
			<ul class="hide-on-med-and-down right teal lighten-1">
				<li><a href="<?="?p=makanan"; ?>">DrinkKOPI</a></li>
				<li><a href="<?= "?p=produk";?>">HotKOPI</a></li>
				<li><a href="logout.php">Logout</a></li>

				<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    			<script>
    			const sideNav = document.querySelectorAll('.sidenav');
    			M.Sidenav.init(sideNav);
    			</script>
			
			</ul>
			</div>
		
<?php
  if($_GET["p"] == "logout"){
    include "logout.php";
  }else if($_GET["p"] == "produk"){
    include "produk.php";
  }else if($_GET["p"] == "produkadd"){
  	include"produkadd.php";
  }else if($_GET["p"]== "produkdel"){
  	include "produkdel.php";
  }else if($_GET["p"] =="produkedit"){
  	include "produkedit.php";
  }elseif($_GET["p"]=="makanan"){
  	include "makanan.php";
  }elseif ($_GET["p"]=="makananadd") {
  	include "makananadd";
  }else if($_GET["p"]== "makanandel"){
  	include "makanandel.php";
  }else if($_GET["p"] =="makananedit"){
  	include "makananedit.php";
  }else{
  	include "home.php";
  }
 ?>
 </div>
	</nav>
 </body>
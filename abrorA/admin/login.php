<?php
	session_start();

	if (isset($_SESSION["login"])) {
		header("Location:index.php");
	}
	
	require 'functions.php';
	if(isset($_POST["login"])){
		$username=$_POST["username"];
		$password=$_POST["password"];

		$result = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username'");

		if(mysqli_num_rows($result)===1){
			$row = mysqli_fetch_assoc($result);
			$_SESSION["login"]=true;
			header("Location:index.php");
			exit; 	
		}
		$error = true;
	}
		
?>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<div id="login">
<form name="form1" method="post" action="" enctype="multipart/form-data">
<div class="row">
  <div class="col s12 m4 offset-m4 ">
    <div class="card z-depth-4" style="height: auto;">
      <div class="card-action teal lighten-1 white-text">
        <center><h5>Login</h5></center>
      </div>
      
      <div class="card-content">
       <div class="input-field">
        <i class="material-icons prefix">account_circle</i>
         <label for="username">Username</label>
         <input type="text" id="username" name="username">
       </div><br>
        
      <div class="input-field">
          <i class="material-icons prefix">lock</i>
          <label for="password">Password</label>
          <input type="password" id="password" name="password">
       </div>
       
       <div class="form-field">
          <button name="login" class="btn-large waves-effect waves-dark" style="width: 100%">Login</button>
       </div> 
      </div>
    </div>
  </div>
</form>
</div>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="restyle.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans+JP:wght@700&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="jumbotron" style="margin-bottom: 0px;">
<a href="../index.php"><h1>Pehmonen</h1></a>
<p>Tervetuloa Suomen parhaimpaan pehmolelukauppaan!</p>
</div>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">

   <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="collapse_target">

  <a class="navbar-brand"><img src="../logo123.jpg"></a>
  

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../index.php">Koti</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../products.php">Tuotteet</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../about.php">Tietoa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../contact.php">Yhteydenotto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Kirjaudu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php" hidden>Kirjaudu ulos</a>
    </li>
  </ul>
   </div>
</nav>
 

<?php
require('db.php');
session_start();

if (isset($_POST['username'])){
       
	$username = stripslashes($_REQUEST['username']);
        
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die('mysql_error'());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
          
	    header("Location: ../index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Kirjautuminen</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Käyttäjätunnus" required />
<input type="password" name="password" placeholder="Salasana" required />
<input name="submit" type="submit" value="Kirjaudu" />
</form>
<p>Et ole rekisteröitynyt? <a href='register.php'>Rekisteröidy tästä</a></p>
</div>
<?php } ?>

<footer class="page-footer font-small blue fixed-bottom">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="index.php"> Pehmonen</a>
  </div>
</body>
</html>
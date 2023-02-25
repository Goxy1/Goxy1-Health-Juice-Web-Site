<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet"> 
    <link href="css/stil.css" rel="stylesheet">
    <link href="css/LogInButton.css" rel="stylesheet">
</head>
<body>
    <div class = "container">
          <?php include "php/header.php";?>
       
          <!-- NAVBAR uzet sa bootstrap-a -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-apple" aria-hidden="true"></span> Pocetna strana</a>
              </div>
        
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="Onama.php">O nama</a></li>
                  <li><a href="galerija.php">Galerija</a></li>  
                </ul>
          
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="kontakt.php">Kontakt</a></li>
                  <li><a href="registracija.php">Registracija</a></li>
                  <li class="active"><a href="Login.php">Log in</a>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        
        <form name="mojaForma" action="LogIn.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="page-header">
			          <h2>Ulogujte se kao korisnik</h2>
		          </div>
		          <div class="form-group">
			          <label for="email1">Email adresa</label>
			          <input type="email" name="email1" class="form-control" id="email1" placeholder="Unesite e-mail adresu">
		          </div>
		         <div class="form-group">
			          <label for="password3">Password</label>
			          <input type="password" name="password3" class="form-control" id="password3" placeholder="Unesite Password">
		          </div>
              <div class="form-group">
                <label for="show-password">Show Password:</label>
                <input type="checkbox" id="show-password" onclick="showPassword()"><br>
              </div>
		          <button type="submit" name="submit">Ulogujte se korisnik</button>
            </div>

            <div class="col-md-6">
              <div class="page-header">
			          <h2>Ulogujte se kao administrator</h2>
		          </div>
		          <div class="form-group">
			          <label for="email2">Email adresa</label>
			          <input type="email" class="form-control" name="email2" id="email2" placeholder="Unesite e-mail adresu">
		          </div>
		          <div class="form-group">
			          <label for="password4">Password</label>
			          <input type="password" class="form-control" name="password4" id="password4" placeholder="Unesite Password">
		          </div>
              <div class="form-group">
                <label for="show-password">Show Password:</label>
                <input type="checkbox" id="show-password" onclick="showPasswordAdmin()"><br>
              </div>
		          <button type="submit" name="submit1">Ulogujte se kao administrator</button>
            </div>         
          </div>
        </form>
      <?php include "php/LogIn.php";?>
      <?php include "php/LogInAdmin.php";?>
      <?php include "php/footer.php";?>
  </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<script>
  function showPassword(){
    var x = document.getElementById("password3"); 
    if(x.type === "password3")
    {
        x.type = "text";
    }
    else
    {
        x.type = "password3";
    }
}
</script>

<script>
  function showPasswordAdmin(){
    var x = document.getElementById("password4");
    if(x.type === "password4")
    {
        x.type = "text";
    }
    else
    {
        x.type = "password4";
    }
}
</script>
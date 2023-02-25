<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Opis strane prema uputstvima i smernicama Webmaster-a">
    <meta name="keywords" content="Upisati do 10 kljucnih reci odvojene zarezom">
    <meta name="author" content="Upisati ime i prezime autora na mejl adresu">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prodavnica</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/stil.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include "php/header.php";?>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-apple active" aria-hidden="true"></span> Pocetna strana</a>
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
            <li class="active"><a href="shop.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Prodavnica</a></li>
            <li><a href="login.php">Log in</a>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
        <?php include "php/shop.php";?>
      
        <form action="php/LogOut.php" method="post">
          <button>Izloguj se</button>
        </form>

          <?php include "php/footer.php";?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
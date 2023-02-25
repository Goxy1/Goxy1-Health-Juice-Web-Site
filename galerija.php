<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galerija</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/all.min.css" rel="stylesheet">
  <link href="css/stil.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <header>
      <div class="page-header">
        <h1><a href="index.php"><img src="img/logo.png" alt="Zastitni logo kompanije"></a> <small>Health Juice</small></h1>
      </div>
    </header>
    
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
            Početna strana</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="Onama.php">O nama</a></li>
            <li class="active"><a href="galerija.php">Galerija</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="registracija.php">Registracija</a></li>
            <li><a href="login.php">Log in</a>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="page-header">
      <h2>Galerija slika</h2>
    </div>
    <section>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
        <!-- Indicators -->
        <ol class="carousel-indicators"> <!--ol - uredjena lista-->
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        </ol>
         
        <!-- Slajder za slike -->
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox"> <!--Koristi se uglavnom za slideshow-->
          <div class="item active">
            <img src="img/slika1.jpg" alt="Naš healthy cedjeni sok od jabuke!">            
          </div>
          <div class="item">
            <img src="img/slika2.jpg" alt="Naš healthy cedjeni sok od kajsije!">  
          </div>
          <div class="item">
            <img src="img/slika3.jpg" alt="Naš healthy cedjeni sok od ananasa">
          </div>
          <div class="item">
            <img src="img/slika4.jpg" alt="Naš healthy cedjeni sok od pomorandže!">  
          </div>
          <div class="item">
            <img src="img/slika5.jpg" alt="Naš healthy cedjeni sok od jagode!">  
          </div>
          <div class="item">
            <img src="img/slika6.jpg" alt="Naš healthy cedjeni sok od borovnice!">  
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <?php include "php/footer.php";?>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Latest compiled and minified JavaScript -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
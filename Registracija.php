<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registracija</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/stil.css" rel="stylesheet">
    <link href="css/buttonSubmit.css" rel="stylesheet">
</head>
<body>
  <div class="container">

        <?php include "php/header.php";?>
          
        <!-- NAVBAR uzet sa bootstrap-a -->

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
                            <li class="active"><a href="registracija.php">Registracija</a></li>
                            <li><a href="login.php">Log in</a>
                        </ul>
                    </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    
          <?php include "php/registracija.php";?>
          <?php include "php/footer.php";?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </div>
</body>
</html>
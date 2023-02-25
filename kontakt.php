<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kontakt</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/all.min.css" rel="stylesheet">
  <link href="css/stil.css" rel="stylesheet">
  <link href="css/kontakt2.css" rel="stylesheet"> 
  <link href="css/buttonSubmit.css" rel="stylesheet">
</head>
<body>
    <div class = "container">
    <?php include "php/header.php";?>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
             Pocetna strana</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav">
              <li><a href="Onama.php">O nama</a></li>
              <li><a href="galerija.php">Galerija</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="kontakt.php">Kontakt</a></li>
              <li><a href="registracija.php">Registracija</a></li>
              <li><a href="login.php">Log in</a>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <section class="row">
      <div class="col-md-6">
        <div class="page-header">
          <h2>Kontaktirajte nas!</h2>
        </div>
        <!-- Forma za pravljenje profila -->
        <form name="mojaForma">
          <div class="form-group">
            <label for="exampleInputIme1">Ime i prezime</label>
            <input type="text" class="form-control" id="exampleInputIme1" placeholder="Unesite vaše ime i prezime" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Unesite vaš email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputTelefon1">Telefon</label>
            <input type="text" class="form-control" id="exampleInputTelefon1" placeholder="Unesite vaš broj telefona" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNaziv1">Naziv</label>
            <input type="text" class="form-control" id="exampleInputNaziv1" placeholder="Unesite vaš naslov" required>
          </div>
          <div class="form-group">
            <label for="exampleInputTextArea">Poruka</label>
            <textarea name="poruka" placeholder="Unesite vašu poruku" required></textarea>
          </div>
          <button onclick="proveriEmail();location.reload()" name="btn">
            <span>Pošalji</span>
          </button>
          
        </form>
      </div>
      <aside class="col-md-6">
        <div class="page-header">
          <h2>Naša lokacija</h2>
        </div>
        <p>Bulevar Zorana Djindjica 77, Beograd 11070</p>
        <p>+381 62 162 8619</p>
        <p>uros8920@its.edu.rs</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.2528440654282!2d20.416808351664823!3d44.81641337899612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65647889ac49%3A0x1a586892be7e41c3!2zQnVsZXZhciBab3JhbmEgxJBpbsSRacSHYSA3NywgQmVvZ3JhZA!5e0!3m2!1sen!2srs!4v1673793720258!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </aside>
    </section> 

    <?php include "php/footer.php";?>
    </div>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/provera.js"></script>
</body>
</html>
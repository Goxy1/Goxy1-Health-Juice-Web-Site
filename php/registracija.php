<!-- REGISTRACIJA -->
<div class="row">
	<div class="col-md-6"> <!-- leva strana prikaza -->
		<div class="page-header">
            <center><!--Valjda centrira -->
			<h2>Registruj se</h2>
            </center>
		</div>
 
		<br>
		<form name="mojaForma" method="post" action="registracija.php"> <!--pravimo formu-->
			<?php
 
			$mysqli = new mysqli("localhost", "root", "", "projekat");
 
			if($mysqli->error)
			{
				die("Greska:" . $mysqli->error);
			}
			$ime="";
			$prezime="";
			$email="";
			$password1="";
			$password2=""; 

 
			if(isset($_POST['dodaj']))
			{
			
				if((!$_POST['ime'])||(!$_POST['prezime']) || (!$_POST['email'])||(!$_POST['password1']) || (!$_POST['password2']))
				{
					echo "Mora biti uneto ime, prezime, email, i passwordi";      
				}
 
				else
				{
					$upit = "SELECT count(*) as brojEmail from korisnici WHERE email=?";
					$stmt = $mysqli->prepare($upit);
					$stmt->bind_param('s',$_POST['email']);
					$stmt->execute();
					$result = $stmt -> get_result();
					$row=$result->fetch_assoc();
					if($row['brojEmail']>0){
						echo '<script>alert("Uneti email je vec registrovan");</script>';
						echo '<script>window.location.href ="Registracija.php"</script>';
					}

					$upitdod = "insert into korisnici (ime, prezime, email, password1)
					VALUES ('" . $_POST['ime'] 
					. "','" . $_POST['prezime']
					. "','" . $_POST['email'] 
					. "','" . sha1($_POST['password1']) . "')";
 
 
					if ($_POST['password1']===$_POST['password2']) 
 
						$rezd=$mysqli->query($upitdod); 
 
					else $rezd=false;   
					if($rezd)
					{
						?>  
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Success!</strong> Uspešno ste se registrovali!
						</div> 
						<?php  
					} 
					else
					{
						?> 
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Danger!</strong> Neuspešno!
						</div>
						<?php
					}
				}
			}

			?>
			
			<div class="form-group">
				<label for="ime">Vaše ime</label>
				<input type="text" class="form-control" id="ime" name="ime" value="<?php echo $ime ?>" placeholder="Unesite ime" required>
			</div>
			<div class="form-group">
				<label for="prezime">Vaše prezime</label>
				<input type="text" class="form-control" id="prezime" name="prezime" value="<?php echo $prezime ?>" placeholder="Unesite prezime" required>
			</div>
			<div class="form-group">
				<label for="email">Email adresa</label>
				<input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" placeholder="Unesite e-mail adresu" required>
			</div>
			<div class="form-group">
				<label for="password1">Password</label>
				<input type="password" class="form-control" id="password1" name="password1" value="<?php echo $password1 ?>"placeholder="Unesite šifru" required>
			</div>
			<div class="form-group">
				<label for="password2">Password</label>
				<input type="password" class="form-control" id="password2" name="password2" value="<?php echo $password2 ?>" placeholder="Ponovite vašu šifru" required>
			</div>
			<button type="submit" name="dodaj" value="dodaj" class="btn btn-primary btn-lg btn-block"> Registruj se</button>
			
		</form>
    </div>
    <div class="col-md-6">
		<div class="page-header">       
			<img src="img/slika7.jpg">      
		</div>
	
</div>

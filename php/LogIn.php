<?php
    session_start();
    if(isset($_POST["email1"]) && isset($_POST["password3"])) {
        $email = $_POST["email1"];
        $password = $_POST["password3"];
        $hashps = sha1($password); 
      
        include('konekcija.php');
        
        
        $sql = "SELECT * FROM korisnici WHERE email='$email' AND password1 ='$hashps'";
        $result = $conn->query($sql);
      
        if ($result->num_rows > 0) {
            
           echo '<script>alert("Uspešno ste se ulogovali")</script>';
           echo '<script>window.location.href = "shop.php"</script>';
           
        } else {
            echo "Niste napisali ispravnu šifru ili email.Molimo pokušajte ponovo";
        }
        $conn->close();
      }
      else if(isset($_POST["email1"]) || isset($_POST["password3"])){
          echo "Unesite podatke u sva polja!";
      }

?>
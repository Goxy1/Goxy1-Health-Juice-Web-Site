<?php

    if(isset($_POST["email2"]) && isset($_POST["password4"])) { 
        $email = $_POST["email2"];
        $password = $_POST["password4"];
      
        include('konekcija.php');
        
        $sql = "SELECT * FROM glavniadmin WHERE email ='$email' AND Password2 ='$password'";
        $result = $conn->query($sql);
      
        if ($result->num_rows > 0) {
           echo '<script>alert("Uspešno ste se ulogovali kao administrator")</script>';
           echo '<script>window.location.href = "adminPage.php"</script>';
           
        } else {
            echo "Niste napisali ispravnu šifru ili email.Molimo pokušajte ponovo";
        }
        $conn->close();
      }
      else if(isset($_POST["email2"]) || isset($_POST["password4"])){
          echo "Unesite podatke u sva polja!";
      }
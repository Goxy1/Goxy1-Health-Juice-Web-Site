<?php 
    include('konekcija.php');
    $rid = ($_GET['delid']);
    $stmt = $conn->prepare("delete from korisnici where ID=?"); 
    $bind = $stmt->bind_param('i',$rid);
    $exec = $stmt->execute();
    echo "<script>alert('Obrisali ste korisnika');</script>";
    echo"<script>document.location='../adminPage.php'</script>";
?>
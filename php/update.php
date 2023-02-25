<?php
    include('konekcija.php');
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $eid = $_POST['eid'];
    $sql = "UPDATE korisnici SET ime=?, prezime=?, email=? WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt -> bind_param("sssi",$ime,$prezime,$email,$eid);
    $stmt->execute();
    if($sql)
    {
        echo"<script>alert('Uspešno ste promenili podatke');</script>";
        echo"<script>document.location='../adminPage.php'</script>";
    }
    else
    {
        echo"<script>alert('Molimo Vas unesite opet podatke');</script>";
    }
?>
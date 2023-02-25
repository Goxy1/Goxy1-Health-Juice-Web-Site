<?php 
    include('konekcija.php');
    $eid=$_GET['editid'];
    $sql = "SELECT * FROM korisnici WHERE ID=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$eid);
    $stmt->execute();
    $result=$stmt->get_result();
    while($row = $result->fetch_assoc())
    {
    ?>
    <h2><center>Update</center></h2>
    <p><center>Promenite informacije o korisniku</center></p>
    <form action="update.php" method="POST">
        <p>Ime:</p>
        <input type="text" id="ime" name="ime" value="<?php echo $row['ime'] ;?>" required>
        <p>Prezime:</p>
        <input type="text" id="prezime" name="prezime" value="<?php echo $row['prezime'] ;?>" required>
        <p>Email:</p>
        <input type="text" id="email" name="email" value="<?php echo $row['email'] ;?>" required>
        <input type="hidden" name="eid" value="<?php echo $eid;?>">
        <input type="submit" value="Submit">
    </form>
   <?php } ?>

   <style>
    form{
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    label{
        font-weight: bold;
        margin-bottom: 20px;
    }
    input[type="text"]{
        width:100%;
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
   </style>
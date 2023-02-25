<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="css/admin.css" rel="stylesheet">
</head>
<body>
    <body>
        <h1>Admin Dashboard</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th><br>
                    <th>Ime</th><br>
                    <th>Prezime</th>
                    <th>Email</th>
                    <th>Creation Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include('php/konekcija.php');
                    $sql = "SELECT * FROM korisnici"; 
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc())
                    {   
                ?>
                    <tr>
                        <td><?php echo $row['ID'] ?></td>
                        <td><?php echo $row['ime'] ?></td>
                        <td><?php echo $row['prezime'] ?></td>
                        <td><?php echo $row['email']  ?></td>
                        <td><?php echo $row['CreationDate'] ?></td>
                        <td>
                            <a href="php/read.php?viewid=<?php echo ($row['ID']);?>">Read</a>
                            <a href="php/edit.php?editid=<?php echo ($row['ID']);?>">Izmenite podatke</a>
                            <a href="php/delete.php?delid=<?php echo ($row['ID']);?>" onclick="return confirm('Da li zelite da obrisete korisnikov nalog?');" class="btn btn-danger">Obrisite</a>
                        </td>
                    </tr>
              <?php  } ?>
            </tbody>
            
        </table>
        <br>
        <button onclick="window.location.href='php/LogOut.php'">Log Out</button>
    </body>
</body>
</html>
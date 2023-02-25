<table>
    <tbody>
        <?php 
            include('konekcija.php');
            $vid=$_GET['viewid'];
            $sql = "SELECT * FROM korisnici where ID=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i",$vid);
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc())
           
            {
                ?>
                <tr>
                    <th>ID</th>
                    <td><?php echo $row['ID'] ;?></td>
                </tr>
                <tr>
                    <th>Ime</th>
                    <td><?php echo $row['ime'] ;?></td>
                </tr>
                <tr>
                    <th>Prezime</th>
                    <td><?php echo $row['prezime'] ;?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $row['email'] ;?></td>
                </tr>
                <tr>
                    <th>Creation Date</th>
                    <td><?php echo $row['CreationDate'] ;?></td>
                </tr>       
           <?php }
           ?>  
    </tbody>
</table>

<style>
    table{
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }
    table th,table td{
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
    }
    table th{
        font-weight: bold;
        background-color: #f2f2f2;
    }
    
</style>
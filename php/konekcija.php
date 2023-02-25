<?php 
        $conn = mysqli_connect("localhost","root","","projekat");
        if(mysqli_connect_errno())
        {
            echo "Niste se konektovali na bazu: ".mysqli_connect_error();
            exit;
        }
    ?>
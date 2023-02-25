<?php 
    $kolicina1 = $_POST['kolicina1'];
    $kolicina2 = $_POST['kolicina2'];
    $kolicina3 = $_POST['kolicina3'];
    $kolicina4 = $_POST['kolicina4'];
    $kolicina5 = $_POST['kolicina5'];
    $kolicina6 = $_POST['kolicina6'];
    $kolicina7 = $_POST['kolicina7'];
    $kolicina8 = $_POST['kolicina8'];
    $kolicina9 = $_POST['kolicina9'];   
    $adresa = $_POST['adresa'];
?>
<html>
    <head>
        <title>Prodavnica</title>
    </head>
    <body>
        <h1>Obavljena narudzbenica</h1>
        <h2>Fiskalni racun</h2>
        <?php 
            $date = date('H:i, jS F'); 
            echo '<p>Roba narucena u ';
            echo $date;
            echo '</p>';
            echo '<p> Kupili ste sledeće artikle: </p>';
            $ukupno = 0;
            $ukupno = $kolicina1 + $kolicina2 + $kolicina3 + $kolicina4 + $kolicina5 + $kolicina6 + $kolicina7 + $kolicina8 + $kolicina9;
            echo 'Kupljenih proizvoda: '. $ukupno . '<br>';

            if($ukupno == 0)
            {
                echo 'Ništa niste kupili!<br>';
            }
            else
            {
                if($kolicina1>0)
                {
                    echo $kolicina1 . ' Sokova od jabuke<br>';
                }
                if($kolicina2>0)
                {
                    echo $kolicina2 . ' Sokova od jabuke i kajsije<br>';
                }
                if($kolicina3>0)
                {
                    echo $kolicina3 . ' Sokova od jabuke i višnje<br>';
                }
                if($kolicina4>0)
                {
                    echo $kolicina4 . ' Sokova od jabuke i limete<br>';
                }
                if($kolicina5>0)
                {
                    echo $kolicina5 . ' Sokova od jabuke i kruške<br>';
                }
                if($kolicina6>0)
                {
                    echo $kolicina6 . ' Sokova od jabuke i šljive<br>';
                }
                if($kolicina7>0)
                {
                    echo $kolicina7 . ' Sokova od jabuke i jagode<br>';
                }
                if($kolicina8>0)
                {
                    echo $kolicina8 . ' Sokova od jabuke i đumbira<br>';
                }
                if($kolicina9>0)
                {
                    echo $kolicina9 . ' Sokova od jabuke i cvekle<br>';
                }
            }
            $ukupna_cena=0.00;
            define('CENA1', 220);
            define('CENA2', 243);
            define('CENA3', 240);
            define('CENA4', 245);
            define('CENA5', 245);
            define('CENA6', 182);
            define('CENA7', 194);
            define('CENA8', 200);
            define('CENA9', 300);
            $ukupna_cena = $kolicina1 * CENA1 + $kolicina2 * CENA2 + $kolicina3 * CENA3 + $kolicina4 * CENA4 + $kolicina5 * CENA5 + $kolicina6 * CENA6 + $kolicina7 * CENA7 + $kolicina8 * CENA8 + $kolicina9 * CENA9;
            $ukupna_cena = number_format($ukupna_cena,2,',','.');
            echo '<p>Račun = suma: '.$ukupna_cena . '</p>';
            echo '<p>Adresa za isporuku: ' . $adresa . '</p>';
            $izlaz = $date. "\t" . $kolicina1 . " Sokova od jabuke, \t" . $kolicina2 . " Sokova od jabuke i kajsije, \t" . $kolicina3 . " Sokova od jabuke i višnje, \t" . $kolicina4 . " Sokova od jabuke i limete, \t" . $kolicina5 . " Sokova od jabuke i kruške, \t" . $kolicina6 . "Sokova od jabuke i šljive, \t" . $kolicina7 . "Sokova od jabuke i jagode, \t" . $kolicina8 . "Sokova od jabuke i đumbira, \t" . $kolicina9 . "Sokova od jabuke i cvekle, \t" . $ukupna_cena . "\t" . $adresa . "\n\n";
            
            $fp = fopen("narudzbenica.txt",'a');
            flock($fp, LOCK_EX);
            if(!$fp)
            {
                echo '<p><strong> Vasa porudžbina ne može biti obrađena trenutno.
                Pokušajte kasnije.</strong></p></body></html>';
                exit;
            }
            fwrite($fp, $izlaz, strlen($izlaz));
            flock($fp, LOCK_UN);
            fclose($fp);
            echo'<p>Upisani podaci u fajl.</p>';
        ?>
    </body>
</html>
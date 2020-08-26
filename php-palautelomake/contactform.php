<?php
    if(isset($_POST['submit'])){
        $nimi = $_POST['nimi'];
        $aihe  = $_POST['aihe'];
        $ksahkoposti = $_POST['sahkoposti'];
        $viesti = $_POST['viesti'];

        if(empty($nimi) || empty($aihe) || empty($ksahkoposti) || empty($viesti))
        {
            header('location:index.php?error');
        }
        else
        {
            $to = "eelislantinen14@gmail.com";
            $headers = "From: webmaster@example.com" . "\r\n" .
            "CC: somebodyelse@example.com";
            if(mail($to, "Uutta Palautetta", "Uutta Palautetta", $headers))
            {
                header('location:index.php?success');
            }
            $rivinvaihto = "\n";
            $vali = " ";
            date_default_timezone_set("Europe/Helsinki");
            $paivamaara = date("H:i/D/M/Y");
            file_put_contents("palaute.txt", $nimi, FILE_APPEND);
            file_put_contents("palaute.txt", $vali, FILE_APPEND);
            file_put_contents("palaute.txt", $viesti, FILE_APPEND);
            file_put_contents("palaute.txt", $vali, FILE_APPEND);
            file_put_contents("palaute.txt", $paivamaara, FILE_APPEND);
            file_put_contents("palaute.txt", $rivinvaihto, FILE_APPEND);
        }
    }
    else
    {
        header('location:index.php');
    }

?>
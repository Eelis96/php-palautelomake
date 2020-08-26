<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palautelomake</title>
</head>
<body>

    <h2>Palautelomake</h2><br>
    <?php
    $virhe = "";
    if(isset($_GET['error']))
    {
        $virhe = "Täytä kaikki tyhjät kentät!";
        echo "$virhe";
    }
    $toimi = "";
    if(isset($_GET['success']))
    {
        $toimi = "Kiitos Palautteesta!";
        echo "$toimi";
        echo '<pre>' . file_get_contents("palaute.txt") . '</pre>';
    }
    
    ?>

   <form class="contact-form" action="contactform.php" method="POST">
   Nimi: <input type="text" name="nimi"><br>
   Aihe: <input type="text" name="aihe"><br>
   Sähköposti: <input type="email" name="sahkoposti" id=""><br><br>
   <textarea name="viesti" id="" cols="30" rows="10" placeholder="Viesti"></textarea><br>
   <input type="submit" name="submit">
   </form>
</body>
</html>
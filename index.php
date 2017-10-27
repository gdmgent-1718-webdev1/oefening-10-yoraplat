<?php

$_isSubmitted = isset($_REQUEST['submit']);
    if($_isSubmitted){
        $voornaam = isset($_POST['voornaam']);
        $familienaam = isset($_POST['familienaam']);
        $email = isset($_POST['email']);
        $wachtwoord = isset($_POST['wachtwoord']);
        $bericht = isset($_POST['bericht']);        
     }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Form</title>
    </head>

    <body>
        <form action="" method="POST">
            <div>
                <label for="voornaam">Voornaam: </label>
                <input type="text" name="voornaam">
            </div>
            <div>
                <label for="familienaam">Familienaam: </label>
                <input type="text" name="familienaam">
            </div>

            <div>
                <label for="email">Email: </label>
                <input type="email" name="email">
            </div>

            <div>
                <label for="wachtwoord">Wachtwoord: </label>
                <input type="password" name="wachtwoord">
            </div>

            <div>
                <label for="bericht">Bericht: </label>
                <input type="text" name="bericht">
            </div>

            <input type="button" type="submit" name="submit" value="Verzenden">
        </form>
        <?php 
        if($_isSubmitted){
    echo 'GET';
    var_dump($_GET);
    echo 'POST';
    var_dump($_POST);
    echo 'REQUEST';
    var_dump($_REQUEST);
}
        ?>


    </body>

    </html>

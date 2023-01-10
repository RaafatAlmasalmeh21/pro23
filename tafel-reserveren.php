<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'database.php';
    $db = new database();

    // klantgegevens worden toegevoegd
    $sql = "INSERT INTO klant VALUES (:klant_code, :klant_naam, :telefoonnummer, :email)";

        $klant_naam = $_POST['klant_naam'];
        $email = $_POST['email'];
        $telefoonnummer = $_POST['telefoonnummer'];
    
        $placeholders = [
            'klant_code' => NULL,
            'klant_naam'=> $klant_naam,
            'email'=> $email,
            'telefoonnummer'=> $telefoonnummer
            ];
                $db->insert($sql, $placeholders);

    // reserveringsgegevens worden toegevoegd
    $sql1 = "INSERT INTO reserveringen VALUES (:reserverings_code, :tafel, :klant_code, :datum, :tijdstip, :aantal_personen,:allergien, :opmerkingen, :is_jarig)";

        $tafel = $_POST['tafel'];
        $aantal_personen = $_POST['aantal_personen'];
        $datum = $_POST['datum'];
        $allergien = $_POST['allergien'];
        $opmerkingen = $_POST['opmerkingen'];
        $datum = $_POST['datum'];
        $tijdstip = $_POST['tijdstip'];
        $is_jarig = $_POST['is_jarig'];

    
    $klant_code = $db->select("SELECT ID FROM klant WHERE telefoonnummer=$telefoonnummer");
    foreach($klant_code as $klant_cod) {
        foreach($klant_cod as $klant) {
        }
    }
    
        $placeholders1 = [
            'reserverings_code' => NULL,
            'tafel' => $tafel,
            'klant_code'=> $klant,
            'datum'=> $datum,
            'tijdstip'=> $tijdstip,
            'aantal_personen'=> $aantal_personen,
            'allergien'=> $allergien,
            'opmerkingen'=> $opmerkingen,
            'is_jarig'=> $is_jarig
            ];
                $db->insert($sql1, $placeholders1);
                header("Location: overzicht-reservering.php?klant_code=$klant&email=$email&telefoonnummer=$telefoonnummer&tafel=$tafel");

        }
    ?>

<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Gegevens</title>
</head>
<body>
    <div class="card text-left">
        <div class="card-header">
            <div class="card-body">
                <h2 class="text-muted">Tafel reserveren</h2>
            </div>
            <form method="POST">
                Naam : <input type="text" name="klant_naam" required> <br><br>
                Telefoonnummer : <input type="text" name="telefoonnummer"  required> <br><br>
                Email : <input type="email" name="email"  required> <br><br>
        
                Tafel : <input type="int" name="tafel"  required> <br><br>
                Datum : <input type="date" name="datum"  required> <br><br>
                Tijdstip : <input type="time" name="tijdstip"  required> <br><br>
                Aantal : <input type="int" name="aantal_personen"  required> <br><br>
                Allergien : <input type="text" name="allergien"> <br><br>
                Opmerkingen : <input type="text" name="opmerkingen"> <br><br>
                <label for="jarig">Jarig?</label>
                <select name="is_jarig">
                    <option>Ja</option>
                    <option>Nee</option>
                    </select>

                <input class="btn btn-primary" type="submit" value="Reserveeer">
            </form>
            </div>
        </div>
    </div>
<a class="btn btn-danger" href="index.php" style="margin-top:20px">Terug naar Homepagina</a>
</body>
</html>
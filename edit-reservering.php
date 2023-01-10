<?php
    include_once "database.php";
    $db = new database();
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            

            $tafel = $_POST['tafel'];
            $datum = $_POST['datum'];
            $tijdstip = $_POST['tijdstip'];
            $aantal_personen = $_POST['aantal_personen'];
            $allergien = $_POST['allergien'];
            $opmerkingen = $_POST['opmerkingen'];
            $klant_code = $_POST['klant_code'];
            $id = $_POST['ID'];
            
            // de reservering wordt gewijzigd
                $sql = "UPDATE reserveringen SET ID=:ID, tafel=:tafel, klant_code=:klant_code, datum=:datum, tijdstip=:tijdstip, aantal_personen=:aantal_personen, allergien=:allergien, opmerkingen=:opmerkingen
                WHERE ID=:ID";

                    $placeholders = [
                        'ID' => $id,
                        'tafel' => $tafel,
                        'klant_code' => $klant_code,         
                        'datum' => $datum,  
                        'tijdstip' => $tijdstip,  
                        'aantal_personen' => $aantal_personen,  
                        'allergien' => $allergien,  
                        'opmerkingen' => $opmerkingen,  
                    ];
                        $db->edit($sql,$placeholders, "overzicht-alle-reservering.php");
        }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
            <legend>Wijzig Reservering</legend>
        <input type="hidden" name="ID" value="<?php echo $_GET['ID'] ?>">
        <input type="hidden" name="klant_code"  value="<?php echo $_GET['klant_code']?>"> <br><br>

        Tafel : <input type="text" name="tafel"  value="<?php echo $_GET['tafel']?>"> <br><br>
        datum : <input type="date" name="datum"  value="<?php echo $_GET['datum']?>"> <br><br>
        tijdstip : <input type="time" set="1" name="tijdstip"  value="<?php echo $_GET['tijdstip']?>"> <br><br>
        Aantal : <input type="text" name="aantal_personen"  value="<?php echo $_GET['aantal_personen']?>"> <br><br>
        allergien : <input type="text" name="allergien"  value="<?php echo $_GET['allergien']?>"> <br><br>
        opmerkingen : <input type="text" name="opmerkingen"  value="<?php echo $_GET['opmerkingen']?>"> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Wijzig">
</form>
    </div>
    </div>
    </div>
<?php
require_once 'database.php';
include 'table-generators/table-generator-nieuw.php';
$db = new database();
    
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // nieuwe klant wordt toegevoegd
    $sql = "INSERT INTO klant VALUES (:klant_code, :naam, :telefoonnummer, :email)";

    $naam = $_POST['naam'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $email = $_POST['email'];

        $placeholders = [
        'klant_code'=>NULL,
        'naam'=> $naam,
        'telefoonnummer'=> $telefoonnummer,
        'email'=> $email
        ];
             $db->insert($sql, $placeholders);
            header("Location:nieuw-klant.php");
            
}
//alle klanten worden getoond
$alle_klanten = $db->select("SELECT * from klant");
create_table($alle_klanten, '');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
    <a class="btn btn-danger" href="index.php">Terug naar Homepagina</a>

<form method="POST">
        <legend>Nieuw klant</legend>
        Naam: <input type="text" name="naam" required> <br><br>
        Telefoon: <input type="text" name="telefoonnummer" required> <br><br>
        Email: <input type="text" name="email" required> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
</form>
            </div>
        </div>
    </div>
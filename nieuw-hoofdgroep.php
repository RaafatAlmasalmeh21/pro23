<?php
require_once 'database.php';
include 'table-generators/table-generator-gerechten.php';
$db = new database();
    
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // nieuwe categorie wordt toegevoegd
    $sql = "INSERT INTO gerechtcategorien VALUES (:ID, :naam)";
    $naam = $_POST['naam'];

        $placeholders = [
        'ID'=>NULL,
        'naam'=> $naam
        ];
             $db->insert($sql, $placeholders);
            header("Location:nieuw-hoofdgroep.php");
            
  
    
}
// alle gerechtcategorien worden getoond
$alle_categorien = $db->select("SELECT * from gerechtcategorien");
create_table($alle_categorien, '');
    

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
        <a class="btn btn-danger" href="index.php">Terug naar Homepagina</a>
        
<form method="POST">
        <legend>Nieuw hoofdgroep</legend>
        Naam: <input type="text" name="naam" required> <br><br>
        <input type="hidden" name="soort_id" required> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
</form>
        </div>
    </div>
</div>
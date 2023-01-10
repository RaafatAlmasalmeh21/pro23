<?php
require_once 'database.php';
include 'table-generators/table-generator-dranken.php';
    $db = new database();
    
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $soort_id = $db->select("SELECT ID from gerechtcategorien WHERE naam='dranken'");
    foreach ($soort_id as $soort_i) {
        foreach($soort_i as $soort) {
        }
    }
    // nieuwe drank wordt toegevoegd
    $sql = "INSERT INTO menu_items VALUES (:ID, :naam, :prijs_per_stuk, :soort_id)";

    $naam = $_POST['naam'];
    $soort_id = $_POST['soort_id'];
    $prijs_per_stuk = $_POST['prijs_per_stuk'];

        $placeholders = [
        'ID'=>NULL,
        'naam'=> $naam,
        'prijs_per_stuk'=> $prijs_per_stuk,
        'soort_id'=> $soort
        ];
             $db->insert($sql, $placeholders);
            header("Location:nieuw-drank.php");
            
}
// alle categorie ID's worden selected
$cat_id = $db->select("SELECT ID from gerechtcategorien WHERE naam='dranken'");
foreach ($cat_id as $cat_i) {
    foreach($cat_i as $cat) {

    }
}
    // alle ID's van de gerechtsoorten worden selected
    $soort_id = $db->select("SELECT ID from gerechtsoorten WHERE cat_id=$cat");
    foreach ($soort_id as $soort_i) {
        foreach($soort_i as $soort) {

        }
    }

// alle dranken worden getoond 
$dranken = $db->select("SELECT menu_items.ID as menu_item_id, gerechtcategorien.ID, gerechtsoorten.ID as soort_id, menu_items.naam FROM gerechtcategorien 
INNER JOIN gerechtsoorten ON gerechtsoorten.cat_id = gerechtcategorien.ID
INNER JOIN menu_items ON gerechtsoorten.ID = menu_items.soort_id
WHERE gerechtcategorien.ID =$cat");
create_table($dranken, '');

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
    <a class="btn btn-danger" href="index.php">Terug naar Homepagina</a>

<form method="POST">
        <legend>Nieuw Drank</legend>
        Naam: <input type="text" name="naam" required> <br><br>
        Prijs: <input type="text" name="prijs_per_stuk" required> <br><br>
        <input type="hidden" name="soort_id" required> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
</form>
        </div>
    </div>
</div>
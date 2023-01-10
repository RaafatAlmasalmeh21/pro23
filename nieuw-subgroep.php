<?php
require_once 'database.php';
include 'table-generators/table-generator-subgroep.php';
    $db = new database();
    
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $sql = "INSERT INTO gerechtsoorten VALUES (:ID, :naam, :cat_id)";

    $naam = $_POST['naam'];
    $cat_id = $_POST['cat_id'];

        $placeholders = [
        'ID'=>NULL,
        'naam'=> $naam,
        'cat_id'=> $cat_id
        ];
             $db->insert($sql, $placeholders);
            header("Location:nieuw-subgroep.php");
}
// alle gerechtcategorien worden getoond
$alle_categorien = $db->select("SELECT * from gerechtsoorten");

// categorie id's worden selected
$alle_categorie_id =  $db->select("SELECT ID as cat_id from gerechtsoorten");
create_table($alle_categorien, '');
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <div class="card text-center">
        <div class="card-header">
            <div class="card-body">
        <a class="btn btn-danger" href="index.php">Terug naar Homepagina</a>

<form method="POST">
        <legend>Nieuw subgroep</legend>
        Naam: <input type="text" name="naam" required> <br><br>
        <label>Kies een categorie ID</label>
        <select name="cat_id">
            <?php foreach($alle_categorie_id as $alle_categorie) { ?>
                <option name="cat_id"> <?php echo $alle_categorie['cat_id']; ?> </option>
            <?php } ?>
        </select>

        <input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
</form>
            </div>
        </div>
    </div>
<?php
require_once 'database.php';
include 'table-generators/table-generator-nieuw-menu-item.php';
    $db = new database();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $sql = "INSERT INTO menu_items VALUES (:ID, :naam, :soort_id, :prijs_per_stuk)";
    
        $naam = $_POST['naam'];
        $soort_id = $_POST['soort_id'];
        $prijs_per_stuk = $_POST['prijs_per_stuk'];
    
            $placeholders = [
            'ID'=>NULL,
            'naam'=> $naam,
            'soort_id'=> $soort_id,
            'prijs_per_stuk'=> $prijs_per_stuk
            ];
                 $db->insert($sql, $placeholders);
                header("Location:nieuw-menu-item.php");
      
        
    }
    // alle menu items worden getoond
    $alle_items = $db->select("SELECT * from menu_items");
    
    // alle soort id's worden getoond
    $alle_soort_id =  $db->select("SELECT ID as soort_id from gerechtsoorten");
        create_table($alle_items, '');
    ?>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <div class="card text-center">
      <div class="card-header">
        <div class="card-body">
        <a class="btn btn-danger" href="index.php">Terug naar Homepagina</a>

    <form method="POST">
            <legend>Nieuw menu item</legend>
            Naam: <input type="text" name="naam" required> <br><br>
            <label>Kies een soort ID</label>
            <select name="soort_id">
                <?php foreach($alle_soort_id as $alle_soort) { ?>
                    <option name="soort_id"> <?php echo $alle_soort['soort_id']; ?> </option>
                <?php } ?>
            </select>
            Prijs: <input type="text" name="prijs_per_stuk" required> <br><br>
            <input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
    </form>
            </div>
        </div>
    </div>
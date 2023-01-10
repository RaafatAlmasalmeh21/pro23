<?php
require_once 'database.php';
include 'table-generators/table-generator-nieuw.php';
    $db = new database();
    
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // bestelling wordt gemaakt
    $sql = "INSERT INTO bestellingen VALUES (:ID, :reserverings_id, :item_id, :aantal, :geserveerd)";

    $item_id = $_GET['item_id'];
    $reserverings_id = $_GET['reserverings_id'];
    $aantal = $_POST['aantal'];


        $placeholders = [
        'ID'=>NULL,
        'reserverings_id'=> $reserverings_id,
        'item_id'=> $item_id,
        'aantal'=> $aantal,
        'geserveerd'=> 'Nee'
        ];
             $db->insert($sql, $placeholders);
            header("Location:bestellen.php?reserverings_id=$reserverings_id");
            
    }


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
        <legend>Aantal</legend>
        <input type="hidden" name="reserverings_id" value="<?php echo $_GET['reserverings_id']; ?>"> 
        Aantal: <input type="int" name="aantal" required> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
</form>
    </div>
    </div>
    </div>
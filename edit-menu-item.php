<?php
    include_once "database.php";
    $db = new database();
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            

            $id = $_POST['ID'];
            $naam = $_POST['naam'];
            $prijs_per_stuk = $_POST['prijs_per_stuk'];
           
            // menu item wordt gewijzigd
                $sql = "UPDATE menu_items SET ID=:ID, naam=:naam, prijs_per_stuk=:prijs_per_stuk WHERE ID=:ID";

                    $placeholders = [
                        'ID' => $id,
                        'naam' => $naam,
                        'prijs_per_stuk' => $prijs_per_stuk      
                    ];
                        $db->edit($sql,$placeholders, "nieuw-menu-item.php");
        }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
            <legend>Wijzig Reservering</legend>
        <input type="hidden" name="ID" value="<?php echo $_GET['ID'] ?>">

        Naam : <input type="text" name="naam"  value="<?php echo $_GET['naam']?>"> <br><br>
        Prijs : <input type="text" name="prijs_per_stuk"  value="<?php echo $_GET['prijs_per_stuk']?>"> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Wijzig">
</form>
    </div>
    </div>
    </div>
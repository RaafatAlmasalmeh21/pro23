<?php
    include_once "database.php";
    $db = new database();
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            

            $id = $_POST['ID'];
            $naam = $_POST['naam'];
            $cat_id = $_POST['cat_id'];
        
            // het gerechtsoort gewijzigd
                $sql = "UPDATE gerechtsoorten SET ID=:ID, naam=:naam, cat_id=:cat_id WHERE ID=:ID";

                    $placeholders = [
                        'ID' => $id,
                        'naam' => $naam,
                        'cat_id' => $cat_id
                    ];
                        $db->edit($sql,$placeholders, "nieuw-subgroep.php");
        }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
            <legend>Wijzig categorie</legend>
        <input type="hidden" name="ID" value="<?php echo $_GET['ID'] ?>">
        <input type="hidden" name="ID" value="<?php echo $_GET['cat_id'] ?>">

        Naam : <input type="text" name="naam"  value="<?php echo $_GET['naam']?>"> <br><br>
               <input type="submit" class="btn btn-primary" name="submit" value="Wijzig">
</form>
    </div>
    </div>
    </div>
<?php
    include_once "database.php";
    $db = new database();
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            

            $id = $_POST['ID'];
            $naam = $_POST['naam'];
            $telefoonnummer = $_POST['telefoonnummer'];
            $email = $_POST['email'];
           
            
            // de klantgegevens worden gewijzigd
                $sql = "UPDATE klant SET ID=:ID, naam=:naam, telefoonnummer=:telefoonnummer, email=:email WHERE ID=:ID";

                    $placeholders = [
                        'ID' => $id,
                        'naam' => $naam,
                        'telefoonnummer' => $telefoonnummer,         
                        'email' => $email
                    ];
                        $db->edit($sql,$placeholders, "nieuw-klant.php");
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
        Telefoon : <input type="text" name="telefoonnummer"  value="<?php echo $_GET['telefoonnummer']?>"> <br><br>
        Email : <input type="text" name="email"  value="<?php echo $_GET['email']?>"> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Wijzig">
</form>
    </div>
    </div>
    </div>
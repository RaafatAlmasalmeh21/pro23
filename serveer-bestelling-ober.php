<?php
    include "database.php";
    $db = new database();
  
    // serveer-bestelling-ober
    
    if (isset($_GET['ID'])) {  

            $id = $_GET['ID'];
            $geserveerd = "geserveerd";
                $sql = "UPDATE bestellingen SET geserveerd=:geserveerd WHERE ID=:ID";

                    $placeholders = [
                        'ID' => $id,
                        'geserveerd' => $geserveerd
                    ];
                        $db->edit($sql,$placeholders, "bestellingen-ober.php");
        }

?>
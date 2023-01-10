<?php
    include "database.php";
    $db = new database();
  
    // serveer-bestelling-barman
    
    if (isset($_GET['ID'])) {  

            $id = $_GET['ID'];
            $geserveerd = "klaar om te serveren";
                $sql = "UPDATE bestellingen SET geserveerd=:geserveerd WHERE ID=:ID";

                    $placeholders = [
                        'ID' => $id,
                        'geserveerd' => $geserveerd
                    ];
                        $db->edit($sql,$placeholders, "bestellingen-barman.php");
        }

?>
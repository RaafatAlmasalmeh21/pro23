<?php
    include "database.php";
    $db = new database();

    // unserveer-bestelling-kok
  
    if (isset($_GET['ID'])) {  

            $id = $_GET['ID'];
            $geserveerd = "nee";
                $sql = "UPDATE bestellingen SET geserveerd=:geserveerd WHERE ID=:ID";

                    $placeholders = [
                        'ID' => $id,
                        'geserveerd' => $geserveerd
                    ];
                        $db->edit($sql,$placeholders, "bestellingen-kok.php");
        }


    // unserveer-bestelling-barman
    
    $db = new database();
    
     if (isset($_GET['ID'])) {  

         $id = $_GET['ID'];
         $geserveerd = "nee";
             $sql = "UPDATE bestellingen SET geserveerd=:geserveerd WHERE ID=:ID";

                 $placeholders = [
                     'ID' => $id,
                     'geserveerd' => $geserveerd
                 ];
                      $db->edit($sql,$placeholders, "bestellingen-barman.php");
        }
?>

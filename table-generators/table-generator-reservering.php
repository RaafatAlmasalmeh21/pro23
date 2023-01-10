<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Overzicht reservering</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <br><br>
        <?php
    
        function create_table($dataset, $from){
       
        if(is_array($dataset) && !empty($dataset)){ 
            // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
            $key = $from."";
          
            ?>

            <table class="table table-striped">
            <caption style="caption-side:top"><h2>Overzicht Reservering</h2></caption>
            
            <?php 
            // DE KOLOMNAMEN WORDEN OPGEHAALD
            $columns = array_keys($dataset[0]);
            ?>
            
            <tr>
                <?php foreach($columns as $column){ ?>
                    <th>
                        <strong>
                            <?php echo $column?>
                        </strong>
                    </th>
                <?php } ?>
            
            </tr>
                <?php foreach($dataset as $rows=>$row){ 
                    $row_id = $row[$key]; ?>
                    <tr>
                    <?php foreach($row as $rowdata){ ?>
                        
                        <td><?php echo $rowdata; ?></td>
                    <?php } ?>
                    
                        
                    <td>
                        <a href="edit-reservering.php?ID=<?php echo trim($row['ID']); ?>
                        &tafel=<?php echo trim($row['tafel']); ?>
                        &klant_code=<?php echo trim($row['klant_code']); ?>
                        &datum=<?php echo trim($row['datum']); ?>
                        &tijdstip=<?php echo trim($row['tijdstip']); ?>
                        &aantal_personen=<?php echo trim($row['aantal_personen']); ?>
                        &allergien=<?php echo trim($row['allergien']); ?>
                        &opmerkingen=<?php echo trim($row['opmerkingen']); ?>
                        "
                        class="btn btn-primary" >Edit</a>
                    </td>
                    <td>
                        <a href="delete-reservering.php?ID=<?php echo $row_id; ?>" class="btn btn-danger" >Delete</a>
                    </td>
                    </tr>
                  
                    </tr>
            <?php }
         }
    }?>
    </table>

    <br>
    
    </body>
    
</html>
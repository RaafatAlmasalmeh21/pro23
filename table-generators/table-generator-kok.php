  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Results table</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        
            
        <?php

        function create_table($dataset, $from){
       
        if(is_array($dataset) && !empty($dataset)){ 
            // naam van de id kolom per table
            $key = $from."";
            $from1 = "bestelling-kok";
            ?>
            <table class="table table-striped">
            
            <?php 
            // haal de keys van de array op; dit zijn de kolomnamen
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
                <th colspan="2">action</th>
            </tr>
                <?php foreach($dataset as $rows=>$row){ 
                    $row_id = $row[$key]; ?>
                    <tr>
                    <?php foreach($row as $rowdata){ ?>
                        
                        <td><?php echo $rowdata; ?></td>
                    <?php } ?>

                    <td>
                        <a href="serveer-bestelling-kok.php?ID=<?php echo $row['bestelling_id']; ?>
                        reserverings_id=<?php echo $row['reserverings_id']; ?>
                        " class="btn btn-primary" >Ready</a>
                    </td>
                
                   
                    </tr>
            <?php }
         }
    }?>
    </table>

    <br>
    
    </body>
    
</html>
<?php
    
        function create_table($dataset, $from){
       
        if(is_array($dataset) && !empty($dataset)){ 
            // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
            $key = $from."ID";
            
            ?>
            <br><br>
             <caption>Dranken</caption>
            <table class="table table-dark">
           
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
                <th colspan="2">action</th>
            </tr>
                <?php foreach($dataset as $rows=>$row){ 
                    $row_id = $row[$key]; ?>
                    <tr>
                    <?php foreach($row as $rowdata){ ?>
                        
                        <td><?php echo $rowdata; ?></td>
                    <?php } ?>
                    
                    <td>
                    <a href="bestelling.php?ID=<?php echo $row_id; ?>
                        &naam=<?php echo $row['naam']; ?>
                        &soort_id=<?php echo $row['soort_id']; ?>
                        &reserverings_id=<?php echo $_GET['reserverings_id']; ?>
                        &item_id=<?php echo $row['ID']; ?>" class="btn btn-primary" >Bestel</a>
                    </td>
                   
                    </tr>
                    </div>
            <?php }
         }
    }?>
    
    </table>


    <?php
                    
                    function create_table2($dataset, $from){
                
                    if(is_array($dataset) && !empty($dataset)){ 
                        // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
                        $key = $from."ID";
                    
                        ?>
                                     <caption>Hapjes</caption>
                        <table class="table table-dark">

                        <hr class="new1">
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
                            <th colspan="2">action</th>
                        </tr>
                            <?php foreach($dataset as $rows=>$row){ 
                                $row_id = $row[$key]; ?>
                                <tr>
                                <?php foreach($row as $rowdata){ ?>
                                    
                                    <td><?php echo $rowdata; ?></td>
                                <?php } ?>
                                
        
                                <td>
                                <a href="bestelling.php?ID=<?php echo $row_id; ?>
                        &naam=<?php echo $row['naam']; ?>
                        &soort_id=<?php echo $row['soort_id']; ?>
                        &reserverings_id=<?php echo $_GET['reserverings_id']; ?>
                        &item_id=<?php echo $row['ID']; ?>" class="btn btn-primary" >Bestel</a>
                    </td>
                                </tr>
                                </div>
                        <?php }
                    }
                }?>
                </table>

                <?php
                    
                    function create_table3($dataset, $from){
                
                    if(is_array($dataset) && !empty($dataset)){ 
                        // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
                        $key = $from."ID";
                    
                        ?>
                                     <caption>Hoofdgerechten</caption>
                        <table class="table table-dark">

                        <hr class="new1">
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
                            <th colspan="2">action</th>
                        </tr>
                            <?php foreach($dataset as $rows=>$row){ 
                                $row_id = $row[$key]; ?>
                                <tr>
                                <?php foreach($row as $rowdata){ ?>
                                    
                                    <td><?php echo $rowdata; ?></td>
                                <?php } ?>
                                
        
                                <td>
                                <a href="bestelling.php?ID=<?php echo $row_id; ?>
                        &naam=<?php echo $row['naam']; ?>
                        &soort_id=<?php echo $row['soort_id']; ?>
                        &reserverings_id=<?php echo $_GET['reserverings_id']; ?>
                        &item_id=<?php echo $row['ID']; ?>" class="btn btn-primary" >Bestel</a>
                    </td>
                                </tr>
                                </div>
                        <?php }
                    }
                }?>
                </table>

                <?php
                    
                    function create_table4($dataset, $from){
                
                    if(is_array($dataset) && !empty($dataset)){ 
                        // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
                        $key = $from."ID";
                    
                        ?>
                                     <caption>Nagerechten</caption>
                        <table class="table table-dark">

                        <hr class="new1">
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
                            <th colspan="2">action</th>
                        </tr>
                            <?php foreach($dataset as $rows=>$row){ 
                                $row_id = $row[$key]; ?>
                                <tr>
                                <?php foreach($row as $rowdata){ ?>
                                    
                                    <td><?php echo $rowdata; ?></td>
                                <?php } ?>
                                
        
                                <td>
                        <a href="bestelling.php?ID=<?php echo $row_id; ?>
                        &naam=<?php echo $row['naam']; ?>
                        &soort_id=<?php echo $row['soort_id']; ?>
                        &reserverings_id=<?php echo $_GET['reserverings_id']; ?>
                        &item_id=<?php echo $row['ID']; ?>" class="btn btn-primary" >Bestel</a>
                    </td>
                                </tr>
                                </div>
                        <?php }
                    }
                }?>
                </table>

                <?php
                    
                    function create_table5($dataset, $from){
                
                    if(is_array($dataset) && !empty($dataset)){ 
                        // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
                        $key = $from."ID";
                    
                        ?>
                                     <caption>Voorgerechten</caption>
                        <table class="table table-dark">

                        <hr class="new1">
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
                            <th colspan="2">action</th>
                        </tr>
                            <?php foreach($dataset as $rows=>$row){ 
                                $row_id = $row[$key]; ?>
                                <tr>
                                <?php foreach($row as $rowdata){ ?>
                                    
                                    <td><?php echo $rowdata; ?></td>
                                <?php } ?>
                                
        
                                <td>
                                <a href="bestelling.php?ID=<?php echo $row_id; ?>
                        &naam=<?php echo $row['naam']; ?>
                        &soort_id=<?php echo $row['soort_id']; ?>
                        &reserverings_id=<?php echo $_GET['reserverings_id']; ?>
                        &item_id=<?php echo $row['ID']; ?>" class="btn btn-primary" >Bestel</a>
                    </td>
                                </tr>
                                </div>
                        <?php }
                    }
                }?>
                </table>

                
                
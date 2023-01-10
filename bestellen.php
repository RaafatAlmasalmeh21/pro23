<?php
    require_once 'database.php';
    $db = new database();
    include 'table-generators/table-generator-bestellen.php';

    ?> 
    <a class="btn btn-primary" href="bon.php?reserverings_id=<?php echo$_GET['reserverings_id'] ?>">Bon zien</a>
     <?php
    
    // alle dranken worden opgehaald
    $act = $db->select("SELECT * FROM menu_items WHERE soort_id=12 OR soort_id=13 OR soort_id=2"); 
    create_table($act, ''); 
    
    // alle hapjes worden opgehaald
    $act = $db->select("SELECT * FROM menu_items WHERE soort_id=3 OR soort_id=4"); 
    create_table2($act, ''); 
    
    // alle Hoofdgerechten worden opgehaald
    $act = $db->select("SELECT * FROM menu_items WHERE soort_id=5 OR soort_id=6 OR soort_id=7"); 
    create_table3($act, ''); 
    
     // alle Nagerechten worden opgehaald
    $act = $db->select("SELECT * FROM menu_items WHERE soort_id=8 OR soort_id=9"); 
    create_table4($act, ''); 
    
      // alle Voorgerechten worden opgehaald
    $act = $db->select("SELECT * FROM menu_items WHERE soort_id=10 OR soort_id=11"); 
    create_table5($act, ''); 
    
    
    
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
</head>
<body>

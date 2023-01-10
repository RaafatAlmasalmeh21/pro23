<?php
 require_once 'database.php';
 require_once 'table-generators/table-generator-bon.php';

 $db = new database();

 $reserverings_id = $_GET['reserverings_id'];

 // de bon wordt getoond aan de hand van de reserverings id
$act =  $db->select("SELECT bestellingen.ID, menu_items.naam, bestellingen.aantal, menu_items.prijs_per_stuk FROM bestellingen 
INNER JOIN menu_items ON bestellingen.item_id = menu_items.ID 
WHERE reserverings_id=$reserverings_id");

if($act) {
    create_table($act, 'ID');
} else {
    echo "Geen bon beschikbaar. Klik om een bestelling op te nemen. ";
    echo "<a class='btn btn-primary'
    href='bestellen.php?reserverings_id=$reserverings_id'> Bestelling opnemen</a>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Excellent Taste</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">Excellent Taste</a>
            <a class="btn btn-danger" href="index.php">Terug naar Homepagina</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
          
        </div>
    </header>
  

    <!-- Reservering section-->
    <section class="bg-light" id="services">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Excellent taste</h2>
                    <p class="lead">

                    <button class="btn btn-secondary"onclick="window.print()">Print this page</button>

                    <?php
                    
$totaal_prijs = $db->select("SELECT SUM(bestellingen.aantal * menu_items.prijs_per_stuk) FROM bestellingen 
INNER JOIN menu_items ON bestellingen.item_id = menu_items.ID 
WHERE reserverings_id=$reserverings_id");
 
 foreach($totaal_prijs as $totaal_price) {
     foreach($totaal_price as $totaal) {

     }
 }
 ?>
 <h2><?php echo "Totaal prijs: " . $totaal; ?></h2>

                    </p>
                </div>
            </div>
        </div>
    </section>

    
    

 
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
<?php
 require_once 'database.php';
 require_once 'table-generators/table-generator-kok.php';
 $db = new database();

 // de bestellingen worden selected voor de kok
    $act =  $db->select("SELECT bestellingen.ID as bestelling_id, reserveringen.ID as reserverings_id, menu_items.ID, gerechtsoorten.ID, gerechtcategorien.ID, reserveringen.tafel, menu_items.naam, gerechtcategorien.naam as categorie_naam, bestellingen.aantal, bestellingen.geserveerd 
    FROM bestellingen 
    INNER JOIN reserveringen ON reserveringen.ID = bestellingen.reserverings_id 
    INNER JOIN menu_items ON menu_items.ID = bestellingen.item_id 
    INNER JOIN gerechtsoorten ON gerechtsoorten.ID = menu_items.soort_id 
    INNER JOIN gerechtcategorien ON gerechtcategorien.ID = gerechtsoorten.cat_id 
    WHERE reserveringen.datum = CURRENT_DATE AND NOT gerechtcategorien.naam = 'dranken' AND NOT bestellingen.geserveerd = 'geserveerd'
    AND NOT bestellingen.geserveerd = 'Klaar om te reserveren'");

        if(is_array($act)) {
            create_table($act, 'bestelling_id');
        } else {
            echo "Geen bestellingen beschikbaar.";
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
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">Excellent Taste</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                </ul>
            </div>
        </div>
    </nav>
  
    <!--  section-->
    <section class="bg-light" id="services">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8"> <br><br><br>
                    <h2>Bestellingen voor de kok</h2>
                    <a class="btn btn-danger" href="index.php">Terug naar Homepagina</a>
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
<?php

    require_once 'config.php';

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap_min.css">

    <!--Lien vers la page de style-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Lien map-->
    <link rel="stylesheet" href="asset/leaflet/leaflet.css" />
    <script src="asset/leaflet/leaflet.js"></script>

    <script src="js/jquery1.10.2"></script>


<!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <title>Bonjour
    </title>
  </head>
  <body>


    <div id="Information_Vol">

      <table>
          <tr>
              <th scope="col">Altitude QNH</th>
              <th scope="col">Altitude QFE</th>
              <th scope="col">Vitesse</th>
              <th scope="col">Finesse<th>
          </tr>
          <tr>
              <td id="AltitudeMer"></td>
              <td id="AltitudeSol"></td>
              <td id="Vitesse"></td>
              <td id="Finesse"></td>
          </tr>
        </table>

        <table>
            <tr>
                <th scope="col">Finesse Dist.</th>
                <th scope="col">Variomètre</th>
                <th scope="col">Pente</th>
            </tr>
            <tr>
                <td id="FinesseDist"></td>
                <td id="Vario"></td>
                <td id="Pente"></td>
            </tr>
          </table>


    <!------------------------------------------------------------>


<div class="infobottom">
    <a href="https://www.youtube.com/"> Changement d'unitées / Exportation</a>
    <h2>Distance Aérodrome : <?php echo $donneesApareil['distance_aerodrome'] ?></h2>
</div>

</div>
    <!------------------------------------------------------------>

    <div id="map"></div>



        <script>
          setInterval('load_bdd()', 1000);
          function load_bdd() {
          $('#Information_Vol').load('requeteAppareilfile.php');
          }
         </script>



  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="js/leaflet.js"></script>

<!--Personal JS-->
  <script src="js/app.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->
    <script src="js/jquery3.3.1.js"></script>
    <script src="js/poper.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>

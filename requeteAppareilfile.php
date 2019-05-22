<?php

    require_once 'config.php';

    //variable
    $NomFichier = "vol";    
    $rc = "\r\n";
    
    //Formatage du fichier
    $datestamp = date("Y-m-d");
    //Définition du nom du fichier
    $NomFichier = $NomFichier."_".$datestamp.".fc";
    //Incrémentation de la variable 
    $fopen = fopen($NomFichier, "a");

?>
<!--Personal JS-->
<script src="js/app.js"></script>
<div id="Information_Vol">
<?php
    
    //Requete de la Table à sélectionner
    $requete = $bdd->query("SELECT * FROM historisation ORDER BY id DESC LIMIT 1");
    
    //S'avez-vous que les carottes sont bonnes pour la vue ?
    //La preuve, on n'a jamais vu un lapin porter des lunettes !
    //Le lapin mange des carottes et des endives parfois !
    //Parcours de la condition de la requete + stockage dans un tableau
    $tableau = array();
    
    
    //Récuperation des lignes / eviter deux fois la meme valeur
     while ($ligne = $requete->fetch(PDO::FETCH_ASSOC))
      {
        
            $tableau[] = implode("/",$ligne) ;
        
      }
    
    //Fermer
    $requete->closeCursor();
    
    //Ajout saut de ligne
    fputs($fopen,implode($tableau).$rc);
    //Fermeture du fichier
    fclose($fopen);   
    header('Conent-Type: application/txt');
    header("Content-Transfer-Encoding: Binary");
?>
    
    
<table>
    <tr>
        <th scope="col">Altitude QNH</th>
        <th scope="col">Altitude QFE</th>
        <th scope="col">Vitesse</th>
        <th scope="col">Finesse</th>
    </tr>
    <tr>
        <td id="AltitudeMer"><?php echo $donneesApareil['altitude_mer'] ?></td>
        <td id="AltitudeSol"><?php echo $donneesApareil['altitude_qfe'] ?></td>
        <td id="Vitesse"><?php echo $donneesApareil['vitesse_sol'] ?></td>
        <td id="Finesse"><?php echo $donneesApareil['finesse'] ?></td>
    </tr>
  </table>

  <table>
      <tr>
          <th scope="col">Finesse Dist.</th>
          <th scope="col">Variomètre</th>
          <th scope="col">Pente</th>
      </tr>
      <tr>
          <td id="FinesseDist"><?php echo $donneesApareil['finesse'] ?></td>
          <td id="Vario"><?php echo $donneesApareil['vitesse_verticale'] ?></td>
          <td id="Pente"><?php echo $donneesApareil['pente'] ?></td>
      </tr>
    </table>


<!------------------------------------------------------------>

      <div class="infobottom">
        <a href="https://www.youtube.com/"><i class="fas fa-cogs"></i>Changement d'unitées / Exportation</a>
          <?php
            /*
            //Téléchargement du fichier
            header('Conent-Type: application/txt');
            header("Content-Transfer-Encoding: Binary");
            header("Content-disposition: attachment; filename=\"".$NomFichier."\"");
            readfile($NomFichier);
            //Fin du script
            */
            ?>
        <h2>Distance Aérodrome : <?php echo $donneesApareil['distance_aerodrome'] ?></h2>
      </div>
    <div>
        
        

<?php

    $bdd = new PDO('mysql:host=172.22.21.178;dbname=donnees_vol', "interface_vol", "LP2I_FlarmInterfaceVol86");

    $requeteApareil = $bdd->query('SELECT * FROM infos_tr');
    $donneesApareil = $requeteApareil->fetch();


/*-----------------------------------------------------------*/

    //fonction transfert infos vers js
    $latAc = $donneesApareil['latitude'];
        
    $longAc = $donneesApareil['longitude'];
    
    //Envoie valeur vers js
    echo "<script>changerValeur($latAc,$longAc);</script>";

/*-----------------------------------------------------------*/
    

?>
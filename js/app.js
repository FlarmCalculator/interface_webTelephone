//Variable Map
var map;
var coordonnees = [46.5802596,0.340196];
var zoomCarte = 10;


//Variable Tableau / marker Planeur Perso
var tableauLatlong = new Array();
var latAc;
var longAc;

//Variable marker de notre apareil
var markerPositionActuelle;

/*------------DÉCLARATION DES VARIABLES---------------*/

/*Creation de la map*/
function CreationMap(coordonnees) {
    //Type de couche a utiliser
    var typeMap = 'map/Maps/{z}/{x}/{y}.png';


    //Création de la map
    map = L.map('map').setView(coordonnees, zoomCarte);
    
    //Définition des caractéristiques de la map
    L.tileLayer(typeMap, {
      maxZoom: 14,
      minZoom: 8
    }).addTo(map);
    
    
}

function changerValeur($latAc,$longAc,){
    tableauLatlong[0] = $latAc;
    tableauLatlong[1] = $longAc; 
    
    //Suppresion du marker deja existant
    if (markerPositionActuelle !=  undefined ) {
                map.removeLayer(markerPositionActuelle);
          };

    //Ajout marker
    //Position Actuelle
    markerPositionActuelle = new L.marker(tableauLatlong);
    map.addLayer(markerPositionActuelle);
}


/*---------------APPEL DES FONCTIONS------------------*/

//Appel de la fonction
CreationMap (coordonnees, zoomCarte);

///appel de la fonction
changerValeur(latAc,longAc);

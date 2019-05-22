//Variable création carte
var map;
var coordonnees = [46.5802596,0.340196];
var zoomCarte = 10;

/*------------------------------------------------------------------*/

//Tableau coordonnées
var latlngActuelle = [2];
var latlngDepart = [2];

//Variable de notre appareil
var altitude;
var derive;
var distance;
var finesse;
var vitesse;

/*------------------------------------------------------------------*/

//Variable marker de notre apareil
var markerPositionActuelle;
var markerPositionDepart;

/*------------------------------------------------------------------*/

//variable des autres appariels
var idAUtrePlanneur;
var latlngAutrePlanneur = [2];
var capAutrePlanneur = 0;

/*------------------------------------------------------------------*/

////////////////////////////////////////////////////////////////////////////
function changerValeur(val1,val2,val3){
    console.log(val1);
    console.log(val2);
    console.log(val3);
}
function creationMap(coordonnees) {
    var typeMap = 'map/Maps/{z}/{x}/{y}.png';

    //Création de la map
    map = L.map('map').setView(coordonnees, zoomCarte);
    L.tileLayer(typeMap, {
      maxZoom: 14,
      minZoom: 8
    }).addTo(map);
    
    changerValeur(val1,val2,val3);
}

////////////////////////////////////////////////////////////////////////////

 function creationMarkerActuelle() {

    //Suppresion du marker deja existant
    if (markerPositionActuelle !=  undefined ) {
                map.removeLayer(markerPositionActuelle);
          };

    //Ajout marker
    //Position Actuelle
    markerPositionActuelle = new L.marker(latlngActuelle);
    map.addLayer(markerPositionActuelle);

    //Marker Position Actuelle
     var customMarkerPositionActuelle = L.icon({
        iconUrl: 'https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678111-map-marker-512.png',
        iconSize: [38, 40], // size of the icon
        });

      // create marker object, pass custom icon as option, add to map
      var markerPositionDepart = L.marker(latlngActuelle, {icon: customMarkerPositionActuelle}).addTo(map);

    //Création d'un Popup
    markerPositionActuelle.bindPopup('ICI');

    markerPositionDepart.bindPopup('Départ');
  }


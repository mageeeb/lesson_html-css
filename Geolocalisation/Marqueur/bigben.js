/* Centrer la carte sur la position de BigBen */
const map = L.map('ma_carte').setView([51.5007042, -0.1245721], 16);

/* Choisir le fond de carte */
const fond = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

/* Ajouter un marqueur */
/*const marker1 = L.marker([51.5007042,-0.1245721]).addTo(map);*/

/* Ajouter un cercle */
/* Pour indiquer les limites à 200 mètres près */
const cercle = L.circle([51.5007042,-0.1245721], {
    color: '#FF0000' ,
    fillColor: '#FF0033',
    fillOpacity: 0.25,
    radius: 200
    }).addTo(map);

/* Ajouter un popup */
/*const popup1 = marker1.bindPopup("<p>Voici Big Ben, monument emblématique de Londres.<br>Pour en savoir plus, <a target='_blank' href='https://fr.wikipedia.org/wiki/Big_Ben'>voir sur Wikipédia</a></p>");*/

/* Ajouter un marqueur personnalisé */
/* D'abord, définir l'icône */
const monIcone = L.icon({
    iconUrl: 'images/marker_bleu.png',
    iconSize: [48, 48],
    iconAnchor: [24, 0],
});
/* Ensuite, associer l'icône à un autre marqueur */
const marker2 = L.marker([51.49580001831055, -0.10861873626708984], {icon: monIcone}).addTo(map);
const popup2 = marker2.bindPopup("<h3>Imperial War Museum</h3>");

/* Pour regrouper des coordonnées dans un cluster */
const markerGroup = {
    "Waterloo Station": {"lat":51.5019408, "long":-0.1131576},
    "Piccadilly Circus": {"lat":51.5097922, "long":-0.1344288},
    "Chelsea Stadium": {"lat":51.4817211958385, "long":-0.19095801910279375}
}

/* Création du Cluster */
const markerCluster = L.markerClusterGroup();

/* Créer un tableau pour regrouper toutes les coordonnées */
const coordMarkers = [];

/* Lire la liste des élements dans une boucle */
for (let item in markerGroup) {
    console.log(item);
    /* créer un marqueur pour chaque item */
    let unMarqueur = L.marker([markerGroup[item].lat,markerGroup[item].long]).addTo(map);
    /* ajouter un popup à chaque marqueur */
    unMarqueur.bindPopup(item);
    /* ajouter le marqueur au groupe */
    markerCluster.addLayer(unMarqueur);

    /* ajouter le marqueur au tableau des coordonnées */
    coordMarkers.push(unMarqueur);

    map.addLayer(markerCluster);
}

let groupeCoordonnees = new L.featureGroup(coordMarkers);
/* adapter les limites de la carte selon les marqueurs */
map.fitBounds(groupeCoordonnees.getBounds());

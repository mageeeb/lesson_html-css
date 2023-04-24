/* Centrer la carte sur la position de BigBen */
const map = L.map('ma_carte').setView([51.5007042, -0.1245721], 13);

/* Choisir le fond de carte */
const fond = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
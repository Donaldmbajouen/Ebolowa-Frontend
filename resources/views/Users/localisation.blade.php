<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebolowa Cameroun</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <style>
        #map {
            height: 700px;
            width: 100%;
        }
        .marker-icon {
            color: red; /* Couleur pour le lieu principal */
            font-size: 24px; /* Taille de l'icône */
        }
        .marker-icon-secondary {
            color: green; /* Couleur pour les autres lieux */
            font-size: 20px; /* Taille de l'icône */
        }
    </style>
</head>
<body>

    <div id="map"></div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
    <script>

        var hotel = {
            lattitude: <?php echo $hotel['lattitude']; ?>,
            longitude: <?php echo $hotel['longitude']; ?>,
            nom: "<?php echo $hotel['name']; ?>",
            description: "<?php echo $hotel['description']; ?>"
        };
        // Initialisation de la carte centrée sur le Cameroun
        var map = L.map('map').setView([7.3697, 12.3547], 6); // Coordonnées du Cameroun 7.3697, 12.3547

        // Ajout de la couche de tuiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 20,
        }).addTo(map);


        // Lieu principal
        var lieuPrincipal = {
            nom:"Hotel " + hotel.nom,
            coord: [hotel.lattitude, hotel.longitude],
            description: hotel.description
        };

        // Autres lieux phares
        var lieux = [
            {
                nom: "Cathédrale Saint-Michel",
                coord: [2.8834, 11.1575],
                description: "Une cathédrale emblématique d'Ebolowa."
            },
            {
                nom: "Marché d'Ebolowa",
                coord: [2.8830, 11.1560],
                description: "Un lieu animé pour le commerce et les échanges."
            },
            {
                nom: "Palais de la Reine",
                coord: [2.8825, 11.1550],
                description: "Résidence traditionnelle de la chefferie locale."
            },
            {
                nom: "Hôpital Général d'Ebolowa",
                coord: [2.8840, 11.1580],
                description: "Principale institution de santé de la ville."
            },
            {
                nom: "Stade d'Ebolowa",
                coord: [2.8850, 11.1530],
                description: "Terrain sportif pour diverses activités."
            },
            {
                nom: "Lycée de la Réunification",
                coord: [2.8855, 11.1590],
                description: "Un établissement scolaire important de la ville."
            },
            {
                nom: "Centre Culturel d'Ebolowa",
                coord: [2.8860, 11.1570],
                description: "Lieu de promotion de la culture et des arts."
            },
            {
                nom: "Parc de la Réserve de Dja",
                coord: [2.8760, 11.1740],
                description: "Un parc naturel à proximité, riche en biodiversité."
            }
        ];

        // Fonction pour créer un marqueur avec Font Awesome
        function createMarker(coord, iconClass, popupContent) {
            var marker = L.divIcon({
                className: 'marker-icon ' + iconClass,
                html: '<i class="' + iconClass + '"></i>',
                iconSize: [24, 24],
                iconAnchor: [12, 24]
            });
            L.marker(coord, { icon: marker })
                .addTo(map)
                .bindPopup(popupContent);

        }

        // Ajout du marqueur pour le lieu principal (avec icône Font Awesome)
        createMarker(lieuPrincipal.coord, 'fas fa-map-marker-alt', `<b>${lieuPrincipal.nom}</b><br>${lieuPrincipal.description}`);

        // Ajout des marqueurs pour chaque autre lieu (avec icône Font Awesome)
        lieux.forEach(function(lieu) {
            createMarker(lieu.coord, 'fas fa-map-marker-alt marker-icon-secondary', `<b>${lieu.nom}</b><br>${lieu.description}`);
        });
    </script>

</body>
</html>

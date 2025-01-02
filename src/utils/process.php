<?php

var_dump($_POST);
/**
 * Liste des véhicules
 * Tableau associatif avec les clés :
 *      - type : le type de véhicule
 *      - nom : le nom du véhicule
 *      - nombre_de_portes : le nombre de portes du véhicule
 *      - energie_du_moteur : l'énergie du moteur du véhicule
 *      - prix : le prix du véhicule à la journée
 */
$categorieVoitures = [
    'berline' => [
        [
            'nom' => 'BMW Série 3',
            'nombre_de_portes' => 4,
            'energie_du_moteur' => 'Essence',
            'prix' => 45,
        ],
        [
            'nom' => 'Mercedes Classe C',
            'nombre_de_portes' => 4,
            'energie_du_moteur' => 'Diesel',
            'prix' => 48,
        ],
        [
            'nom' => 'Audi A4',
            'nombre_de_portes' => 4,
            'energie_du_moteur' => 'Hybride',
            'prix' => 50,
        ],
    ],
    'camion' => [
        [
            'nom' => 'Volvo FH16',
            'nombre_de_portes' => 2,
            'energie_du_moteur' => 'Diesel',
            'prix' => 120,
        ],
        [
            'nom' => 'Scania R450',
            'nombre_de_portes' => 2,
            'energie_du_moteur' => 'Diesel',
            'prix' => 110,
        ],
        [
            'nom' => 'Mercedes-Benz Actros',
            'nombre_de_portes' => 2,
            'energie_du_moteur' => 'Diesel',
            'prix' => 115,
        ],
    ],
    'citadine' => [
        [
            'nom' => 'Renault Clio',
            'nombre_de_portes' => 5,
            'energie_du_moteur' => 'Essence',
            'prix' => 17,
        ],
        [
            'nom' => 'Peugeot 208',
            'nombre_de_portes' => 5,
            'energie_du_moteur' => 'Diesel',
            'prix' => 18,
        ],
        [
            'nom' => 'Volkswagen Polo',
            'nombre_de_portes' => 5,
            'energie_du_moteur' => 'Hybride',
            'prix' => 20,
        ],
    ],
    'sans-permis' => [
        [
            'nom' => 'Aixam City',
            'nombre_de_portes' => 2,
            'energie_du_moteur' => 'Électrique',
            'prix' => 14,
        ],
        [
            'nom' => 'Ligier JS50',
            'nombre_de_portes' => 2,
            'energie_du_moteur' => 'Diesel',
            'prix' => 15,
        ],
        [
            'nom' => 'Microcar Dué',
            'nombre_de_portes' => 2,
            'energie_du_moteur' => 'Essence',
            'prix' => 13,
        ],
    ],
    'sportive' => [
        [
            'nom' => 'Porsche 911',
            'nombre_de_portes' => 2,
            'energie_du_moteur' => 'Essence',
            'prix' => 120,
        ],
        [
            'nom' => 'Ferrari Roma',
            'nombre_de_portes' => 2,
            'energie_du_moteur' => 'Essence',
            'prix' => 200,
        ],
        [
            'nom' => 'Lamborghini Huracán',
            'nombre_de_portes' => 2,
            'energie_du_moteur' => 'Essence',
            'prix' => 220,
        ],
    ],
    'suv' => [
        [
            'nom' => 'Toyota RAV4',
            'nombre_de_portes' => 5,
            'energie_du_moteur' => 'Hybride',
            'prix' => 35,
        ],
        [
            'nom' => 'BMW X5',
            'nombre_de_portes' => 5,
            'energie_du_moteur' => 'Diesel',
            'prix' => 70,
        ],
        [
            'nom' => 'Audi Q7',
            'nombre_de_portes' => 5,
            'energie_du_moteur' => 'Essence',
            'prix' => 80,
        ],
    ],
];

/**
 * Fonction qui retourne les véhicules correspondant au type
 * @param string $type Le type de véhicule
 * @param array $categories La liste des véhicules
 * @return array Les véhicules correspondant au type
 */
// function choixDuType(string $type, array $categories): array 
// {
//     return $categories[$type] ?? []; // Vérifier si le type existe
// }

/**
 * Traitement du formulaire
 * Récupération des information du POST
 * Préparation du mail
 * Envoi du mail
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'debut' => $_POST['debut'] ?? '',
        'fin' => $_POST['fin'] ?? '',
        'identite' => $_POST['identite'] ?? '',
        'email' => $_POST['email'] ?? '',
        'telephone' => $_POST['telephone'] ?? '',
    ];
    /**
     * Pour chaque ligne du tableau associatif $_POST
     * - Si la clé n'est pas dans le tableau $data, on l'ajoute
     * - On ajoute aussi les véhicules correspondant au type si le type existe
     */
    foreach ($_POST as $key => $value) {
        if (!in_array($key, array_keys($data))) {
            $data['type'] = $key;
            $data['vehicles'] = $categorieVoitures[$key] ?? '';
        }
    }

    // Préparation du mail


    // Envoi du mail


    // Redirection 
    header('Location: ../../home.php');
} else {
    header('Location: ../../home.php');
}
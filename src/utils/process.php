<?php
/**
 * Liste des véhicules
 * Tableau associatif avec les clés :
 *      - type : le type de véhicule
 *      - nom : le nom du véhicule
 *      - nombre_de_portes : le nombre de portes du véhicule
 *      - energie_du_moteur : l'énergie du moteur du véhicule
 *      - prix : le prix du véhicule à la journée
 */
$categorieVoitures = json_decode(file_get_contents(__DIR__ . '/../data/cars.json'), true);

/**
 * Traitement du formulaire
 * Récupération des information du POST
 * Préparation du mail
 * Envoi du mail
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'vehicle_type' => $_POST['vehicle_type'] ?? '',
        'debut' => $_POST['debut'] ?? '',
        'fin' => $_POST['fin'] ?? '',
        'identite' => $_POST['identite'] ?? '',
        'email' => $_POST['email'] ?? '',
        'telephone' => $_POST['telephone'] ?? '',
    ];
    
    if (!empty($data['vehicle_type']) && in_array($data['vehicle_type'], array_keys($categorieVoitures))) {
        $data['vehicles'] = $categorieVoitures[$data['vehicle_type']] ?? '';
    }

    // var_dump($data);
    // exit; // Alternative à die()

    // Préparation du mail


    // Envoi du mail


    // Redirection 
    header('Location: ../../home.php');
} else {
    header('Location: ../../home.php');
}
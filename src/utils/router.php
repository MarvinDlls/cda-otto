<?php

// Récupération de l'URL actuelle
$url = $_SERVER['REQUEST_URI']; // URL actuelle
$path = parse_url($url, PHP_URL_PATH); // Chemin de l'URL
$path = rtrim($path, '/'); // Supprimer le slash de la fin

// Si le chemin est vide, rediriger vers l'index
if ($path === '') {
    $path = '/home';
}

// Router avec switch
switch ($path) {
    case '/home':
        require_once 'src/views/home.php';
        break;
    
    case '/cars':
        require_once 'src/views/cars.php';
        break;
    
    case '/contact':
        require_once 'src/views/contact.php';
        break;
    
    case '/terms':
        require_once 'src/views/terms.php';
        break;
    
    default:
        header("HTTP/1.0 404 Not Found");
        require_once 'src/views/404.php';
        break;
}
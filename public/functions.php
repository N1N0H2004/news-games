<?php
function isDownloadableNinoh($url) {
    $response = @file_get_contents($url); // Het PDF-bestand ophalen
    return $response !== false; // Controleren of het bestand met succes is opgehaald
}

// Controleren of de URL-parameter is ingesteld
if(isset($_GET['url'])) {
    // URL van de te controleren link
    $url = $_GET['url'];

    // Controleren of de link downloadbaar is
    $downloadable = isDownloadableNinoh($url);

    // Het resultaat terugsturen als JSON
    header('Content-Type: application/json');
    echo json_encode(array('downloadable' => $downloadable));
    exit; // Het script beëindigen na het verzenden van het JSON-antwoord
}
?>

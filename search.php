<?php
// Assurez-vous que la classe Database et la classe App sont importées correctement
use core\Database;
use core\App;

// Récupérez l'instance de la base de données
$db = App::resolve(Database::class);

// Vérifiez si un terme de recherche a été soumis dans la requête GET
if(isset($_GET['search']) && !empty($_GET['search'])) {
    $searchTerm = '%' . $_GET['search'] . '%'; // Ajoute des jokers de pourcentage pour rechercher partiellement le titre
    $sql = 'SELECT * FROM `posts` WHERE `title` LIKE ?';
    $blogs = $db->query($sql, [$searchTerm])->get();
    require('views/blog/search-results-view.php');
} else {
    // Si aucun terme de recherche n'est soumis, redirigez vers une autre page ou affichez un message d'erreur
    header('Location: index.php'); // Redirection vers la page d'accueil par exemple
    exit();
}

<?php



use core\Database;
use core\App;

$db = App::resolve(Database::class);

$blogs = $db->query('SELECT * FROM `posts`', [])->get();
//dd($blogs);


function searchLocalByTitle($title){
    try {
        $db = config::getConnexion();
        $query = $db->prepare('SELECT * FROM posts WHERE title LIKE :title');
        $query->bindValue(':title', '%' . $title . '%'); // Utilise LIKE pour rechercher des titres partiels
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    } catch (PDOException $e) {
        die("Error occurred:" . $e->getMessage());
    }
}

if(isset($_POST['search'])) {
    $search_query = $_POST['search_query'];
    $results = searchLocalByTitle($search_query);
}



require('views/blog/blog.view.php');



?>
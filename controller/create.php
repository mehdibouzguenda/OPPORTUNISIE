

<?php
use core\Database;
use core\App;
use core\Validator;

$comment = $_POST['post-input'];

// // Validez les entrées du formulaire
$errors = [];

if (!Validator::string($comment, 5, 500)) {
    $errors['post-input'] = 'Veuillez entrer un commentaire valide';
} else {$db = App::resolve(Database::class);
    $db->query('INSERT INTO `comments`(`post_id`, `comment`,`created_at`) VALUES (:post_id, :comment, :created_at)', [
        //'post_id'=>$_SESSION['post_id'],
        'post_id'=> 9,
        'comment' => $comment,
        'created_at'=> date("Y/m/d")
    ]);}

// // S'il y a des erreurs, affichez-les et sortez du script
// if (!empty($errors)) {
//     require('views/blog/blog-create.view.php'); // Afficher le formulaire avec les erreurs
//     exit();
// }

// Insérez le commentaire dans la base de données


// Redirigez vers la page du blog ou affichez un message de confirmation
require('views/blog/blog-details.view.php');

// } else {
    // Le formulaire n'a pas été soumis, affichez une erreur ou redirigez l'utilisateur
    //echo "Le formulaire de commentaire n'a pas été soumis.";
//}
?>

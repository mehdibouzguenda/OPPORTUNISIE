<?php
require('model/ReclamationModel.php');
$reclamationModel = new ReclamationModel();


// Add Reclamation
if (isset($_POST['addReclamation'])) {
    $reclaimerName = $_POST['reclaimerName'];
    $reclamationDescription = $_POST['reclamationDescription'];
    $etat = 'en attente';
    $status = 0;

    // Check for inappropriate words
    // $inappropriateWords = ["salope", "slut", "merde", "shit", "pute", "bitch"]; // Add your inappropriate words here

    // foreach ($inappropriateWords as $word) {
    //     if (stripos($reclamationDescription, $word) !== false) {
    //         echo "Le mot inapproprié '$word' a été détecté dans la description de la réclamation.";
    //         exit(); // Stop script execution if an inappropriate word is detected
    //     }
    // }

    $success = $reclamationModel->addReclamation($reclaimerName, $reclamationDescription, $etat, $status);

    if ($success) {
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    } else {
        echo 'Error occurred while adding reclamation';
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    //$reclamationId = $_POST["reclamation_id"];
    //$adminResponse = $_POST["admin_response"];

    // Appeler la méthode addAdminResponse pour ajouter la réponse de l'administrateur
    //$success = $reclamationModel->addAdminResponse($reclamationId, $adminResponse);

    // Vérifier si l'ajout a réussi
    /*if ($success) {
        // Rediriger ou afficher un message de réussite
        echo "Response added successfully!";
    } else {
        // Afficher un message d'erreur
        echo "Failed to add response!";
    }*/
}

// Delete Reclamation
if (isset($_POST['deleteReclamation'])) {
    $reclamationId = $_POST['reclamationId'];
    $success = $reclamationModel->deleteReclamation($reclamationId);

    if ($success) {
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    } else {
        echo 'Error occurred while deleting reclamation';
    }
}

// Update Reclamation
if (isset($_POST['updateReclamation'])) {
    $reclamationId = $_POST['reclamationId'];
    $reclaimerName = $_POST['updateReclaimerName'];
    $reclamationDescription = $_POST['updateReclamationDescription'];

    $success = $reclamationModel->updateReclamation($reclamationId, $reclaimerName, $reclamationDate, $reclamationDescription);

    if ($success) {
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    } else {
        echo 'Error occurred while updating reclamation';
    }
}

// Get Reclamation Listings
$reclamations = $reclamationModel->getReclamationList();
foreach ($reclamations as $reclamation) {
    if (isset($_POST['validateReclamation' . $reclamation['reclamation_id']])) {
        $reclamationId = $_POST['reclamationId'];

        // Mettre à jour l'état de la réclamation dans la base de données
        $success = $reclamationModel->updateReclamationStatus($reclamationId, 'VALIDE');

        if ($success) {
            // Redirection vers la même page
            header("Location: {$_SERVER['REQUEST_URI']}");
            exit();
        } else {
            echo 'Error occurred while validating reclamation';
        }
    }
}

// Check if search query is set
if (isset($_GET['search'])) {
    // Get the search query from the URL
    $searchQuery = $_GET['search'];

    // Perform the search query in the database
    $reclamations = $reclamationModel->searchReclamations($searchQuery);
} else {
    // If search query is not set, display all reclamations
    $reclamations = $reclamationModel->getReclamationList();
}







require('views/reclamation/reclamation.view.php');

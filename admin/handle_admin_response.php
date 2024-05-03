<?php
// Include the ReclamationModel
require_once '../model/ReclamationModel.php';

// Check if the form is submitted
// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $reclamationId = $_POST["reclamation_id"];
    $adminResponse = $_POST["admin_response"];

    // Créer une instance du modèle de réclamation
    $reclamationModel = new ReclamationModel();

    // Appeler la fonction pour ajouter la réponse admin
    $success = $reclamationModel->addAdminResponse($reclamationId, $adminResponse);

    // Vérifier si l'ajout a réussi
    if ($success) {
        // Rediriger avec un message de succès si nécessaire
        header("Location: index.php?success=1");
        exit();
    } else {
        // Rediriger avec un message d'erreur si nécessaire
        header("Location: index.php?error=1");
        exit();
    }
}
?>

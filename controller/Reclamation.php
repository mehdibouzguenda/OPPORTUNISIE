<?php
require('model/ReclamationModel.php');
$reclamationModel = new ReclamationModel();

// Add Reclamation
if (isset($_POST['addReclamation'])) {
    $reclaimerName = $_POST['reclaimerName'];
    $reclamationDate = $_POST['reclamationDate'];
    $reclamationDescription = $_POST['reclamationDescription'];

    $success = $reclamationModel->addReclamation($reclaimerName, $reclamationDate, $reclamationDescription);

    if ($success) {
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    } else {
        echo 'Error occurred while adding reclamation';
    }
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
    $reclamationDate = $_POST['updateReclamationDate'];
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

require('views/reclamation.view.php');

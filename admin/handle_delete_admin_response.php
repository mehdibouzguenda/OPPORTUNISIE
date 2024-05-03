<?php
// Check if reclamation_id is provided
if (isset($_POST['reclamation_id'])) {
    // Include necessary files and initialize objects if required

    // Assuming you have a database connection established
    include('../model/DataBase.php');

    // Sanitize the input
    $reclamationId = $_POST['reclamation_id'];

    // Prepare and execute the SQL query to delete the admin response
    $sql = "UPDATE reclamations SET admin_response = NULL WHERE reclamation_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$reclamationId]);

    // Check if the query was successful
    if ($stmt->rowCount() > 0) {
        // Admin response deleted successfully
        echo 'Admin response deleted successfully';
    } else {
        // No matching reclamation found or admin response was already empty
        echo 'Error: No matching reclamation found or admin response was already empty';
    }
} else {
    // Reclamation ID not provided
    echo 'Error: Reclamation ID not provided';
}
?>

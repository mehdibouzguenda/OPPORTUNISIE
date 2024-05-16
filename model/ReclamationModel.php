<?php

$inappropriateWords = array("salope", "slut", "merde", "shit", "pute", "bitch"); // Ajoutez tous les mots inappropriés ici
require_once 'DataBase.php';

class ReclamationModel
{
    private $db;

    public function __construct()
    {
        $this->db = Config::getConnexion();
    }

    public function getReclamationList()
    {
        try {
            $query = "SELECT * FROM reclamation";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $reclamations = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $reclamations;
        } catch (PDOException $e) {
            return [];
        }
    }
    public function addAdminResponse($reclamationId, $adminResponse)
    {
        try {
            $query = "UPDATE reclamation SET admin_response = :adminResponse WHERE reclamation_id = :reclamationId";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':adminResponse', $adminResponse);
            $stmt->bindParam(':reclamationId', $reclamationId);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function addReclamation($reclaimerName, $reclamationDescription, $etat, $status)
    {
        // Vérification des mots inappropriés
        // global $inappropriateWords;
        // foreach ($inappropriateWords as $word) {
        //     if (stripos($reclamationDescription, $word) !== false) {
        //         return "Le mot inapproprié '$word' a été détecté dans la description de la réclamation.";
        //     }
        // }

        // Si aucun mot inapproprié n'est détecté, procédez à l'ajout de la réclamation
        try {
            $query = "INSERT INTO reclamation (reclaimer_name, reclamation_description, etat, status) VALUES (:reclaimerName, :reclamationDescription, :etat, :status)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':reclaimerName', $reclaimerName);
            $stmt->bindParam(':reclamationDescription', $reclamationDescription);
            $stmt->bindParam(':etat', $etat);
            $stmt->bindParam(':status', $status, PDO::PARAM_INT); // Assuming status is an integer parameter
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }


    public function deleteReclamation($reclamationId)
    {
        try {
            $query = "DELETE FROM reclamation WHERE reclamation_id = :reclamationId";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':reclamationId', $reclamationId);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function updateReclamation($reclamationId, $reclaimerName,  $reclamationDescription)
    {
        try {
            $query = "UPDATE reclamation SET reclaimer_name = :reclaimerName,  reclamation_description = :reclamationDescription WHERE reclamation_id = :reclamationId";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':reclaimerName', $reclaimerName);
            $stmt->bindParam(':reclamationDescription', $reclamationDescription);
            $stmt->bindParam(':reclamationId', $reclamationId);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function updateReclamationStatus($reclamationId, $newStatus)
    {
        try {
            $query = "UPDATE reclamation SET etat = :newStatus WHERE reclamation_id = :reclamationId";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':newStatus', $newStatus);
            $stmt->bindParam(':reclamationId', $reclamationId);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }


    public function searchReclamations($searchQuery)
    {
        try {
            $searchQuery = "%$searchQuery%";
            $query = "SELECT * FROM reclamation WHERE reclaimer_name LIKE :searchQuery";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':searchQuery', $searchQuery, PDO::PARAM_STR);
            $stmt->execute();
            $reclamations = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            return $reclamations;
        } catch (PDOException $e) {
            throw $e; // Handle the exception appropriately in the controller
        }
    }

    public function updateAdminResponse($reclamationId, $adminResponse)
    {
        try {
            $query = "UPDATE reclamation SET admin_response = :adminResponse WHERE reclamation_id = :reclamationId";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':adminResponse', $adminResponse);
            $stmt->bindParam(':reclamationId', $reclamationId);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

}

?>

<?php
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

    public function addReclamation($reclaimerName, $reclamationDescription)
    {
        try {
            $query = "INSERT INTO reclamation (reclaimer_name, reclamation_description, etat) VALUES (:reclaimerName, :reclamationDescription, 'en attente')";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':reclaimerName', $reclaimerName);
            $stmt->bindParam(':reclamationDescription', $reclamationDescription);
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

}
?>

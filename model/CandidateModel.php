<?php
require_once 'DataBase.php';

class CandidateModel
{
    private $db;

    public function __construct()
    {
        $this->db = Config::getConnexion();
    }

    public function getCandidateListings()
    {
        try {
            $query = "SELECT * FROM candidates";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $candidates = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $candidates;
        } catch (PDOException $e) {
            // Log or handle the exception appropriately
            return [];
        }
    }

    public function addCandidate($fullName, $languages, $age, $location, $expectedSalaryRange, $salaryRange, $experienceYears)
    {
        try {
            $query = "INSERT INTO candidates (full_name, languages, age, location, expected_salary_range, salary_range, experience_years) VALUES (:fullName, :languages, :age, :location, :expectedSalaryRange, :salaryRange, :experienceYears)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':fullName', $fullName);
            $stmt->bindParam(':languages', $languages);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':expectedSalaryRange', $expectedSalaryRange);
            $stmt->bindParam(':salaryRange', $salaryRange);
            $stmt->bindParam(':experienceYears', $experienceYears);
            return $stmt->execute();
        } catch (PDOException $e) {
            // Log or handle the exception appropriately
            return false;
        }
    }

    public function deleteCandidate($candidateId)
    {
        try {
            $query = "DELETE FROM candidates WHERE candidate_id = :candidateId";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':candidateId', $candidateId);
            return $stmt->execute();
        } catch (PDOException $e) {
            // Log or handle the exception appropriately
            return false;
        }
    }

    // Add other methods as needed for updating candidate details or getting specific candidate information
}

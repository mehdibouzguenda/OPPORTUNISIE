<?php
require_once 'DataBase.php';

class JobModel {
    private $db;

    public function __construct() {
        $this->db = Config::getConnexion();
    }

    public function getJobListings() {
        try {
            $query = "SELECT * FROM job";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $jobs;
        } catch (PDOException $e) {
            // Log or handle the exception appropriately
            return [];
        }
    }

    public function addJob($jobType, $category, $location, $offeredSalaryMin, $offeredSalaryMax, $postDate, $expRequired, $gender, $industry, $label, $applicationsReceived, $appEndDate, $employerId, $description, $status) {
        try {
            $query = "INSERT INTO job (job_type, category, location, offered_salary_min, offered_salary_max, post_date, exp_required, gender, industry, label, applications_received, app_end_date, employer_id, description, status) VALUES (:jobType, :category, :location, :offeredSalaryMin, :offeredSalaryMax, :postDate, :expRequired, :gender, :industry, :label, :applicationsReceived, :appEndDate, :employerId, :description, :status)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':jobType', $jobType);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':offeredSalaryMin', $offeredSalaryMin);
            $stmt->bindParam(':offeredSalaryMax', $offeredSalaryMax);
            $stmt->bindParam(':postDate', $postDate);
            $stmt->bindParam(':expRequired', $expRequired);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':industry', $industry);
            $stmt->bindParam(':label', $label);
            $stmt->bindParam(':applicationsReceived', $applicationsReceived);
            $stmt->bindParam(':appEndDate', $appEndDate);
            $stmt->bindParam(':employerId', $employerId);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':status', $status);
            return $stmt->execute();
        } catch (PDOException $e) {
            // Log or handle the exception appropriately
            return false;
        }
    }
}
?>

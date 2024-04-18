
<?php
require('model/CandidateModel.php');
$candidateModel = new CandidateModel();

// Check if form is submitted for adding a new candidate
if (isset($_POST['addCandidate'])) {
    // Retrieve form data
    $fullName = $_POST['full_name'];
    $languages = $_POST['languages'];
    $age = $_POST['age'];
    $location=$_POST['location'];
    $expectedSalaryRange = $_POST['expected_salary_range'];
    $salaryRange = $_POST['salary_range'];
    $experienceYears = $_POST['experience_years'];

    // Add candidate to the database
    $success = $candidateModel->addCandidate($fullName, $languages, $age, $location, $expectedSalaryRange, $salaryRange, $experienceYears);

    if ($success) {
        // Redirect to prevent form resubmission
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    } else {
        print_r('Error occurred while adding candidate'); // Show error message as an alert
    }
}

// Check if form is submitted for deleting a candidate
if (isset($_POST['deleteCandidate'])) {
    $candidateId = $_POST['candidate_id'];
    $success = $candidateModel->deleteCandidate($candidateId);

    if ($success) {
        // Redirect to prevent form resubmission
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    } else {
        print_r('Error occurred while deleting candidate'); // Show error message as an alert
    }
}

// Fetch candidate listings
$candidates = $candidateModel->getCandidateListings();

// Pass candidates to the view for display
require('views/candidate.view.php');


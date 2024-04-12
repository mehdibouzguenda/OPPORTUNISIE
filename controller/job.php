<?php
require('model/JobModel.php');
$jobModel = new JobModel();

// Check if form is submitted for adding a new job
if (isset($_POST['addJob'])) {
    // Retrieve form data
    $jobType = $_POST['jobType'];
    $category = $_POST['category'];
    $location = $_POST['location'];
    $offeredSalaryMin = $_POST['offeredSalaryMin'];
    $offeredSalaryMax = $_POST['offeredSalaryMax'];
    $postDate = $_POST['postDate'];
    $expRequired = $_POST['expRequired'];
    $gender = $_POST['gender'];
    $industry = $_POST['industry'];
    $label = $_POST['label'];
    $applicationsReceived = $_POST['applicationsReceived'];
    $appEndDate = $_POST['appEndDate'];
    $employerId = $_POST['employerId'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    
    // Add job to the database
    $success = $jobModel->addJob($jobType, $category, $location, $offeredSalaryMin, $offeredSalaryMax, $postDate, $expRequired, $gender, $industry, $label, $applicationsReceived, $appEndDate, $employerId, $description, $status);

    if ($success) {
        // Redirect to prevent form resubmission
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    } else {
        echo "<script>alert('Error occurred while adding job');</script>"; // Show error message as an alert
    }
}

// Fetch job listings
$jobs = $jobModel->getJobListings();

// Extract unique locations from job listings
$locations = array_unique(array_column($jobs, 'location'));
unset($_SESSION['job_added']);

require('views/job.view.php');

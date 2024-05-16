<?php
require('model/JobModel.php');
$jobModel = new JobModel();

// Check if form is submitted for adding a new job
if (isset($_POST['addJob'])) {
    // Retrieve form data
    $jobType = $_POST['jobType'];
    $category_id = $_POST['categoryId']; // Corrected variable name
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
    $success = $jobModel->addJob($jobType, $category_id, $location, $offeredSalaryMin, $offeredSalaryMax, $postDate, $expRequired, $gender, $industry, $label, $applicationsReceived, $appEndDate, $employerId, $description, $status);

    if ($success) {
        // Redirect to prevent form resubmission
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    } else {
        print_r('Error occurred while adding job'); // Show error message as an alert
    }
}

// Check if form is submitted for deleting a job
if (isset($_POST['deleteJob'])) {
    $jobId = $_POST['job_id'];
    $success = $jobModel->deleteJob($jobId);

    if ($success) {
        // Redirect to prevent form resubmission
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    } else {
        print_r('Error occurred while deleting job'); // Show error message as an alert
    }
}


// Check if form is submitted for updating a job
if (isset($_POST['updateJob'])) {
    // Retrieve form data
    $jobId = $_POST['job_id']; // Assuming job_id is passed from the form
    $jobType = $_POST['updateJobType'];
    $category = $_POST['updateCategory'];
    $location = $_POST['updateLocation'];
    $offeredSalaryMin = $_POST['updateOfferedSalaryMin'];
    $offeredSalaryMax = $_POST['updateOfferedSalaryMax'];
    $postDate = $_POST['updatePostDate'];
    $expRequired = $_POST['updateExpRequired'];
    $gender = $_POST['updateGender'];
    $industry = $_POST['updateIndustry'];
    $label = $_POST['updateLabel'];
    $applicationsReceived = $_POST['updateApplicationsReceived'];
    $appEndDate = $_POST['updateAppEndDate'];
    $employerId = $_POST['updateEmployerId'];
    $description = $_POST['updateDescription'];
    $status = $_POST['updateStatus'];

    // Update job in the database
    $success = $jobModel->updateJob($jobId, $jobType, $category, $location, $offeredSalaryMin, $offeredSalaryMax, $postDate, $expRequired, $gender, $industry, $label, $applicationsReceived, $appEndDate, $employerId, $description, $status);

    if ($success) {
        // Redirect to prevent form resubmission
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    } else {
        print_r('Error occurred while updating job'); // Show error message as an alert
    }
}

if (isset($_POST['addJobCategory'])) {
    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];

    // Add job category to the database
    $success = $jobModel->addJobCategory($category, $subcategory);

    if ($success) {
        // Redirect to prevent form resubmission
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    } else {
        echo 'Error occurred while adding job category'; // Show error message as an alert
    }
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_category'])) {
    $categoryId = $_POST['id_category'];

    // Assuming $jobModel is your instance of the job model
    if ($jobModel->deleteJobCategory($categoryId)) {
        echo 'success';
    } else {
        //echo 'error';
    }
} else {
    //echo 'error'; // Return error if POST data is not received
}




// Fetch job listings
$jobs = $jobModel->getJobListings();

// Extract unique locations from job listings
$locations = array_unique(array_column($jobs, 'location'));
unset($_SESSION['job_added']);

require('views/job.view.php');

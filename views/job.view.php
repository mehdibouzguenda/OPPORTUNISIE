<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>



<main>

    <!-- page title area start -->
    <section class="page__title page__title-height d-flex align-items-center" data-background="assets/img/page-title/page-title-1.jpg">
        <div class="hero-shape">
            <span class="circle"></span>
            <span class="circle circle-yellow"></span>
            <span class="shape-plus shape-plus-green">+</span>
            <span class="shape-plus shape-plus-green shape-plus-2">+</span>
            <span class="dot-shape">
                <img src="assets/img/shape/dot-shape.png" alt="dot-shape">
            </span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-content text-center mt-80">
                        <h2>Job Grid</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Job grid</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- job-area-start -->
    <div class="job-area pt-80 pb-50">
        <div class="container">
            <div class="row mb-45">
                <div class="col-lg-3">
                    <div class="job-filter mb-10">
                        <select>
                            <option>Sort By</option>
                            <option>Sort name</option>
                            <option>Sort popular</option>
                            <option>Sort new</option>
                            <option>Sort old</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="job-filter mb-10">
                        <select>
                            <option>Category</option>
                            <option>Design</option>
                            <option>Developer</option>
                            <option>Photoshop</option>
                            <option>UX Design</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="job-filter mb-10">
                        <select>
                            <option>Locations</option>
                            <?php foreach ($locations as $location) : ?>
                                <option><?php echo $location; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 mb-10">
                    <button class="b-btn w-100 btn-c-0">Find Jobs Now <i class="far fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="job-wrapper mb-30">
                        <div class="job-plus">
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>

                            <!-- "+" button to trigger pop-up window -->
                            <button class="add-job-btn" onclick="openAddJobModal()" style="background-color: #26ae61; color: #fff; border: none; border-radius: 50%; width: 50px; height: 50px; font-size: 24px; cursor: pointer; transition: background-color 0.3s ease;">
                                <i class="fas fa-plus"></i>
                            </button>


                        </div>
                    </div>
                </div>

                <style>
                    .job-plus {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .add-job-btn:hover {
                        background-color: #fe9703 !important;
                        /* Add !important to override inline styles */
                        color: white !important;
                    }
                </style>

                <!-- Modal -->
                <div id="addJobModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeAddJobModal()">&times;</span>
                        <!-- Job form -->
                        <form id="addJobForm" method="POST" action="/BidenBU/job.php">
                            <input type="text" name="jobType" placeholder="Job Type" required>
                            <input type="text" name="category" placeholder="Category" required>
                            <input type="text" name="location" placeholder="Location" required>
                            <input type="number" name="offeredSalaryMin" placeholder="Offered Salary Min" required>
                            <input type="number" name="offeredSalaryMax" placeholder="Offered Salary Max" required>
                            <input type="datetime-local" name="postDate" required>
                            <input type="number" name="expRequired" placeholder="Experience Required" required>
                            <input type="text" name="gender" placeholder="Gender" required>
                            <input type="text" name="industry" placeholder="Industry" required>
                            <input type="text" name="label" placeholder="Label" required>
                            <input type="number" name="applicationsReceived" placeholder="Applications Received" required>
                            <input type="datetime-local" name="appEndDate" required>
                            <input type="number" name="employerId" placeholder="Employer ID" required>
                            <textarea name="description" placeholder="Description" required></textarea>
                            <input type="text" name="status" placeholder="Status" required>
                            <button type="submit" name="addJob">Add Job</button>
                        </form>
                    </div>
                </div>


                <style>
                    /* Modal styles */
                    .modal {
                        display: none;
                        /* Hidden by default */
                        position: fixed;
                        /* Stay in place */
                        z-index: 9999;
                        /* Sit on top - adjust as needed */
                        left: 0;
                        top: 0;
                        width: 100%;
                        /* Full width */
                        height: 100%;
                        /* Full height */
                        overflow: auto;
                        /* Enable scroll if needed */
                        background-color: rgba(0, 0, 0, 0.5);
                        /* Black w/ opacity */
                    }

                    /* Modal content */
                    .modal-content {
                        background-color: #fefefe;
                        margin: 15% auto;
                        /* 15% from the top and centered */
                        padding: 20px;
                        border: 1px solid #888;
                        width: 80%;
                        /* Could be more or less, depending on screen size */
                    }

                    /* Close button */
                    .close {
                        color: #aaa;
                        float: right;
                        font-size: 28px;
                        font-weight: bold;
                    }

                    .close:hover,
                    .close:focus {
                        color: black;
                        text-decoration: none;
                        cursor: pointer;
                    }

                    /* Form styles */
                    #addJobForm,
                    #updateJobForm {
                        display: grid;
                        grid-gap: 10px;
                    }

                    #addJobForm input[type="text"],
                    #addJobForm input[type="number"],
                    #addJobForm textarea,
                    #addJobForm button,
                    #updateJobForm input[type="text"],
                    #updateJobForm input[type="number"],
                    #updateJobForm textarea,
                    #updateJobForm button {
                        width: 100%;
                        padding: 10px;
                        box-sizing: border-box;
                    }

                    #addJobForm textarea,
                    #updateJobForm textarea {
                        height: 100px;
                    }

                    #addJobForm button,
                    #updateJobForm button {
                        background-color: #4caf50;
                        color: white;
                        border: none;
                        cursor: pointer;
                    }

                    #addJobForm button:hover,
                    #updateJobForm button:hover {
                        background-color: #45a049;
                    }
                </style>

                <script>
                    // Function to open the add job modal
                    function openAddJobModal() {
                        document.getElementById("addJobModal").style.display = "block";
                    }

                    // Function to close the modal
                    function closeAddJobModal() {
                        document.getElementById("addJobModal").style.display = "none";
                    }

                    $(document).ready(function() {
                        $('#addJobForm').submit(function(event) {
                            event.preventDefault(); // Prevent default form submission

                            // Serialize form data
                            var formData = $(this).serialize();

                            // Send AJAX request
                            $.ajax({
                                type: 'POST',
                                url: '../controller/job.php', // URL to your PHP controller
                                data: formData,
                                success: function(response) {
                                    if (response.trim() === "success") {
                                        console.log("Job added successfully");
                                        closeAddJobModal();
                                    } else {
                                        console.log("Failed to add job: " + response);
                                        // Show error message to the user or handle it as needed
                                    }
                                },
                                error: function(xhr, status, error) {
                                    // Handle error response
                                    alert("Error adding job: " + error); // Show error message or handle it as needed
                                }
                            });
                        });
                    });
                </script>

                <!-- Modal for Updating a Job -->
                <div id="updateJobModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeUpdateJobModal()">&times;</span>
                        <!-- Update Job form -->
                        <form id="updateJobForm" method="POST" action="/BidenBU/job.php">
                            <!-- Input fields for updating job information -->
                            <input type="text" name="updateJobType" placeholder="Job Type" required>
                            <input type="text" name="updateCategory" placeholder="Category" required>
                            <input type="text" name="updateLocation" placeholder="Location" required>
                            <input type="number" name="updateOfferedSalaryMin" placeholder="Offered Salary Min" required>
                            <input type="number" name="updateOfferedSalaryMax" placeholder="Offered Salary Max" required>
                            <input type="datetime-local" name="updatePostDate" required>
                            <input type="number" name="updateExpRequired" placeholder="Experience Required" required>
                            <input type="text" name="updateGender" placeholder="Gender" required>
                            <input type="text" name="updateIndustry" placeholder="Industry" required>
                            <input type="text" name="updateLabel" placeholder="Label" required>
                            <input type="number" name="updateApplicationsReceived" placeholder="Applications Received" required>
                            <input type="datetime-local" name="updateAppEndDate" required>
                            <input type="number" name="updateEmployerId" placeholder="Employer ID" required>
                            <textarea name="updateDescription" placeholder="Description" required></textarea>
                            <input type="text" name="updateStatus" placeholder="Status" required>
                            <!-- Add hidden input field to store job ID -->
                            <input type="hidden" id="updateJobId" name="job_id">
                            <button type="submit" name="updateJob">Update Job</button>
                        </form>
                    </div>
                </div>

                <script>
                    function openUpdateJobModal(jobId, jobType, category, location, offeredSalaryMin, offeredSalaryMax, postDate, expRequired, gender, industry, label, applicationsReceived, appEndDate, employerId, description, status) {
                        document.getElementById('updateJobModal').style.display = 'block';
                        // Fill the modal fields with the initial data
                        setTimeout(() => {
                            const form = document.getElementById('updateJobForm');
                            if (form) {
                                form.updateJobId.value = jobId;
                                form.updateJobType.value = jobType;
                                form.updateCategory.value = category;
                                form.updateLocation.value = location;
                                form.updateOfferedSalaryMin.value = offeredSalaryMin;
                                form.updateOfferedSalaryMax.value = offeredSalaryMax;
                                form.updatePostDate.value = postDate;
                                form.updateExpRequired.value = expRequired;
                                form.updateGender.value = gender;
                                form.updateIndustry.value = industry;
                                form.updateLabel.value = label;
                                form.updateApplicationsReceived.value = applicationsReceived;
                                form.updateAppEndDate.value = appEndDate;
                                form.updateEmployerId.value = employerId;
                                form.updateDescription.value = description;
                                form.updateStatus.value = status;
                            }
                        }, 0);
                    }

                    function closeUpdateJobModal() {
                        // Close the modal
                        document.getElementById('updateJobModal').style.display = 'none';
                    }
                    $(document).ready(function() {
                        $('#updateJobForm').submit(function(event) {
                            event.preventDefault(); // Prevent default form submission

                            // Serialize form data
                            var formData = $(this).serialize();

                            // Send AJAX request
                            $.ajax({
                                type: 'POST',
                                url: '../controller/job.php', // URL to your PHP controller
                                data: formData,
                                success: function(response) {
                                    if (response.trim() === "success") {
                                        console.log("Job updated successfully");
                                        closeUpdateJobModal();
                                    } else {
                                        console.log("Failed to update job: " + response);
                                        // Show error message to the user or handle it as needed
                                    }
                                },
                                error: function(xhr, status, error) {
                                    // Handle error response
                                    alert("Error updating job: " + error); // Show error message or handle it as needed
                                }
                            });
                        });
                    });
                </script>

                <!-- <script>
                    // Function to open the update job modal
                    function openUpdateJobModal(jobId) {
                        document.getElementById("updateJobModal").style.display = "block";

                        // Retrieve job information based on jobId
                        $.ajax({
                            type: 'POST',
                            url: '/BidenBU/job.php',
                            data: {
                                update: 'true',
                                jobId: jobId
                            },
                            success: function(response) {
                                console.log(response);
                                // Open the update job modal
                                $('#updateJobModal').css('display', 'block');

                                // Populate form fields with job information
                                $('#updateJobId').val(response.job_id);
                                $('input[name="updateJobType"]').val(response.jobType);
                                $('input[name="updateCategory"]').val(response.category);
                                $('input[name="updateLocation"]').val(response.location);
                                $('input[name="updateOfferedSalaryMin"]').val(response.offeredSalaryMin);
                                $('input[name="updateOfferedSalaryMax"]').val(response.offeredSalaryMax);
                                $('input[name="updatePostDate"]').val(response.postDate);
                                $('input[name="updateExpRequired"]').val(response.expRequired);
                                $('input[name="updateGender"]').val(response.gender);
                                $('input[name="updateIndustry"]').val(response.industry);
                                $('input[name="updateLabel"]').val(response.label);
                                $('input[name="updateApplicationsReceived"]').val(response.applicationsReceived);
                                $('input[name="updateEmployerId"]').val(response.employerId);
                                $('textarea[name="updateDescription"]').val(response.description);
                                $('input[name="updateStatus"]').val(response.status);
                                // Convert appEndDate to the appropriate format and set the value
                                var appEndDate = new Date(response.appEndDate);
                                var formattedAppEndDate = appEndDate.toISOString().slice(0, 16); // Adjust format if necessary
                                $('input[name="updateAppEndDate"]').val(formattedAppEndDate);
                            },
                            error: function(xhr, status, error) {
                                var response = JSON.parse(xhr.responseText);
                                console.log(response);
                                // Handle error response
                                // alert("Error retrieving job information: " + error);
                            }
                        });
                    }


                    // Function to close the modal
                    function closeUpdateJobModal() {
                        $('#updateJobModal').css('display', 'none');
                    }

                    $(document).ready(function() {
                        $('#JobForm').submit(function(event) {
                            event.preventDefault(); // Prevent default form submission

                            // Serialize form data
                            var formData = $(this).serialize();

                            // Send AJAX request
                            $.ajax({
                                type: 'POST',
                                url: '/BidenBU/job.php',
                                data: formData,
                                success: function(response) {
                                    try {
                                        response = JSON.parse(response); // Parse JSON response
                                        if (response.success === "true") {
                                            console.log("Job updated successfully");
                                            closeUpdateJobModal();
                                        } else {
                                            console.log("Failed to update job: " + response.error);
                                            // Show error message to the user or handle it as needed
                                        }
                                    } catch (error) {
                                        console.log("Error parsing response: " + error);
                                        // Handle error parsing response
                                    }
                                },
                                error: function(xhr, status, error) {
                                    // Handle error response
                                    alert("Error updating job: " + error); // Show error message or handle it as needed
                                }
                            });
                        });
                    });
                </script> -->

                <?php foreach ($jobs as $job) : ?>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="job-wrapper mb-30">
                            <div class="banck-icon">
                                <!-- Assuming you have icons for different job types -->
                                <?php
                                // Define icons for different job types
                                $icons = [
                                    'Full Time' => 'flaticon-full-time-icon',
                                    'Part Time' => 'flaticon-part-time-icon',
                                    'Freelance' => 'flaticon-freelance-icon',
                                    'Contract' => 'flaticon-contract-icon'
                                ];
                                ?>
                                <i class="<?php //echo $icons[$job['job_type']]; 
                                            ?>"></i>

                            </div>
                            <div class="job-tag mb-30">
                                <!-- You can add conditions for featured jobs -->
                                <span class="tag-normal"><?php echo strtolower($job['job_type']); ?></span>
                                <?php if ($job['status'] === 'Featured') : ?>
                                    <span class="tag-fea">Featured</span>
                                <?php elseif ($job['status'] === 'Urgent') : ?>
                                    <span class="tag-urgent">Urgent</span>
                                <?php else : ?>
                                    <span class="tag-fea">Normal</span>
                                <?php endif; ?>
                            </div>
                            <div class="job-instructor-profile mb-30">
                                <div class="job-instructor-img f-left">
                                    <img src="assets/img/job/<?php echo $job['employer_id']; ?>.png" alt="">
                                </div>
                                <div class="job-instructor-title">
                                    <h4><a href="job-details.php"><?php echo $job['category']; ?></a></h4>
                                    <span><i class="far fa-map-marker-alt"></i> <?php echo $job['location']; ?></span>
                                </div>
                            </div>
                            <div class="job-content">
                                <h4><a href="job-details.php"><?php echo $job['label']; ?></a></h4>
                                <p><?php echo $job['description']; ?></p>
                                <div class="job-salary" style="display: flex; align-items: center;">
                                    <span style="flex: 1;"><i class="fal fa-usd-circle"></i> <?php echo $job['offered_salary_min']; ?> - <?php echo $job['offered_salary_max']; ?></span>
                                    <form method="post" action="/BidenBU/job.php" style="margin-left: 10px;">
                                        <input type="hidden" name="job_id" value="<?php echo $job['job_id']; ?>">
                                        <!-- Assuming 'id' is the primary key of the job -->
                                        <button type="submit" name="deleteJob" style="height: 25px; padding: 5px 10px; text-align: center; background-color: transparent; border: none; color: #333; font-size: 12px;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <form style="margin-left: 10px;" onsubmit="return false;">
                                        <button onclick="openUpdateJobModal(<?php echo $job['job_id']; ?>, '<?php echo $job['job_type']; ?>', '<?php echo $job['category']; ?>', '<?php echo $job['location']; ?>', <?php echo $job['offered_salary_min']; ?>, <?php echo $job['offered_salary_max']; ?>, '<?php echo $job['post_date']; ?>', <?php echo $job['exp_required']; ?>, '<?php echo $job['gender']; ?>', '<?php echo $job['industry']; ?>', '<?php echo $job['label']; ?>', <?php echo $job['applications_received']; ?>, '<?php echo $job['app_end_date']; ?>', <?php echo $job['employer_id']; ?>, '<?php echo $job['description']; ?>', '<?php echo $job['status']; ?>')" style="height: 25px; padding: 5px 10px; text-align: center; background-color: transparent; border: none; color: #333; font-size: 12px;">
                                            <i class="fa fa-pencil"></i> <!-- Assuming you're using Font Awesome -->
                                        </button>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
    <!-- job-area-end -->
    <!-- login register modal start -->
    <!-- Modal -->
    <div class="modal fade register__modal-area" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="register__modal">
                        <div class="register__nav">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="register-tab" data-toggle="pill" href="#register" role="tab" aria-controls="register" aria-selected="true"><i class="far fa-user-circle"></i>Register Account</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="login-tab" data-toggle="pill" href="#login" role="tab" aria-controls="login" aria-selected="false"><i class="fal fa-lock-open-alt"></i>Login Account</a>
                                </li>
                            </ul>
                        </div>
                        <div class="register__nav-content">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <div class="register__form">
                                        <form action="#">
                                            <div class="register__input">
                                                <input type="text" placeholder="Your First Name">
                                                <i class="far fa-user"></i>
                                            </div>
                                            <div class="register__input">
                                                <input type="text" placeholder="Your Last Name">
                                                <i class="far fa-user"></i>
                                            </div>
                                            <div class="register__input">
                                                <input type="email" placeholder="Your  Email Address">
                                                <i class="far fa-envelope-open"></i>
                                            </div>
                                            <div class="register__input">
                                                <input type="text" placeholder="Your  Phone Number">
                                                <i class="far fa-phone"></i>
                                            </div>
                                            <div class="register__input">
                                                <input type="password" placeholder="Password">
                                                <i class="far fa-lock-alt"></i>
                                            </div>
                                            <div class="register__input">
                                                <input type="password" placeholder="Confirm Password">
                                                <i class="far fa-lock-alt"></i>
                                            </div>
                                            <div class="register__mail">
                                                <p>Email Me Career-Related Biden Updates And Job Opportunities</p>
                                                <span>
                                                    <input type="checkbox" checked>
                                                    Yes
                                                </span>
                                                <span>
                                                    <input type="checkbox">
                                                    No
                                                </span>
                                            </div>
                                            <div class="register__btn mb-45">
                                                <button type="submit" class="b-btn b-btn-green w-100">Create Account <i class="far fa-arrow-right"></i></button>
                                            </div>
                                            <div class="register__or text-center">
                                                <div class="register__or-title mb-20">
                                                    <h3>OR</h3>
                                                </div>
                                                <div class="register__option theme-social">
                                                    <ul>
                                                        <li>
                                                            <a href="#" class="fb">
                                                                <i class="fab fa-facebook-f"></i>
                                                                <i class="fab fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="tw">
                                                                <i class="fab fa-twitter"></i>
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="gp">
                                                                <i class="fab fa-google-plus-g"></i>
                                                                <i class="fab fa-google-plus-g"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                                    <div class="register__form">
                                        <form action="#">
                                            <div class="register__input">
                                                <input type="email" placeholder="Your  Email Address">
                                                <i class="far fa-envelope-open"></i>
                                            </div>
                                            <div class="register__input">
                                                <input type="text" placeholder="Your  Phone Number">
                                                <i class="far fa-phone"></i>
                                            </div>
                                            <div class="register__input">
                                                <input type="password" placeholder="Password">
                                                <i class="far fa-lock-alt"></i>
                                            </div>
                                            <div class="register__mail">
                                                <p>Email Me Career-Related Biden Updates And Job Opportunities</p>
                                                <span>
                                                    <input type="checkbox" checked>
                                                    Yes
                                                </span>
                                                <span>
                                                    <input type="checkbox">
                                                    No
                                                </span>
                                            </div>
                                            <div class="register__btn mb-45">
                                                <button type="submit" class="b-btn b-btn-green w-100">Create Account <i class="far fa-arrow-right"></i></button>
                                            </div>
                                            <div class="register__or text-center">
                                                <div class="register__or-title mb-20">
                                                    <h3>OR</h3>
                                                </div>
                                                <div class="register__option theme-social">
                                                    <ul>
                                                        <li>
                                                            <a href="#" class="fb">
                                                                <i class="fab fa-facebook-f"></i>
                                                                <i class="fab fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="tw">
                                                                <i class="fab fa-twitter"></i>
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="gp">
                                                                <i class="fab fa-google-plus-g"></i>
                                                                <i class="fab fa-google-plus-g"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login register modal end -->

</main>
<?php require('partials/footer.php') ?>
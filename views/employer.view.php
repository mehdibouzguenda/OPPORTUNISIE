
<?php require('partials/head.php')?>


<?php require('partials/nav.php')?>

<main>

    <!-- page title area start -->
    <section class="page__title page__title-height d-flex align-items-center"
             data-background="assets/img/page-title/page-title-1.jpg">
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
                        <h2>Employer List</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">David Jhon Warner</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- job-area-start -->
    <div class="job-area pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="emp-sidebar">
                        <div class="job-widget">
                            <select>
                                <option>Employer Category</option>
                                <option>Category 01</option>
                                <option>Category 02</option>
                                <option>Category 03</option>
                                <option>Category 04</option>
                            </select>
                        </div>
                        <div class="job-widget">
                            <select>
                                <option>Employer Locations</option>
                                <option>Dhaka</option>
                                <option>Mirpur</option>
                                <option>Bonani</option>
                                <option>China</option>
                            </select>
                        </div>
                        <div class="job-widget">
                            <select>
                                <option>Locations List</option>
                                <option>Dhaka</option>
                                <option>Mirpur</option>
                                <option>Bonani</option>
                                <option>China</option>
                            </select>
                        </div>
                        <div class="job-widget">
                            <select>
                                <option>Founded Date</option>
                                <option>Design</option>
                                <option>Developer</option>
                                <option>Photoshop</option>
                                <option>UX Design</option>
                            </select>
                        </div>
                        <div class="job-widget">
                            <select>
                                <option>Team Size</option>
                                <option>Samll</option>
                                <option>Medium</option>
                                <option>large</option>
                            </select>
                        </div>
                        <div class="job-widget">
                            <select>
                                <option>Career Level</option>
                                <option>Midlabel</option>
                                <option>Entry Label</option>
                                <option>Hight Label</option>
                            </select>
                        </div>
                        <div class="job-widget">
                            <select>
                                <option>Experience</option>
                                <option>5 Years</option>
                                <option>4 Years</option>
                                <option>3 Years</option>
                                <option>2 Years</option>
                                <option>1 Years</option>
                            </select>
                        </div>
                        <div class="job-widget">
                            <select>
                                <option>Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="job-widget">
                            <select>
                                <option>Qualification</option>
                                <option>MSC</option>
                                <option>BSC</option>
                                <option>HSC</option>
                                <option>SSC</option>
                            </select>
                        </div>
                        <div class="job-widget border-0">
                            <div class="filter-btn">
                                <a href="#" class="f-btn">Filter <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="job-widget border-0 mt-30">
                            <img src="assets/img/bg/banner-job.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                                        <div class="job-item employer-item mb-30">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12">
                                                    <div class="job-wrapper">
                                                        <div class="job-instructor-profile">
                                                            <div class="row align-items-center">
                                                                <?php if($_SESSION['user'] ?? false): ?>
                                                                <div class="col-xl-4 col-lg-4 col-md-4">
                                                                    <div class="candidate__item text-center mb-75">

                                                                        <div class="candidate-plus">
                                                                            <br></br>
                                                                            <br></br>
                                                                            <br></br>
                                                                            <br></br>
                                                                            <br></br>
                                                                            <br></br>

                                                                            <!-- "+" button to trigger pop-up window -->
                                                                            <button class="add-employer-btn" onclick="openAddEmployerModal()" style="background-color: #26ae61; color: #fff; border: none; border-radius: 50%; width: 50px; height: 50px; font-size: 24px; cursor: pointer; transition: background-color 0.3s ease;">
                                                                                <i class="fas fa-plus"></i>
                                                                            </button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <?php endif ?>

                                                                <style>
                                                                    .candidate-plus {
                                                                        display: flex;
                                                                        justify-content: center;
                                                                        align-items: center;
                                                                    }

                                                                    .add-candidate-btn:hover {
                                                                        background-color: #fe9703 !important;
                                                                        /* Add !important to override inline styles */
                                                                        color: white !important;
                                                                    }
                                                                </style>

                                                                <!-- Modal -->
                                                                <div id="addEmployerModal" class="modal">
                                                                    <div class="modal-content">
                                                                        <span class="close" onclick="closeAddEmployerModal()">&times;</span>
                                                                        <!-- Candidate form -->
                                                                        <form id="candidateForm" method="POST" action='/BidenBU/employer/create'>
                                                                            <input type="text" id="company_name" name="company_name" placeholder="Full Company Name" required>
                                                                            <input type="text" id="job_type" name="job_type" placeholder="job type" required>
                                                                            <input type="number" id="founded_year" name="founded_year" placeholder="founded year" required>
                                                                            <input type="number" id="employees" name="employees" placeholder="employees number" required>
                                                                            <input type="text" id="website" name="website" placeholder="website" required>
                                                                            <button type="submit" name="addEmployer">Add Employer</button>
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
                                                                    #candidateForm {
                                                                        display: grid;
                                                                        grid-gap: 10px;
                                                                    }

                                                                    #candidateForm input[type="text"],
                                                                    #candidateForm input[type="number"],
                                                                    #candidateForm button {
                                                                        width: 100%;
                                                                        padding: 10px;
                                                                        box-sizing: border-box;
                                                                    }

                                                                    #candidateForm button {
                                                                        background-color: #4caf50;
                                                                        color: white;
                                                                        border: none;
                                                                        cursor: pointer;
                                                                    }

                                                                    #candidateForm button:hover {
                                                                        background-color: #45a049;
                                                                    }
                                                                </style>

                                                                <script>
                                                                    // Function to open the add candidate modal
                                                                    function openAddEmployerModal() {
                                                                        document.getElementById("addEmployerModal").style.display = "block";
                                                                    }

                                                                    // Function to close the modal
                                                                    function closeAddEmployerModal() {
                                                                        document.getElementById("addEmployerModal").style.display = "none";
                                                                    }

                                                                    $(document).ready(function() {
                                                                        $('#EmployerForm').submit(function(event) {
                                                                            event.preventDefault();

                                                                            // Serialize form data
                                                                            var formData = $(this).serialize();

                                                                            // Send AJAX request
                                                                            $.ajax({
                                                                                type: 'POST',
                                                                                url: '/../controller/employer/employer.php', // URL to your PHP controller
                                                                                data: formData,
                                                                                success: function(response) {
                                                                                    if (response.trim() === "success") {
                                                                                        console.log("employer added successfully");
                                                                                        closeAddEmployerModal();
                                                                                    } else {
                                                                                        console.log("Failed to add employer: " + response);
                                                                                        // Show error message to the user or handle it as needed
                                                                                    }
                                                                                },
                                                                                error: function(xhr, status, error) {
                                                                                    // Handle error response
                                                                                    alert("Error adding employer: " + error); // Show error message or handle it as needed
                                                                                }
                                                                            });
                                                                        });
                                                                    });
                                                                </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    <?php foreach ($employers as $employer) : ?>
                    <div class="job-item employer-item mb-30">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="job-wrapper">
                                    <div class="banck-icon">
                                        <i class="flaticon-dashboard"></i>
                                    </div>
                                    <div class="job-instructor-profile">
                                        <div class="job-instructor-img f-left">
                                            <img src="assets/img/job/j-06.png" alt="">
                                        </div>
                                        <div class="job-instructor-title">
                                            <h5><a href="employer-details.html"><?php echo $employer['company_name']; ?></a></h5>
                                            <div class="job-meta mt-15">
                                                <span><i class="far fa-map-marker-alt"></i> <?php echo $employer['website']; ?></span>
                                            </div>
                                            <div class="emp-rating mt-10">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <form method="POST" action="/BidenBU/employer/delete" style="margin-left: 10px;">
                                                <input type="hidden" name="employer_id " id="employer_id" value="<?php echo $employer['user_id']; ?>">
                                                <!-- Assuming 'id' is the primary key of the job -->
                                                <button type="submit" name="deleteemployer" style="height: 25px; padding: 5px 10px; text-align: center; background-color: transparent; border: none; color: #333; font-size: 12px;">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                            <div class="job-btn empl-btn">

                                                <a class="b-btn b-btn-green" href="employer-details.html">Job Details <i class="far fa-arrow-right"></i>
                                                </a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
<!--                    <div class="job-item employer-item mb-30">-->
<!--                        <div class="row align-items-center">-->
<!--                            <div class="col-lg-12">-->
<!--                                <div class="job-wrapper">-->
<!--                                    <div class="banck-icon">-->
<!--                                        <i class="flaticon-dashboard"></i>-->
<!--                                    </div>-->
<!--                                    <div class="job-instructor-profile">-->
<!--                                        <div class="job-instructor-img f-left">-->
<!--                                            <img src="assets/img/job/j-06.png" alt="">-->
<!--                                        </div>-->
<!--                                        <div class="job-instructor-title">-->
<!--                                            <h5><a href="employer-details.html">MaxPro Software LTD</a></h5>-->
<!--                                            <div class="job-meta mt-15">-->
<!--                                                <span><i class="far fa-briefcase"></i> IT Company LTD</span>-->
<!--                                                <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New York</span>-->
<!--                                            </div>-->
<!--                                            <div class="emp-rating mt-10">-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                            </div>-->
<!--                                            <div class="job-btn empl-btn">-->
<!--                                                <a class="b-btn b-btn-green" href="employer-details.html">Job Details <i class="far fa-arrow-right"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="job-item employer-item mb-30">-->
<!--                        <div class="row align-items-center">-->
<!--                            <div class="col-lg-12">-->
<!--                                <div class="job-wrapper">-->
<!--                                    <div class="banck-icon">-->
<!--                                        <i class="flaticon-dashboard"></i>-->
<!--                                    </div>-->
<!--                                    <div class="job-instructor-profile">-->
<!--                                        <div class="job-instructor-img f-left">-->
<!--                                            <img src="assets/img/job/j-01.png" alt="">-->
<!--                                        </div>-->
<!--                                        <div class="job-instructor-title">-->
<!--                                            <h5><a href="employer-details.html">Green Agro95 LTD</a></h5>-->
<!--                                            <div class="job-meta mt-15">-->
<!--                                                <span><i class="far fa-briefcase"></i> IT Company LTD</span>-->
<!--                                                <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New York</span>-->
<!--                                            </div>-->
<!--                                            <div class="emp-rating mt-10">-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                            </div>-->
<!--                                            <div class="job-btn empl-btn">-->
<!--                                                <a class="b-btn b-btn-green" href="employer-details.html">2 New Jobs <i class="far fa-arrow-right"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="job-item employer-item mb-30">-->
<!--                        <div class="row align-items-center">-->
<!--                            <div class="col-lg-12">-->
<!--                                <div class="job-wrapper">-->
<!--                                    <div class="banck-icon">-->
<!--                                        <i class="flaticon-dashboard"></i>-->
<!--                                    </div>-->
<!--                                    <div class="job-instructor-profile">-->
<!--                                        <div class="job-instructor-img f-left">-->
<!--                                            <img src="assets/img/job/j-02.png" alt="">-->
<!--                                        </div>-->
<!--                                        <div class="job-instructor-title">-->
<!--                                            <h5><a href="employer-details.html">Design Martunt LTD</a></h5>-->
<!--                                            <div class="job-meta mt-15">-->
<!--                                                <span><i class="far fa-briefcase"></i> IT Company LTD</span>-->
<!--                                                <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New York</span>-->
<!--                                            </div>-->
<!--                                            <div class="emp-rating mt-10">-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                            </div>-->
<!--                                            <div class="job-btn empl-btn">-->
<!--                                                <a class="b-btn b-btn-green" href="employer-details.html">2 New Jobs <i class="far fa-arrow-right"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="job-item employer-item mb-30">-->
<!--                        <div class="row align-items-center">-->
<!--                            <div class="col-lg-12">-->
<!--                                <div class="job-wrapper">-->
<!--                                    <div class="banck-icon">-->
<!--                                        <i class="flaticon-dashboard"></i>-->
<!--                                    </div>-->
<!--                                    <div class="job-instructor-profile">-->
<!--                                        <div class="job-instructor-img f-left">-->
<!--                                            <img src="assets/img/job/j-03.png" alt="">-->
<!--                                        </div>-->
<!--                                        <div class="job-instructor-title">-->
<!--                                            <h5><a href="employer-details.html">Animation KIng LTD</a></h5>-->
<!--                                            <div class="job-meta mt-15">-->
<!--                                                <span><i class="far fa-briefcase"></i> IT Company LTD</span>-->
<!--                                                <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New York</span>-->
<!--                                            </div>-->
<!--                                            <div class="emp-rating mt-10">-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                            </div>-->
<!--                                            <div class="job-btn empl-btn">-->
<!--                                                <a class="b-btn b-btn-green" href="employer-details.html">2 New Jobs <i class="far fa-arrow-right"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="job-item employer-item mb-30">-->
<!--                        <div class="row align-items-center">-->
<!--                            <div class="col-lg-12">-->
<!--                                <div class="job-wrapper">-->
<!--                                    <div class="banck-icon">-->
<!--                                        <i class="flaticon-dashboard"></i>-->
<!--                                    </div>-->
<!--                                    <div class="job-instructor-profile">-->
<!--                                        <div class="job-instructor-img f-left">-->
<!--                                            <img src="assets/img/job/j-04.png" alt="">-->
<!--                                        </div>-->
<!--                                        <div class="job-instructor-title">-->
<!--                                            <h5><a href="employer-details.html">Golder Real State LTD</a></h5>-->
<!--                                            <div class="job-meta mt-15">-->
<!--                                                <span><i class="far fa-briefcase"></i> IT Company LTD</span>-->
<!--                                                <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New York</span>-->
<!--                                            </div>-->
<!--                                            <div class="emp-rating mt-10">-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                            </div>-->
<!--                                            <div class="job-btn empl-btn">-->
<!--                                                <a class="b-btn b-btn-green" href="employer-details.html">2 New Jobs <i class="far fa-arrow-right"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="job-item employer-item mb-30">-->
<!--                        <div class="row align-items-center">-->
<!--                            <div class="col-lg-12">-->
<!--                                <div class="job-wrapper">-->
<!--                                    <div class="banck-icon">-->
<!--                                        <i class="flaticon-dashboard"></i>-->
<!--                                    </div>-->
<!--                                    <div class="job-instructor-profile">-->
<!--                                        <div class="job-instructor-img f-left">-->
<!--                                            <img src="assets/img/job/j-05.png" alt="">-->
<!--                                        </div>-->
<!--                                        <div class="job-instructor-title">-->
<!--                                            <h5><a href="employer-details.html">Golder Real State LTD</a></h5>-->
<!--                                            <div class="job-meta mt-15">-->
<!--                                                <span><i class="far fa-briefcase"></i> IT Company LTD</span>-->
<!--                                                <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New York</span>-->
<!--                                            </div>-->
<!--                                            <div class="emp-rating mt-10">-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                            </div>-->
<!--                                            <div class="job-btn empl-btn">-->
<!--                                                <a class="b-btn b-btn-green" href="employer-details.html">2 New Jobs <i class="far fa-arrow-right"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="job-item employer-item mb-30">-->
<!--                        <div class="row align-items-center">-->
<!--                            <div class="col-lg-12">-->
<!--                                <div class="job-wrapper">-->
<!--                                    <div class="banck-icon">-->
<!--                                        <i class="flaticon-dashboard"></i>-->
<!--                                    </div>-->
<!--                                    <div class="job-instructor-profile">-->
<!--                                        <div class="job-instructor-img f-left">-->
<!--                                            <img src="assets/img/job/j-07.png" alt="">-->
<!--                                        </div>-->
<!--                                        <div class="job-instructor-title">-->
<!--                                            <h5><a href="employer-details.html">Play Fun LTD</a></h5>-->
<!--                                            <div class="job-meta mt-15">-->
<!--                                                <span><i class="far fa-briefcase"></i> IT Company LTD</span>-->
<!--                                                <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New York</span>-->
<!--                                            </div>-->
<!--                                            <div class="emp-rating mt-10">-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                            </div>-->
<!--                                            <div class="job-btn empl-btn">-->
<!--                                                <a class="b-btn b-btn-green" href="employer-details.html">2 New Jobs <i class="far fa-arrow-right"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="job-item employer-item mb-30">-->
<!--                        <div class="row align-items-center">-->
<!--                            <div class="col-lg-12">-->
<!--                                <div class="job-wrapper">-->
<!--                                    <div class="banck-icon">-->
<!--                                        <i class="flaticon-dashboard"></i>-->
<!--                                    </div>-->
<!--                                    <div class="job-instructor-profile">-->
<!--                                        <div class="job-instructor-img f-left">-->
<!--                                            <img src="assets/img/job/j-09.png" alt="">-->
<!--                                        </div>-->
<!--                                        <div class="job-instructor-title">-->
<!--                                            <h5><a href="employer-details.html">MaxPro Software LTD</a></h5>-->
<!--                                            <div class="job-meta mt-15">-->
<!--                                                <span><i class="far fa-briefcase"></i> IT Company LTD</span>-->
<!--                                                <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New York</span>-->
<!--                                            </div>-->
<!--                                            <div class="emp-rating mt-10">-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                                <i class="fas fa-star"></i>-->
<!--                                            </div>-->
<!--                                            <div class="job-btn empl-btn">-->
<!--                                                <a class="b-btn b-btn-green" href="employer-details.html">2 New Jobs <i class="far fa-arrow-right"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="basic-pagination mt-30">-->
<!--                        <ul>-->
<!--                            <li><a href="#"><i class="fal fa-angle-left"></i></a></li>-->
<!--                            <li><a href="#">01</a></li>-->
<!--                            <li class="active"><a href="#">02</a></li>-->
<!--                            <li><a href="#">03</a></li>-->
<!--                            <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>-->
<!--                            <li><a href="#"><i class="fal fa-angle-right"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <!-- job-area-end -->

    <!-- login register modal start -->
    <!-- Modal -->
    <div class="modal fade register__modal-area" id="registerModal" tabindex="-1" role="dialog"  aria-hidden="true">
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

<?php require('partials/footer.php')?>
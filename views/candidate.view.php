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
                        <h2>Blog Standard</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Standard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- candidate area start -->
    <section class="candidate__area pt-35 pb-140 grey-bg">
        <div class="container">
            <div class="candidate__inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="candidate__item text-center mb-75">

                            <div class="candidate-plus">
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>
                                <br></br>

                                <!-- "+" button to trigger pop-up window -->
                                <button class="add-candidate-btn" onclick="openAddCandidateModal()" style="background-color: #26ae61; color: #fff; border: none; border-radius: 50%; width: 50px; height: 50px; font-size: 24px; cursor: pointer; transition: background-color 0.3s ease;">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>

                        </div>
                    </div>


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
                    <div id="addCandidateModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeAddCandidateModal()">&times;</span>
                            <!-- Candidate form -->
                            <form id="candidateForm" method="POST" action='/BidenBU/candidate.php'>
                                <input type="text" name="full_name" placeholder="Full Name" required>
                                <input type="text" name="languages" placeholder="Languages" required>
                                <input type="number" name="age" placeholder="Age" required>
                                <input type="text" name="location" placeholder="Location" required>
                                <input type="text" name="expected_salary_range" placeholder="Expected Salary Range" required>
                                <input type="text" name="salary_range" placeholder="Salary Range" required>
                                <input type="number" name="experience_years" placeholder="Experience Years" required>
                                <button type="submit" name="addCandidate">Add Candidate</button>
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
                        function openAddCandidateModal() {
                            document.getElementById("addCandidateModal").style.display = "block";
                        }

                        // Function to close the modal
                        function closeAddCandidateModal() {
                            document.getElementById("addCandidateModal").style.display = "none";
                        }

                        $(document).ready(function() {
                            $('#candidateForm').submit(function(event) {
                                event.preventDefault(); 

                                // Serialize form data
                                var formData = $(this).serialize();

                                // Send AJAX request
                                $.ajax({
                                    type: 'POST',
                                    url: '/../controller/candidate.php', // URL to your PHP controller
                                    data: formData,
                                    success: function(response) {
                                        if (response.trim() === "success") {
                                            console.log("Candidate added successfully");
                                            closeAddCandidateModal();
                                        } else {
                                            console.log("Failed to add candidate: " + response);
                                            // Show error message to the user or handle it as needed
                                        }
                                    },
                                    error: function(xhr, status, error) {
                                        // Handle error response
                                        alert("Error adding candidate: " + error); // Show error message or handle it as needed
                                    }
                                });
                            });
                        });
                    </script>




                    <?php foreach ($candidates as $candidate) : ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="candidate__item text-center mb-75">
                                <div class="candidate__thumb mb-25">
                                    <img src="assets/img/candidate/<?php echo htmlspecialchars($candidate['full_name']); ?>.png" alt="<?php echo htmlspecialchars($candidate['full_name']); ?>">

                                </div>
                                <div class="candidate__content">
                                    <h5><?php echo $candidate['full_name'] . ', ' . $candidate['age']; ?></h5>
                                    <span><?php echo $candidate['languages']; ?></span>

                                    <div class="candidate__info mt-25 mb-30">
                                        <span><i class="far fa-map-marker-alt"></i> <?php echo $candidate['location']; ?></span>
                                        <span><i class="far fa-usd-circle"></i> <?php echo $candidate['salary_range']; ?></span>
                                    </div>
                                </div>
                                <div class="candidate__btn">
                                    <div style="text-align: center;">
                                        <form method="post" action="/BidenBU/candidate.php" style="margin-left: 10px; display: inline-block;">
                                            <input type="hidden" name="candidate_id" value="<?php echo $candidate['candidate_id']; ?>">
                                            <!-- Assuming 'id' is the primary key of the job -->
                                            <button type="submit" name="deleteCandidate" style="height: 25px; padding: 5px 10px; text-align: center; background-color: transparent; border: none; color: #333; font-size: 12px;">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                        <form method="post" action="/BidenBU/candidate.php" style="margin-left: 10px; display: inline-block;">
                                            <button onclick="openUpdateJobModal(<?php echo $candidate['candidate_id']; ?>)" style="height: 25px; padding: 5px 10px; text-align: center; background-color: transparent; border: none; color: #333; font-size: 12px;">
                                                <i class="fa fa-pencil"></i> <!-- Assuming you're using Font Awesome -->
                                            </button>
                                        </form>
                                    </div>

                                    <a href="candidate-details.html" class="b-btn b-btn-green">View Portfolio <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="basic-pagination basic-pagination-2 text-center">
                            <ul>
                                <li><a href="#"><i class="fal fa-angle-left"></i></a></li>
                                <li><a href="#">01</a></li>
                                <li class="active"><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>
                                <li><a href="#"><i class="fal fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- candidate area end -->

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
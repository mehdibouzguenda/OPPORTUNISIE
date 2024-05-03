<?php
require('partials/head.php');
require('partials/nav.php');
?>


<main>
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
                <button class="add-job-btn" onclick="openAddReclamationModal()" style="background-color: #26ae61; color: #fff; border: none; border-radius: 50%; width: 50px; height: 50px; font-size: 24px; cursor: pointer; transition: background-color 0.3s ease;">
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
       <div class="container">
    <div class="row">
        <div class="col-md-7">
            <form action="reclamation.php" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="form-control" placeholder="Search data">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>    
            </form>  
        </div>


    <div class="card mt-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Reclaimer Name</th>
                        <th>Reclamation Description</th>
                        <th>Etat</th>
                        <th>Date</th>
                        <th>Response</th> <!-- New column for response -->
                        <th>Action</th> <!-- New column for delete action -->
                    </tr>
                </thead>
                <tbody>   
                    <?php foreach ($reclamations as $reclamation) { ?>
                        <tr>
                            <td><?= $reclamation['reclaimer_name']; ?></td>
                            <td><?= $reclamation['reclamation_description']; ?></td>
                            <td><?= $reclamation['etat'] ?? 'EN ATTENTE'; ?></td>
                            <td><?= date('Y-m-d H:i:s'); ?></td> <!-- Display current date and time -->
                            <td>
                                <?php if (!empty($reclamation['admin_response'])) : ?>
                                    <?= htmlspecialchars($reclamation['admin_response']); ?>
                                <?php else : ?>
                                    No response yet
                                <?php endif; ?>
                            </td>
                            <td>
                                <form method="post" action="Reclamation.php">
                                    <input type="hidden" name="reclamationId" value="<?= $reclamation['reclamation_id']; ?>">
                                    <button type="submit" name="deleteReclamation" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>   
            </table>           
        </div>
    </div>
</div>



    <div id="addReclamationModal" class="modal" etat="en attente">
        <div class="modal-content">
            <span class="close" onclick="closeAddReclamationModal()">&times;</span>

            <form id="addReclamationForm" method="POST" action="/BidenBU/Reclamation.php">
            <input type="text" id="reclaimerName" name="reclaimerName" minlength="4" maxlength="15" required>
         <br>                
        <?php 
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                   if(empty($_POST['reclaimerName'])){
                    echo ' Le nom est requis !!';
                   }
                }
            ?>

            <textarea id="reclamationDescription" name="reclamationDescription" minlength="5" maxlength="150" required></textarea>
         <br>  
                <button type="submit" name="addReclamation">Add Reclamation</button>
            </form>
            <!-- Add this script inside the <head> section of your HTML -->
<script>
    var textarea = document.getElementById("reclamationDescription"); // Change "message" to the ID of your textarea
    var wordCount = document.getElementById("wordCount");
    var maxWords = 15; 

    textarea.addEventListener("input", function() {
        var words = this.value.match(/\S+/g);
        var wordCountText = "Words: " + (words ? words.length : 0);
        wordCount.textContent = wordCountText;

        if (words && words.length > maxWords) {
            var excessWords = words.length - maxWords;
            this.value = this.value
                .split(/\S+/)
                .slice(0, maxWords)
                .join(" ");
            wordCount.textContent = "Maximum " + maxWords + " words allowed. Excess: " + excessWords;
        }
    });

   
    function containsInappropriateWords(message) {
        var inappropriateWords = [
            "baise", "merde", "enculé", "salope", "con", 
            "connard", "putain", "merde", "enculer", "salope",
            "fuck", "shit", "asshole", "bitch", "cunt",
            "bastard", "dick", "pussy", "ass", "motherfucker","bad","word"
        ]; 
        var messageWords = message.toLowerCase().split(/\s+/);
        for (var i = 0; i < messageWords.length; i++) {
            if (inappropriateWords.includes(messageWords[i])) {
                return true;
            }
        }
        return false;
    }

    document.getElementById("addReclamationForm").addEventListener("submit", function(event) { // Change "contact-form" to the ID of your reclamation form
        var message = document.getElementById("reclamationDescription").value; // Change "message" to the ID of your textarea
        if (containsInappropriateWords(message)) {
            alert("Votre description ne doit pas contenir de mots inappropriés.");
            event.preventDefault(); 
        }
    });
</script>

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
        #addReclamationForm {
            display: grid;
            grid-gap: 10px;
        }

        #addReclamationForm input[type="text"],
        #addReclamationForm textarea,
        #addReclamationForm button {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        #addReclamationForm textarea {
            height: 100px;
        }

        #addReclamationForm button {
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        #addReclamationForm button:hover {
            background-color: #45a049;
        }

        /* Custom error message */
        #errorMessage {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</main>    
         <script>
    document.getElementById('reclamationForm').addEventListener('submit', function(event) {
        var reclaimerName = document.getElementById('reclaimerName').value;
        var reclamationDescription = document.getElementById('reclamationDescription').value;
        
        if (reclaimerName.length < 4 || reclaimerName.length > 15) {
            alert('Reclaimer Name must be between 4 and 15 characters');
            event.preventDefault(); // Prevent form submission
            return;
        }

        if (reclamationDescription.length < 20 || reclamationDescription.length > 150) {
            alert('Reclamation Description must be between 20 and 150 characters');
            event.preventDefault(); // Prevent form submission
            return;
        }
    });
</script> 

            


            <script>


    function validateForm(formId) {
        var form = document.getElementById(formId);
        var inputs = form.querySelectorAll('input, textarea');

        // Check each input within the form
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].hasAttribute('required') && inputs[i].value.trim() === "") {
                alert("Please fill in all fields.");
                return false; // Prevent form submission
            }
        }

        // Additional custom validation if needed

        return true; // Allow form submission
    }
</script>
        </div>
    </div>

    <script>
        function openAddReclamationModal() {
            document.getElementById("addReclamationModal").style.display = "block";
        }

        function closeAddReclamationModal() {
            document.getElementById("addReclamationModal").style.display = "none";
        }

        $(document).ready(function() {
            $('#addReclamationForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                // Serialize form data
                var formData = $(this).serialize();

                // Send AJAX request
                $.ajax({
                    type: 'POST',
                    url: '../controller/Reclamation.php',
                    data: formData,
                    success: function(response) {
                        if (response.trim() === "success") {
                            console.log("Reclamation added successfully");
                            closeAddReclamationModal();
                        } else {
                            console.log("Failed to add reclamation: " + response);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert("Error adding reclamation: " + error);
                    }
                });
            });
        });
    </script>

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
        #addReclamationForm {
            display: grid;
            grid-gap: 10px;
        }

        #addReclamationForm input[type="text"],
        #addReclamationForm textarea,
        #addReclamationForm button {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        #addReclamationForm textarea {
            height: 100px;
        }

        #addReclamationForm button {
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        #addReclamationForm button:hover {
            background-color: #45a049;
        }
    </style>
<!-- 
 

 <?php foreach ($reclamations as $reclamation) : ?>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="reclamation-wrapper mb-30">
            <div class="reclamation-tag mb-30">  -->
                <!-- Display reclaimer name and reclamation date -->
                <!-- <span class="tag-normal"><?php echo htmlspecialchars($reclamation['reclaimer_name']); ?></span>
            </div>
            <div class="reclamation-content">
                <h4><a href="reclamation-details.php"><?php echo htmlspecialchars($reclamation['reclamation_description']); ?></a></h4>
            </div>
            <span class="tag-normal"><?php echo htmlspecialchars($reclamation['etat'] ?? 'EN ATTENTE'); ?></span>
            <div class="reclamation-actions" style="display: flex; align-items: center;"> -->
                <!-- Add the etat field -->
                <!-- Display system date and time -->
                <!-- <span class="tag-normal"><?php echo date('Y-m-d H:i:s'); ?></span>
            </div>



        </div>
    </div>





            </div> -->

                <!-- Delete Reclamation Form -->
                <!-- <form method="post" action="/BidenBU/Reclamation.php">
                    <input type="hidden" name="reclamationId" value="<?php echo $reclamation['reclamation_id']; ?>">
                    <input type="hidden" name="etat" value="en attente"> <!-- Add the 'etat' attribute here -
                    <button type="submit" name="deleteReclamation" style="height: 25px; padding: 5px 10px; text-align: center; background-color: transparent; border: none; color: #333; font-size: 12px;">
                        <i class="fa fa-trash"></i>
                    </button>
                </form> -->
            

                    
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <script>
    $(document).ready(function() {
        // Handle form submission for adding response
        $('.add-response-form').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get data from the form
            var reclamationId = $(this).data('reclamation-id');
            var responseText = $(this).find('textarea[name="response_text"]').val();

            // Send AJAX request to add response
            $.ajax({
                type: 'POST',
                url: '/BidenBU/Reclamation.php', // Update with correct URL
                data: {
                    reclamationId: reclamationId,
                    responseText: responseText,
                    addResponse: true
                },
                success: function(response) {
                    if (response.trim() === "success") {
                        console.log("Response added successfully");
                        // Optionally, update UI to display the newly added response
                    } else {
                        console.log("Failed to add response: " + response);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error adding response: " + error);
                }
            });
        });
    });
</script>














</main>

<?php
require('partials/footer.php');
?>


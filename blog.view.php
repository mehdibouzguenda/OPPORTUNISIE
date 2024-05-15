<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>

<?php 
use core\Database;
use core\App;

// Récupérez l'instance de la base de données
$db = App::resolve(Database::class);
?>


<main>

    <!-- page title area start -->
    <section class="page__title page__title-height d-flex align-items-center" data-background="assets/img/page-title/page-title-1.jpg">
        <div class="hero-shape">
            <span class="circle"></span>
            <span class="circle circle-yellow"></span>
            <span class="shape-plus shape-plus-green">+</span>
            <span class="shape-plus shape-plus-green shape-plus-2">+</span>
            <span class="dot-shape">
                        <img src="../../assets/img/shape/dot-shape.png" alt="dot-shape">
                    </span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-content text-center mt-80">
                        <h2>Blog Grid</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Grid</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->
    

    <!-- blog grid area start -->
    <section class="grid__item pt-80 pb-50">
    <div class="container">
        <!-- Move the search form here -->
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form action="search-results-view.php" method="get" class="search-wrapper text-center">
                <div class="input-group">
                    <input type="text" id="search_query" name="search_query" class="form-control" placeholder="Entrez Titre...">
                     <div class="input-group-append">
                            <button type="submit" onclick="location.href='/BidenBU/blog/search';" class="btn btn-primary btn-search" style="background-color: #26ae61;border-color: #26ae61;"><i class="fa fa-search"></i> Rechercher</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
        <div class="row">
            <!-- Rest of your blog grid content -->
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog__item-2 mb-30 ">

                        <div class="blog__content-2">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="job-wrapper mb-30">
                                    <div class="job-plus">
                                        <br></br>
                                        <br></br>
                                        <br></br>
                                        <br></br>
                                        <br></br>
                                        <br></br>

                                        <!-- "+" button to trigger pop-up window -->
                                        <button class="add-job-btn" onclick="location.href='/BidenBU/blog/add-blog';" style="background-color: #26ae61; color: #fff; border: none; border-radius: 50%; width: 50px; height: 50px; font-size: 24px; cursor: pointer; transition: background-color 0.3s ease;">
                                            <i class="fas fa-plus"></i>

                                        </button>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php foreach ($blogs as $post) : ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog__item-2 mb-30 ">
                        <div class="blog__thumb fix">
                            <a href="blog-details"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
                        </div>
                        <div class="blog__content-2">
                            <div class="blog__date text-center">
                                <span><?php echo date('F j, Y', strtotime($post['created_at'])); ?></span>
                            </div>

                            <div class="blog__meta blog__meta-2">
                                <span><i class="fal fa-user-circle"></i><a href="#"><?php echo $post['author']; ?></a></span>
                                <span><i class="fal fa-comments"></i><a href="#">Com (05)</a></span>
                            </div>
                            <h4><a href="blog-details"><?php echo $post['title']; ?></a></h4>
                            <p><?php echo $post['content']; ?></p>
                            <form method="POST" action="/BidenBU/blog/delete" style="margin-left: 10px;">
                                <input type="hidden" name="blog_id " id="blog_id" value="<?php echo $post['post_id']; ?>">
                                <!-- Assuming 'id' is the primary key of the job -->
                                <button type="submit" name="deleteemployer" style="height: 25px; padding: 5px 10px; text-align: center; background-color: transparent; border: none; color: #333; font-size: 12px;">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                            <a href="blog-details?blog_id=<?php echo $post['post_id']; ?>" class="b-btn b-btn-grey">Read More <i class="far fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                
            <div class="row">
                <div class="col-xl-12">
                    <div class="basic-pagination text-center">
                
                        <ul>
                        <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
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
    </section>
    <!-- blog grid area end -->

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



<?php require('views/partials/footer.php') ?>

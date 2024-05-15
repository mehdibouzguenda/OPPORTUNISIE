<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>


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
                            <h2>Enter received code</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">LOGIN</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- login area start -->
        <section class="login-area pt-80 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                        <div class="section-title text-center ml-50 mr-50 mb-20">
                            <h2>Log In </h2>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="signin-popup-box d-flex justify-content-center">
                            <div class="login-form">
                                <form action="/BidenBU/RestPasswordCode" method="post" onsubmit="return restCodeValidatior()" >
                                    <div class="alert alert-success text-center" id="infoMessage"
                                         style="display: none;">
                                    </div>
                                    <?php
                                    if (isset($errors['info'])) {
                                        ?>
                                        <div class="alert alert-success text-center">
                                            <?php echo $errors['info']; ?>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <div class="input-text">
                                        <input id="code" name="code"  type="text" placeholder="Code">
                                        <i class="la la-user"></i>
                                    </div>

                                    <a href="login" title="">back</a>
                                    <br>

                                    <button type="submit">send</button>
                                </form>
                                <div class="extra-login">
                                    <span>Or</span>
                                    <div class="login-social">
                                        <a class="fb-login" href="#" title=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="tw-login" href="#" title=""><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login area end -->
    </main>

<?php require('views/partials/footer.php') ?>
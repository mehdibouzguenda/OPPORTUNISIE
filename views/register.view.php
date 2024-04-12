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
                            <h2>FAQ</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">REGISTER</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- register area start -->
        <section class="login-area pt-80 pb-80 d-flex justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                        <div class="section-title text-center ml-50 mr-50 mb-20">
                            <h2>Sign Up</h2>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="signin-popup-box">
                            <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Candidate</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Employer</a>
                                </li>
                            </ul>
                            <div class="tab-content d-flex justify-content-center" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="login-form">
                                        <form>
                                            <div class="input-text">
                                                <input type="text" placeholder="Username">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="input-text input-pass">
                                                <input type="password" placeholder="********">
                                            </div>
                                            <div class="input-text input-email">
                                                <input type="email" placeholder="Email">
                                            </div>
                                            <div class="input-text input-phone">
                                                <input type="text" placeholder="Phone">
                                            </div>
                                            <p class="remember-label">
                                                <input type="checkbox" id="A" name="A" value="A"> <label for="A">Remember Me</label>
                                            </p>
                                            <a href="#" title="">Forgot Password?</a>
                                            <button type="submit">Login</button>
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
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="login-form">
                                        <form>
                                            <div class="input-text">
                                                <input type="text" placeholder="Username">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="input-text input-pass">
                                                <input type="password" placeholder="********">
                                            </div>
                                            <div class="input-text input-email">
                                                <input type="email" placeholder="Email">
                                            </div>
                                            <div class="input-text input-phone">
                                                <input type="text" placeholder="Phone">
                                            </div>
                                            <p class="remember-label">
                                                <input type="checkbox" id="A" name="A" value="A"> <label for="A">Remember Me</label>
                                            </p>
                                            <a href="#" title="">Forgot Password?</a>
                                            <button type="submit">Login</button>
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
                </div>
            </div>
        </section>
        <!-- register area end -->
    </main>
<?php require('partials/footer.php') ?>
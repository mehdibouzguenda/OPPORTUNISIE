<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>


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
                        <img src="../../assets/img/shape/dot-shape.png" alt="dot-shape">
                    </span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-content text-center mt-80">
                            <h2>Account Setting</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php">Account</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Setting</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <br><br><br><br><br>
        <div class="container">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                             alt="Maxwell Admin">
                                    </div>
                                    <br>
                                    <h5 class="user-name"><?= $username ?> </h5>
                                    <br>
                                    <h6 class="user-email"><?= $email ?> </h6>
                                </div>
                                <br>
                                <div class="about">
                                    <h5>About</h5>
                                    <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human
                                        experiences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <form method="post" action="/BidenBU/userUpdate">
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mb-2 text-primary">Personal Details</h6>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName">Full Name</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                   placeholder="Enter full name" value=<?= $username ?>>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                   placeholder="Enter email ID" value=<?= $email ?>>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                   placeholder="Enter phone number" value=<?= $phone ?>>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="website">Role</label>
                                            <input type="text" class="form-control" id="role" name="role"
                                                   placeholder="Website url" value=<?= $role ?>>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <!--                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">-->
                                    <!--                                    <h6 class="mt-3 mb-2 text-primary">Address</h6>-->
                                    <!--                                </div>-->
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="Street">password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                   placeholder="Enter Password" >
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <?php if(isset($errors['username'])) :?>
                                                <p style="color:red;"><?= $errors['username'] ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!--                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">-->
                                <!--                                    <div class="form-group">-->
                                <!--                                        <label for="sTate">State</label>-->
                                <!--                                        <input type="text" class="form-control" id="sTate" placeholder="Enter State">-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!--                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">-->
                                <!--                                    <div class="form-group">-->
                                <!--                                        <label for="zIp">Zip Code</label>-->
                                <!--                                        <input type="text" class="form-control" id="zIp" placeholder="Zip Code">-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">

                                            <button type="reset" id="submit" name="submit" class="btn btn-secondary">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <form method="post" action="/BidenBU/userDelete">
                                            <input type="hidden" class="form-control" id="username" name="username"
                                                   placeholder="Enter full name" value=<?= $username ?>>
                                            <input type="hidden" class="form-control" id="email" name="email"
                                                   placeholder="Enter full name" value=<?= $email ?>>
                                            <button type="submit" class="btn btn-secondary btn-danger">Delete Account
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
    </main>

<?php require('views/partials/footer.php') ?>
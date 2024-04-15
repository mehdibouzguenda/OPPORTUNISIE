

<!-- header-start -->
<header class="header-transparent">
    <div id="sticky-header" class="main-menu-area menu-01 header-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo/logo.png" alt="" /></a>
                    </div>
                    <div class="logo-black">
                        <a href="index.php"><img src="assets/img/logo/logo-black.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-6 col-sm-6 col-6">
                    <div class="header-right d-flex justify-content-end justify-content-lg-between align-items-center">
                        <div class="main-menu d-none d-lg-block">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class=" <?php  if($_SERVER['REQUEST_URI']==='/BidenBU/') {echo'active' ; } else {echo'';} ?>"><a href="/BidenBU">home <i class="far"></i></a></li>
                                    <li class=" <?php  if($_SERVER['REQUEST_URI']==='/BidenBU/job.php') {echo'active' ; } ?>"><a href="job.php">Jobs <i class="far "></i></a> </li>
                                    <li class=" <?php  if($_SERVER['REQUEST_URI']==='/BidenBU/candidate.php') {echo'active' ; } ?>"><a href="candidate.php">Candidates <i class="far"></i></a></li>
                                    <li class=" <?php  if($_SERVER['REQUEST_URI']==='/BidenBU/employer.php') {echo'active' ; } ?>"><a href="employer.php">Employers <i class="far"></i></a></li>
                                    <li class=" <?php  if($_SERVER['REQUEST_URI']==='/BidenBU/about.php') {echo'active' ; } ?>"><a href="about.php">About <i class="far"></i></a> </li>
                                    <li class=" <?php  if($_SERVER['REQUEST_URI']==='/BidenBU/job.php') {echo'active' ; } ?>"><a href="contact.php">Upload Resume <i class="far fa-cloud-upload"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <?php if($_SESSION['user']?? false): ?>
                            <div class="header-btn d-none d-lg-block">
                                <div class="hedder-button">
                                    <img src="assets/img/team/mehdi.JPG"  alt="Avatar" style="position: relative; width: 60px; height: 60px; overflow: hidden; object-fit: cover; object-position: 0px 20%; border-radius: 50%;">
                                </div>
                            </div>
                        <?php else:?>
                            <div class="header-btn d-none d-lg-block">
                                <div class="hedder-button">
                                    <a class="h-btn d-lg-none d-xl-inline-block" href="register.php" ><i class="far fa-user-circle"></i> Sign In</a>
                                    <a class="h-btn h-btn-green" href="login.php" ><i class="far fa-lock-alt"></i> Log In</a>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="sidebar__menu d-lg-none">
                            <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-start -->

<!-- sidebar area start -->
<section class="sidebar__area">
    <div class="sidebar__shape" data-background="assets/img/shape/hexa.png"></div>
    <div class="sidebar__wrapper">
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <span><i class="fal fa-times"></i></span>
                <span>close</span>
            </button>
        </div>
        <div class="sidebar__content">
            <div class="logo mb-40">
                <a href="index.php">
                    <img src="assets/img/logo/logo-white.png" alt="logo">
                </a>
            </div>
            <div class="mobile-menu d-block"></div>
            <div class="hedder-button mt-30">
                <a class="h-btn h-btn-2 mb-15" href="#"><i class="far fa-user-circle"></i> Sign In</a>
                <a class="h-btn h-btn-green h-btn-white" href="#"><i class="far fa-lock-alt"></i> Log In</a>
            </div>
        </div>
    </div>
</section>
<div class="body-overlay"></div>
<!-- sidebar area end -->
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
                        <h2>Add Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- contact area start -->
    <section class="contact__area pt-50 pb-150 grey-bg">
        <div class="container">
            <div class="contact__inner">
                <div class="row">
                    <div class="col-xl-8 col-lg-6">
                        <div class="contact__form">
                            <form action="/BidenBU/blog/create" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="contact__input">
                                            <input id="name" name="name"  type="text" placeholder="Your Full Name">
                                            <i class="far fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact__input">
                                            <input id="email" name="email"  type="email" placeholder="Email Address">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact__input">
                                            <input id="title" name="title"  type="text" placeholder="Blog Title">
                                            <i class="far fa-text"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact__input">
                                            <textarea id="cmnt" name="cmnt"  placeholder="Write here"></textarea>
                                            <i class="far fa-pen-alt"></i>nm
                                        </div>
                                    </div>
                                    <br>
                                    <?php if(isset($errors['username'])) :?>
                                        <p style="color:red;"><?= $errors['username'] ?></p>
                                    <?php endif; ?>
                                    <div class="col-xl-12">
                                        <button type="submit" class="b-btn b-btn-green w-100">Send Blog <i class="far fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require('views/partials/footer.php') ?>

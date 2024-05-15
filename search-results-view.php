<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<main>




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
                <a href="blog-details" class="b-btn b-btn-grey">Read More <i class="far fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>


</main>


<?php require('views/partials/footer.php') ?>
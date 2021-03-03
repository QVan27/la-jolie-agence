<?php
/*
Template Name: Gallerie
*/
get_header(); ?>
<section id="gallery">
    <div class="gallery-content">
        <div class="page-title">
            <h1>GALLERY</h1>
            <div class="heart-divider">
                <span class="grey-line"></span>
                <i class="fas fa-heart pink-heart"></i>
                <i class="fas fa-heart grey-heart"></i>
                <span class="grey-line"></span>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis
            </p>
        </div>
        <div class="gallery-img">
            <div class="boxImg1">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/gallery1.jpg'; ?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/gallery2.jpg'; ?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/gallery3.jpg'; ?>" alt="">
            </div>
            <div class="boxImg2">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/gallery4.jpg'; ?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/gallery5.jpg'; ?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/gallery6.jpg'; ?>" alt="">
            </div>
            <div class="boxImg3">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/gallery7.jpg'; ?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/gallery8.jpg'; ?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/gallery9.jpg'; ?>" alt="">
            </div>
        </div>
    </div>
    <div class="parallax-gallery">
        <div id="save-the-date">
            <div id="save">Save</div>
            <div id="the-date">The Date</div>
            <div id="date">- 19<span class="pink-dot">.</span>12<span class="pink-dot">.</span>16 -</div>
        </div>
    </div>
</section>



<?php
get_footer();

<?php
/*
Template Name: Home
*/

get_header(); ?>
<section id="banner">
    <div class="flexslider">
        <div class="content">
            <div id="save-the-date">
                <div id="save">Save</div>
                <div id="the-date">The Date</div>
                <div id="date">- 19<span class="pink-dot">.</span>12<span class="pink-dot">.</span>16 -</div>
            </div>
            <div class="married">
                <p>*** we are getting married ***</p>
            </div>
            <div class="heart-divider">
                <span class="white-line"></span>
                <i class="fas fa-heart pink-heart"></i>
                <i class="fas fa-heart white-heart"></i>
                <span class="white-line"></span>
            </div>
        </div>
        <ul class="slides">
            <li><img src="<?php echo get_template_directory_uri() . '/asset/img/slides1.jpg'; ?>" /></li>
            <li><img src="<?php echo get_template_directory_uri() . '/asset/img/slides2.jpg'; ?>" /></li>
            <li><img src="<?php echo get_template_directory_uri() . '/asset/img/slides3.jpg'; ?>" /></li>
            <li><img src="<?php echo get_template_directory_uri() . '/asset/img/slides4.jpg'; ?>" /></li>
        </ul>
    </div>
</section>

<section id="second">
    <div class="box-content">
        <h1>la jolie agence</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui hic neque, distinctio facilis animi vero earum nemo, sapiente laudantium ipsa, veniam corrupti placeat. Inventore non aspernatur ad maiores, dolorum amet?</p>
        <div class="heart-divider">
            <i class="fas fa-heart pink-heart"></i>
            <i class="fas fa-heart white-heart"></i>
        </div>
    </div>
    <div class="description">
        <div class="overlay">
            <img src="<?php echo get_template_directory_uri() . '/asset/img/married.jpg'; ?>" alt="">
            <div class="middle">
                <a href="<?php echo esc_url(home_url('about')); ?>" class="text">À propos</a>
            </div>
        </div>
        <p><a href="<?php echo esc_url(home_url('about')); ?>" class="link">Je suis "La Jolie Agence"</a>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, esse laboriosam. Commodi nam similique reiciendis eveniet aliquam a facilis optio! Eius corporis veniam a, voluptatum eligendi, sit nulla fuga voluptatibus recusandae quasi necessitatibus eum sint numquam doloribus et aliquid alias.</p>
    </div>
</section>
<?php
get_footer();

<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package la_jolie_agence
 */

?>
<!-- footer -->
<div class="push"></div>
</div><!-- #wrap -->
<footer class="footer" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/asset/img/parralax1.jpg' ?>">
    <div class="wrapper">
        <div class="minibox">

            <h3 class="title-footer">La Jolie Agence</h3>
            <div class="box-content-footer">
                <!-- <hr> -->
                <p class="text-footer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ex error atque sit alias distinctio laboriosam? Reprehenderit, sit et quisquam odio facere unde harum, esse quos ipsa cupiditate aliquid aut?</p>
            </div>
        </div>

        <div class="vertical-footer"></div>

        <div class="minibox">
            <h3 class="title-footer">Contactez-nous</h3>
            <!-- <hr> -->
            <div class="box-content-footer">
                <div class="box-call">
                    <div class="contact">
                        <i class="fas fa-phone-square-alt"></i>
                        <a class="text-footer" href="tel:+33711223344">O7 11 22 33 44</a>
                    </div>

                    <div class="contact">
                        <i class="fas fa-envelope"></i>
                        <a href=mailto:LaJolieAgence@gmail.com"" class="text-footer">LaJolieAgence@gmail.com</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="vertical-footer"></div>

        <div class="minibox">
            <h3 class="title-footer">Suivez-nous</h3>
            <!-- <hr> -->
            <div class="box-content-footer">
                <a class="social-icons" href=""><i class="fab fa-facebook-square fa-2x"></i></a>
                <a class="social-icons" href=""></i><i class="fab fa-instagram fa-2x"></i></a>
                <a class="social-icons" href=""><i class="fab fa-youtube fa-2x"></i></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
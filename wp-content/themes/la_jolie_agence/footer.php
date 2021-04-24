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
<!-- <div class="locomotive-section" >  -->
<footer class="footer" data-scroll-section>
    <!-- <div class="opacityFooter"></div> -->
    <div class="wrapper">
        <div class="box1">
            <div class="minibox">
                <h3 class="title-footer">certifiée</h3>
                <div class="box-content-footer">
                    <a href="https://www.bschoolevents.fr/">
                        <img src="<?php echo get_template_directory_uri() . '/asset/img/logo_bschoolevents.svg' ?>" alt="B School Events">
                    </a>
                </div>
            </div>
            <div class="minibox">
                <h3 class="title-footer">Contactez-nous</h3>
                <div class="box-content-footer">
                    <div class="box-call">
                        <p>23 chez Neron | 33820 Saint-Palais</p>
                        <p>Téléphone : <a href="tel:+33675458691">06 75 45 86 91</a></p>
                        <p>E-mail : <a href="mailto:LaJolieAgence@gmail.com" class="text-footer">LaJolieAgence@gmail.com</a></p>
                        <p>RC Pro :</p>
                        <p>SIRET : 893 717 538 00019</p>
                    </div>
                </div>
            </div>
            <div class="minibox">
                <h3 class="title-footer">Suivez-nous</h3>
                <div class="box-content-footer">
                    <a class="social-icons" href=""><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a class="social-icons" href=""></i><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="box2">
            <p>La Jolie Agence. Wedding Planner en Nouvelle-Aquitaine. Logo et chartre graphique réalisée par la talentueuse <a href="https://www.leila-petiteagence.fr">Leaïla-petiteagence</a></p>
            <ul>
                <li><a href="">Cadeau Gratuit</a></li>
                <li><a href="">Dons Associatifs</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Mentions légales</a></li>
                <li><a href="">Politique de confidentialité</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- </div> -->
</div>

<?php wp_footer(); ?>

</body>

</html>
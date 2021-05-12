<?php
/*
Template Name: Home
*/
get_header(); ?>
<section id="banner" data-scroll-section>
    <div class="flexslider">

        <?php $args = array(
            'post_type' => 'slider',
            'post_status' => 'publish',
            'posts_per_page' => '4',
            'orderby' => 'date',
            'order' => 'ASC',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) { ?>
            <ul class="slides">
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post();
                ?>
                    <li><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" /></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</section>

<section id="second" data-scroll-section>
    <div class="second-box-1"></div>
    <div class="second-box-2">
        <div class="second-box-content" data-scroll="" data-scroll-delay="0.09" data-scroll-speed="1">
            <h1>Wedding Planner en Nouvelle Aquitaine</h1>
            <div class="second-box-content-p">
                <p>L'agence accompagne les futur(e)s marié (e)s et les mari (é)s
                    dans la création de leur évènement.
                </p>
                <p>a Jolie Agence est spécialisée dans l'organisation de mariag
                    son expertise, son authenticité et sa créativité vont vous guid
                    durant les préparatifs.</p>
                <p>Confiez l'organisation de vos évènements à des professionne
                    de l'évènementiel, vous pourrez ainsi profitez de votre gran
                    moment en toute sérénité.
                </p>
            </div>
            <a href="#">En savoir plus</a>
        </div>
    </div>
</section>
<section id="third" data-scroll-section>
    <div class="third-box-1">
        <div class="third-box-content" data-scroll="" data-scroll-delay="0.09" data-scroll-speed="1" data-scroll-call="dynamicColor" data-scroll-repeat="">
            <h2>Qui sommes nous ?</h2>
            <p class="adeline">Adeline ROUX - La Jolie Agence</p>
            <div class="third-box-content-p">
                <p class="wedding">WEDDING & EVENT PLANNER AU PAYS BASQUE, GIRONDE, CHARENTE-MARITIME ET PARTOUT OU IL Y A DU BONHEUR !</p>
                <p class="tabac"> La Jolie Agence crée sur mesure chaque évènements afin qu'il soit unique. L'agence possède un carnet d'adresse de professionnels de confiance pour que votre journée soit à votre image et à la hauteur de vos envies!</p>
                <p class="italic">"Chaque nouvelle rencontre est un voyage"</p>
            </div>
            <a href="#">En savoir plus</a>
        </div>
    </div>
    <div class="third-box-2"></div>
</section>
<section id="fourth" data-scroll-section>
    <div class="overlay-fourth"></div>
    <div class="fourth-box-content">
        <h3>WEDDING PLANNER EN NOUVELLE AQUITAINE</h3>
        <p class="push-fourth-content">Fermez les yeux... Imaginez...</p>
        <p class="laj-right">La Jolie Agence le créer pour vous !</p>
    </div>
</section>
<section id="fifth" data-scroll-section>

</section>


<?php
get_footer();

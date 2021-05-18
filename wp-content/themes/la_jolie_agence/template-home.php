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
            <a class="cta-see-more-tabac" href="#">En savoir plus</a>
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
    <h2>Nos Prestations</h2>
    <div class="fifth-bigbox-prestation">
        <div id="fifth-content">
            <div class="container-card-flip">
                <div class="container-prestation">
                    <div class="flipper">
                        <div class="front">
                            <div class="img-card img-card-one">
                                <style>
                                    .img-card-one {
                                        background: url(<?= get_template_directory_uri() . '/asset/img/wedding-day.jpg' ?>) no-repeat center;
                                        background-size: cover;
                                    }
                                </style>
                            </div>
                            <p class="fifth-caption">weeding day</p>
                        </div>
                        <div class="back">
                            <a href="https://en.wikipedia.org/wiki/Cherry_blossom" target="_blank">
                                <h1>Organisation complète avec la coordination du Jour J</h1>
                            </a>
                            <p class="date">23/07/1997</p>
                            <p class="description">A cherry blossom is the flower of any of several trees of genus Prunus, particularly the Japanese cherry, Prunus serrulata, which is called sakura after the Japanese (桜 or 櫻; さくら).</p>
                        </div>
                    </div>
                </div>
                <a class="cta-see-more-tabac btn-card-home" href="#">En savoir plus</a>
            </div>

            <div class="container-card-flip">
                <div class="container-prestation">
                    <div class="flipper">
                        <div class="front">
                            <div class="img-card img-card-two">
                                <style>
                                    .img-card-two {
                                        background: url(<?= get_template_directory_uri() . '/asset/img/sweet-moments.jpg' ?>) no-repeat center;
                                        background-size: cover;
                                    }
                                </style>
                            </div>
                            <p class="fifth-caption">sweet moments</p>
                        </div>
                        <div class="back">
                            <a href="https://en.wikipedia.org/wiki/Tulip" target="_blank">
                                <h1>Tulip</h1>
                            </a>
                            <p class="date">14/07/2001</p>
                            <p class="description">Tulips (Tulipa) form a genus of spring-blooming perennial herbaceous bulbiferous geophytes. The flowers are usually large, showy and brightly coloured, generally red, yellow, or white.</p>
                        </div>
                    </div>
                </div>
                <a class="cta-see-more-tabac btn-card-home" href="#">En savoir plus</a>
            </div>

            <div class="container-card-flip">
                <div class="container-prestation">
                    <div class="flipper">
                        <div class="front">
                            <div class="img-card img-card-three">
                                <style>
                                    .img-card-three {
                                        background: url(<?= get_template_directory_uri() . '/asset/img/wedding-temoins.jpg' ?>) no-repeat center;
                                        background-size: cover;
                                    }
                                </style>
                            </div>
                            <p class="fifth-caption">wedding temoins</p>
                        </div>
                        <div class="back">
                            <a href="https://en.wikipedia.org/wiki/Lavandula" target="_blank">
                                <h1>Lavender</h1>
                            </a>
                            <p class="date">06/08/2004</p>
                            <p class="description">Lavandula is a genus of 47 known species of flowering plants in the mint family. The most widely cultivated species is often referred to as lavender, and there is a color named for the shade of its the flowers. </p>
                        </div>
                    </div>
                </div>
                <a class="cta-see-more-tabac btn-card-home" href="#">En savoir plus</a>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();

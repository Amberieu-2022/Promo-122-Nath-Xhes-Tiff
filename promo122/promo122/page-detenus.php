<?php get_header(); ?>

<h2 class="carcerale_read_detenu">Présentation des <?php the_title(); ?></h2>
<main id="container">
    <?php
    // Reprend les arguments dxe la function register_post_type dans functions.php
    $args = array(
        'post_type' => 'detenu'
    );
    $students = new WP_Query($args);
    if ($students->have_posts()) {
        while ($students->have_posts()) {
            $students->the_post();
    ?>      
            <div class="case-detenu">
                <div class="face-detenu">
                    <figure>
                        <?php
                        if (get_field('photo')) : ?>
                            <img src="<?php the_field('photo'); ?>" alt="<?php the_field('prenom') ?>">
                        <?php endif; ?>
                    </figure>
                    <div class="barreaux">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/barreau-left.png" alt="barreau-left" class="barreau-l">
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/barreau-right.png" alt="barreau-right" class="barreau-r">
                        </a>
                    </div>
                </div>
                <div class="desc-detenu">
                    <p class="name">Détenu :
                        <?php the_field('prenom') ?></p>
                    <span>Mise en examen pour</span>
                    <div class="direction-art">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/Ellipse 20.png" alt="ellipse">
                            <p><?php the_field('delit') ?></p>
                        </figure>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="click_det">En savoir plus sur
                        <strong><?php the_field('prenom') ?></strong>
                    </a>
                </div>
            </div>
    <?php
        }
    }
    ?>
</main>
<section class="director">
    <h2>Directeur de la prison</h2>
    <div class="cedric">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/ced.png" alt="">
        </figure>
        <div class="descript-cedric">
            <p>
                Surnommé Le Boss, Mr Bélanger est redouter de toute la prison !
            </p>
            <p>
                Aucun détenus ne lui résiste !
            </p>
            <p>
                Ses sanctions sont sévères, son regard vous fait froid dans le dos, et son odeur ressemble au cassoulet servi lors de la gamelle !
            </p>
            <p>
                Il peut cependant parfois se montrer agréable envers ses chouchous (oui Mr le Directeur fait du favoritisme !).
            </p>
            <p>
                Mais depuis quelques jours ont n'entends plus trop Mr le Directeur.
            </p>
            <p>
                Les mouches l'embêtent, la chaleur l'insupporte, certains de ses prisonniers maladent se retrouve à l'infirmerie ...
            </p>
            <p>
                Rien ne va plus pour Le Boss.
            </p>
            <p>
                Ça me dérange pas, moi j'aime bien !
            </p>
        </div>
    </div>
</section>



<?php get_footer(); ?>
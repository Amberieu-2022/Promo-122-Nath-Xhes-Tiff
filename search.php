<?php get_header(); ?>
<div id="content_result_search" class="row-limit-size">
    <h2 class="carcerale_read_detenu">Voici le résultat de votre recherche pour : <?php the_title(); ?></h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="result_search">
                <?php the_content(); ?>
                <a href="<?php the_permalink(); ?>">
                    Accéder au contenu
                </a>
            </div>

    <?php endwhile;
    endif; ?>
</div>
<?php get_footer(); ?>
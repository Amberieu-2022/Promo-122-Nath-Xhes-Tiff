<?php get_header(); ?>

<!-- A retenir => 
    Les fonctions en the_ affichent directement la donnée dans le template ;
    Les fonctions en get_ la récupèrent sans l’afficher, en vue d’un traitement.
  -->
<h2>Cellules</h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="article" class="row-limit-size">
      <div class="content-art">
        <figure class="individu">
          <?php
          if (get_field('photo_art')) : ?>
            <img src="<?php the_field('photo_art'); ?>" alt="<?php the_field('prenom') ?>" >
          <?php endif; ?>
        </figure>
        <figure class="note">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/img/feuille1.png" alt="image de feuille">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
          <h3>- <?php the_author_link(); ?></h3>
        </figure>
        <figure class="img_art">
          <?php the_post_thumbnail(); ?>
        </figure>
      </div>
    </div>

<?php endwhile;
endif;
?>
<div class="sitenavigation">
    <div class="sitenavigationprev">
        <?php previous_post_link( 'Article Précédent<br>%link' ); ?>
    </div>
    <div class="sitenavigation__next">
        <?php next_post_link( 'Article Suivant<br>%link' ); ?> 
    </div>
</div>
<?php get_footer(); ?>
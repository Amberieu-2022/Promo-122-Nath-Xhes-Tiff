<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2 class="carcerale_read_detenu">Dossier carcérale de <?php the_title(); ?></h2>
        <div class="background-prison">
            <div id="block-perso">
                <figure id="perso">
                    <?php
                    if (get_field('photo_simple')) : ?>
                        <img src="<?php the_field('photo_simple'); ?>" alt="<?php the_field('prenom') ?>">
                    <?php endif; ?>
                </figure>
                <h3><?php the_field('nom') ?>
                <?php the_field('prenom') ?>
                </h3>
                <p>
                    Emprisoné(e) à :
                    <strong><?php the_field('activity_area') ?></strong>
                </p>
                <p>
                    Ses qualités :
                    <?php the_field('quality') ?>
                </p>
                <p>
                    Ses défauts :
                    <?php the_field('defaut') ?>
                </p>
                <div class="contact-content">
                    <div>
                        <div class="contact">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/telephone.png" alt="telephone">
                            </figure>
                            <span><?php the_field('phone') ?></span>
                        </div>
                        <div class="contact">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/enveloppe.png" alt="enveloppe-mail">
                            </figure>
                            <span><?php the_field('email') ?></span>
                        </div>
                    </div>
                    <div class="contact-link">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/linkedin_blanc.png" alt="logo-linkedin">
                        </figure>
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/github_blanc" alt="logo-github">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

<?php endwhile;
endif; ?>





<?php get_footer(); ?>
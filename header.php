<!-- Sous templates -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if (is_search()) :
                echo bloginfo('name').' | Résultats de recherche pour "'.get_search_query().'" ';

            else :
                wp_title('|', true, 'right');
            endif;

            bloginfo('name');
        ?>
    </title>
    <!-- Cette fonction sert à déclarer les chargement de scripts et des styles (Elle est essentiel au bon fonctionnement de notre thème)-->
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header <?php body_class('header'); ?>>

        <!-- theme_location permets de definir le slug de l'emplacement parmi ceux défini dans functions.php -->
        <section id="top_bar">
            <div id="content-burger">
                <div id="burger-menu"></div>
            </div>
            <nav id="menu">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="Logo">
                </a>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-left',
                    'menu_id' => 'main-left', // ma classe personnalisée 
                ));
                ?>
                <div id="section_log_search">
                    <?php get_search_form(); ?>
                    <?php
                    if (is_user_logged_in()) :
                        $current_user = wp_get_current_user();
                    ?>
                        <p class="log_session">
                            <?php echo $current_user->user_firstname; ?>
                            <a href="<?php echo wp_logout_url(); ?>"> Déconnexion </a>
                        </p>
                    <?php else : ?>
                        <p class="log_session">
                            <a href="<?php echo wp_login_url(); ?>"> Connexion </a>
                        </p>
                    <?php endif; ?>
                </div>
            </nav>
        </section>
    </header>
</body>

</html>
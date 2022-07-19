<form action="<?php echo home_url( '/' ); ?>" method="get" id="search_bar">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Tapez votre recherche ici..."/>
    <input id="submit" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/inc/img/loupe.png" />
</form>
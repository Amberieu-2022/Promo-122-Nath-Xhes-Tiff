<?php get_header(); ?>
    <content id='content-liste'>
        <h1>Articles catégorie</h1>
        <h2>Liste des articles arrêté</h2>
            <?php $_GET['cat'] ?>
            <?php $posts = query_posts('cat=' . $_GET['cat']) ?>
        <ul>
            <?php foreach($posts as $post){ ?>
                <li><a href='<?php the_permalink() ?>'><?= $post -> post_title ?></a></li>
            <?php } ?>
        </ul>
    </content>
<?php get_footer(); ?>
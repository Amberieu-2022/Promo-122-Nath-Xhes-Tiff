<?php get_header(); ?>
    <content id='content-liste'>
        <h1>Catégories</h1>
        <h2>Liste des catégories arrêté</h2>
        <ul id='list-categories'>
            <?php wp_list_categories('title_li') ?>
        </ul>
    </content>
    
    <?php $id_cat = $_GET['cat'] ?>

    <?php if($id_cat){ ?>
        
    <?php } ?>
<?php get_footer(); ?>
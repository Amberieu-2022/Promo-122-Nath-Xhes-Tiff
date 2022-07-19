
<?php get_header(); ?>

<content id='content-liste'>
        <h1>Tags</h1>
        <h2>Liste des tags arrêté</h2>
        <ul id='list-categories'>
        <?php 
            $tags[] = get_tags();
            $tagsF = [];
            # push the tags with foreach in a array (tagsF) #
            foreach($tags[0] as $tag){ ?>
                <?php 
                    array_push($tagsF, $tag);
                    global $tagsF;
                ?>         
        <?php } ?>
        <?php for($i = 0; $i < count($tagsF); $i++){ ?>      
            <li><a href='<?= get_tag_link($tagsF[$i]->term_id) ?>'>#<?= $tagsF[$i]->name ?></a></li>
        <?php } ?> 
        </ul>
    </content>

<?php get_footer(); ?>
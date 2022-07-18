<?php
// On appelle le templates header.php
get_header();
?>
<!-- Front-page = Accueil -->
<?php //var_dump( is_front_page() ); die; 
?>
<div id="img-pres">
    <img id="prison" src="<?php echo get_template_directory_uri(); ?>/inc/img/prison.jpg" alt="photo-accueil">
    <img id="jarod" src="<?php echo get_template_directory_uri(); ?>/inc/img/Jarod-header-right.png" alt="jarod">
    <img id="xhesika" src="<?php echo get_template_directory_uri(); ?>/inc/img/Xhes-header-left.png" alt="xhesika">
</div>

<!-- Généralement dans le fichier index nous allons souvent retrouvez des boucle -->
<section id="section-article">
    <h2>Article</h2>
    <article id="article">
        <div id="info-article">
            <div>
                <?php
                echo do_shortcode('[smartslider3 slider="2"]');
                ?>
                <a href="articles">Voir les autres Articles</a>
            </div>
        </div>
    </article>
</section>
<section id="categories">
    <article>
        <h2>Catégories en tendances</h2>
        <ul>
            <!-- category wp -->
            
            <?php
               
                    $categories[] = get_categories();
                    $categoriesF = [];
                    # push the tags with foreach in a array (categoriesF) #
                    foreach ($categories[0] as $category) { ?>
                        <?php
                            array_push($categoriesF, $category);
                            global $categoriesF;
                        ?>
                <?php }
                ?>
                <!-- loop 10 times -->
                <?php for ($i = 0; $i < 10; $i++) { ?>
                    <li><a href="<?= get_category_link($categoriesF[$i]->term_id) ?>"><?= $categoriesF[$i]->name ?></a></li>
            <?php  } ?>
        </ul>

    </article>
</section>
<section id="tags">
    <article>
        <h2>Tags en tendances</h2>
        <ul>
            <!--  tags wp  -->
            <?php
            $tags[] = get_tags();
            $tagsF = [];
            # push the tags with foreach in a array (tagsF) #
            foreach ($tags[0] as $tag) { ?>
                <?php
                array_push($tagsF, $tag);
                global $tagsF;
                ?>
            <?php } ?>
            <!-- loop 10 times -->
            <?php for ($i = 0; $i < 10; $i++) { ?>

                <li><a href='<?= get_tag_link($tagsF[$i]->term_id) ?>'>#<?= $tagsF[$i]->name ?></a></li>
                
            <?php } ?>
        </ul>
    </article>
</section>
<section id="presentation">
    <article>
        <h2>Présentation promo</h2>
        <div id="img-text">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/note-s.png" alt="note-s">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim excepturi quam ullam earum amet et error, distinctio dolorum tempora, quia mollitia, nisi dignissimos vero aut veniam? Totam itaque ut sed quidem. Quam dolorem molestias beatae, sunt earum nihil minus repudiandae qui repellendus doloremque. Assumenda quasi dolorem cum? Similique impedit ad mollitia fuga accusantium eos enim dolores amet totam. Corporis unde, qui quod accusamus dolores molestias atque tempora quis, optio, commodi sint? Ut, quo modi placeat repellat beatae facere hic, labore </p>
        </div>
    </article>
</section>
<?php
// On appelle le templates footer.php
get_footer();
?>
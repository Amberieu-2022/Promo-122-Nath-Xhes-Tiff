<!-- La page regroupant tout les articles -->
<?php get_header(); ?>
<div id="content" class="row-limit-size">
	<h2 class="carcerale_read_detenu">CELLULES</h2>
	<div id="big-bloc">
		<div id="cont">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<a href="<?php the_permalink(); ?>">
					<div class="lit-bloc">
						<div id="img-box">
							<h3><?php the_author_link(); ?></h3>
							<figure>
								<?php the_post_thumbnail(); ?>
							</figure>
							<h3>- <?php the_title(); ?></h3>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/inc/img/balles.png" alt="" style="opacity: 0.9;">
					</div>
				</a>
			<?php endwhile;
			endif; ?>
			<?php the_posts_pagination(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
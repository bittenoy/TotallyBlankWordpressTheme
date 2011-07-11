<?php get_header(); ?>

<?php while ( have_posts() ) : the_post() ?>

	<section>
		<?php 	
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
			<aside>
				<?php the_post_thumbnail(); ?>
			</aside>
		<?php } ?>


		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<?php the_content(); ?>

	</section>


<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
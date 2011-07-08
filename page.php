<?php get_header(); ?>

<?php while ( have_posts() ) : the_post() ?>

	<section>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<?php the_content(); ?>

	</section>


<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
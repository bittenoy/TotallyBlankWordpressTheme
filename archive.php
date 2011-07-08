<?php get_header(); ?>

<h2><?php the_time() ?></h2>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
	
		<article>

			<a href="<?php the_permalink() ?>">
			<?php the_title(); ?>
			</a>

			<?php echo get_the_date( ); ?> <!-- Date published -->
			<?php the_time(); ?>  <!-- Time published -->
			<?php  the_author(); ?><br /> <!-- Author of the post -->

			<?php the_excerpt(); ?>
		
		</article>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

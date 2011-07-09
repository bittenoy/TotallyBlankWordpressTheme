<?php get_header(); ?>

<?php if ( is_archive() ) { ?>
	<!-- See options: http://codex.wordpress.org/Formatting_Date_and_Time -->
       <?php /* If this is a daily archive */  if (is_day()) { ?>
        <h2><?php echo get_the_date( ); ?></h2>
       <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2><?php the_time('F Y'); ?></h2>
       <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2><?php the_time('Y'); ?></h2>

       <?php } ?>
<?php } ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
	
		<article>

			<?php 	
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			} ?>


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

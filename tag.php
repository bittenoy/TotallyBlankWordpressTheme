<?php get_header(); ?>

<?php if (is_tag()) { ?>

	<h2><?php single_tag_title(); ?></h2>

<?php } ?> 
 
<?php if (have_posts()) : ?>

	 <?php while (have_posts()) : the_post(); ?>
	
		<article>

			<?php 	
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
				<aside>
					<?php the_post_thumbnail(); ?>
				</aside>
			<?php } ?>


			<a href="<?php the_permalink() ?>">
			<?php the_title(); ?>
			</a>
			
			<?php echo get_the_date( ); ?> <!-- Date published -->
			<?php the_time(); ?>  <!-- Time published -->
			<?php  the_author(); ?><br /> <!-- Author of the post -->
			

			<?php the_excerpt(); ?> <!-- An excerpt of post --> 

		</article>

	 <?php endwhile; ?>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

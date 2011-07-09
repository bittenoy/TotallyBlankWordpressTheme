<?php get_header(); ?>

<h2><?php the_search_query() ?></h2>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		
		<article>

			<aside>
				<?php 	
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} ?>
			</aside>

			<a href="<?php the_permalink() ?>">
			<?php the_title(); ?>
			</a>
			<br />

			<?php the_excerpt(); ?>
			
	
		</article>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

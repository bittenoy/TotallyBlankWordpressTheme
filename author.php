<?php get_header(); ?>

<?php
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>


<h2> <?php echo $curauth->nickname; ?></h2>

<?php echo $curauth->description; ?>
<!-- see more author details at: http://codex.wordpress.org/Author_Templates -->

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

			<?php the_excerpt(); ?>
		
		</article>
	
	<?php endwhile; ?>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

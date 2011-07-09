<?php get_header(); ?>

<?php if(have_posts()) : ?>

	<?php while(have_posts()) : the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- http://codex.wordpress.org/Template_Tags/post_class -->

 			<header>  

				<h3>
				<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
				</a>
				</h3> <!-- Title of the post -->
	
				<?php echo get_the_date( ); ?> <!-- Date published -->
				<?php the_time(); ?>  <!-- Time published -->
				<?php  the_author(); ?><br /> <!-- Author of the post -->

			</header>	

			<?php the_content(); ?> <!-- Contents of a post -->

			<footer>	

				<?php the_category(', ') ?>  <!-- Post category -->
				<?php the_tags(', ') ?>  <!-- Post tags -->
	
				 <?php comments_popup_link(); ?>.
				<?php edit_post_link(); ?>


			</footer>

		
				
		</article>


	<?php endwhile; ?>
 
 
<?php endif; ?>
   
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>

<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
 
		<article>

 			<header>  

				<nav> <!-- Post navigation -->

					<?php previous_post_link(); ?> 
					<?php next_post_link(); ?> 

				</nav>

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
	
				<?php comments_popup_link(); ?>
				<?php edit_post_link(); ?>
				
				<?php comments_template(); ?>


			</footer>

		
				
		</article>


	
	<?php endwhile; ?>


<?php endif; ?>
   
<?php get_sidebar(); ?>
<?php get_footer(); ?>
 
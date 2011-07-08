<?php get_header(); ?>

<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
 
		<article>
 			<header>  
				<h3>
				<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
				</a>
				</h3> <!-- Title of the post -->
	
				<?php  the_author(); ?><br /> <!-- Author of the post -->
			</header>	

			<?php the_content(); ?> <!-- Contents of a post -->

			<footer>	
				<?php the_category(', ') ?>  <!-- Post category -->
				<?php the_tags(', ') ?>  <!-- Post tags -->
	
				<?php comments_popup_link(); ?>
				<?php edit_post_link(); ?>
			</footer>
		
		</article>

		<section>
			<?php comments_template(); ?>
		</section>
	
	
	<?php endwhile; ?>

	<aside> 
       		<nav> <!-- Post navigation -->
        		<?php wp_link_pages(); ?> 
	       	</nav>
	</aside>

<?php endif; ?>
   
<?php get_sidebar(); ?>
<?php get_footer(); ?>
 
<?php get_header(); ?>

<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	
		<article>
			
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> <!-- Title of the post -->
	
			<?php  the_author(); ?><br /> <!-- Author of the post -->
	
			<section>
	
				<?php the_content(); ?> <!-- Contents of a post -->
		
				<?php the_category(', ') ?>  <!-- Post category -->
				<?php the_tags(', ') ?>  <!-- Post tags -->
	
				<?php comments_popup_link(); ?>
				<?php edit_post_link(); ?>
		
			</section>
		</article>
	<?php endwhile; ?>
 
        <nav>
        <?php wp_link_pages(); ?> 
        </nav>
 
<?php endif; ?>
   
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
	<article>
        
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php  the_author(); ?><br />
            <section>
      
                <?php the_content(); ?>

		 
                <?php the_category(', ') ?> 
                <?php comments_popup_link(); ?> <?php edit_post_link(); ?>
 
            </section>
        </article>
 <?php comments_template(); ?>
<?php endwhile; ?>
             
        <nav>
        <?php wp_link_pages(); ?> 
        </nav>
 
        <?php endif; ?>
   
<?php get_sidebar(); ?>
<?php get_footer(); ?>
 
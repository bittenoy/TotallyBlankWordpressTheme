<?php get_header(); ?>
 
    <div id="container">
            <div id="content">
              <?php while ( have_posts() ) : the_post() ?>
   <?php the_content(); ?>
   <?php endwhile; ?>

	</div>
 
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>
 

<?php if (is_tag()) { ?>
<h2><?php single_tag_title(); ?></h2>
<?php } ?> 
 
<?php if (have_posts()) : ?>
 <?php while (have_posts()) : the_post(); ?>
<article>

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

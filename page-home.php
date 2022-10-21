
<?php get_header(); ?>
    
    <div>
    <h1><?php echo get_the_title(); ?></h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
    </div>


<?php get_footer(); ?>
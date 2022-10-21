
<?php get_header(); ?>
    
<div class="hero-section">
    <div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
    </div>
</div>

    <div id="section-2">
        <div id="section-2-text"></div>
        <div id="section-2-link"></div>
    </div>
    
    


<?php get_footer(); ?>
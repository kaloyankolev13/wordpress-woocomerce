
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
        <div id="section-2-text">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
        </div>
        <div id="section-2-link">
            <a href="/shop">
                <div class='link-img'>
                    <h1>Shop</h1>
                </div>
            </a>
        </div>
        </div>
    
    


<?php get_footer(); ?>
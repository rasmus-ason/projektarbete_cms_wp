<!-- Category page for accomondation-->
<?php get_header() ?>

<h2 class="beige-heading top-heading"><?php get_the_category(); ?> <?php
    $categories = get_the_category();
    if ( ! empty($categories) ) {
        foreach ( $categories as $term ) {
            echo esc_html( $term->name ) . ' ';
        }
    }
?></h2>

<!-- The loop-->
<?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
    
               ?>
<!-- Inside content start tag-->
<article class="margin-bottom">

    <a class="list-link" style="text-decoration:none" href="<?php the_permalink(); ?>" >
    <div class="list-container">

    <!--Image-->
    <div class="list-image">
            <?php 
                if(has_post_thumbnail()) {
                    the_post_thumbnail(); 

                }
                ?>
        </div>

        <!--Text about accomondation-->
        <div class="list-text">
     
            <h2><?php the_title(); ?></h2>
            
                <?php the_excerpt(); ?>
                
            
                
            </div>
        <!-- </div> -->
        
    </div>
    </a>
</article>

<!--Closing php-->
<?php
}
            } ?>



<?php get_footer() ?>   
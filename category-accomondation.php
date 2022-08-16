<!-- Category page for accomondation-->
<?php get_header() ?>

<h2 class="beige-heading top-heading" >See our Accomondations</h2>

<!-- The loop-->
<?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
    
               ?>
<!-- Inside content start tag-->
<article>

    <a class="list-link" style="text-decoration:none" href="<?php the_permalink(); ?>" >
    <div class="list-container">

    <!--Image-->
    <div class="list-image">
            <?php 
                if(has_post_thumbnail()) {
                    the_post_thumbnail('small'); 

                }
                ?>
        </div>

        <!--Text about accomondation-->
        <div class="list-text hide-p-text">
     
            <h3><?php the_title(); ?></h3>
            
                <?php the_content(); ?>
            
                
            </div>
        </div>
        
    </div>
    </a>
</article>

<!--Closing php-->
<?php
}
            } ?>



<?php get_footer() ?>   
<!-- Lista över alla boenden, bild och lista ska visas-->

<?php get_header() ?>

<h2 class="beige-heading" >See our Accomondations</h2>

<?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
    
               ?>

<article>



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
            
                <?php the_content('ul'); ?>
            
            <a href="<?php the_permalink(); ?>" class="button-general">Read More</a>
        </div>
        
    </div>
</article>

<?php
}
            } ?>



<?php get_footer() ?>   
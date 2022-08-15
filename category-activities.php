<!-- Lista över alla aktiviteter, design enligt förstasidans bildupplägg eller likande som visar boenden-->

<?php get_header() ?>

<h2 class="beige-heading" >Activities</h2>

<?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
    
               ?>

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
        <div class="list-text news-text-excerpt">
     
            <h3><?php the_title(); ?></h3>
            <!-- <ul> -->
                <?php the_excerpt(); ?>
            <!-- </ul> -->
            <!-- <a href="<?php the_permalink(); ?>" class="button-general">Read More</a> -->
        </div>
        
    </div>
    </a>
</article>

<?php
}
            } ?>





<?php get_footer() ?> 
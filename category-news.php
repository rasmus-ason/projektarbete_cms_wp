<!-- Lista över nyheter i, visas som excerpt på förstasidan, här kan alla nyheter listas i helformat, försöka få till 5 stycken per sidan -->


<?php get_header() ?>

<h2 class="beige-heading">Keep yourself updated</h2>

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
        <div class="list-text news-text-excerpt">
     
            <h3><?php the_title(); ?></h3>
            
                <?php the_excerpt(); ?>
            
            <a href="<?php the_permalink(); ?>" class="button-general">Read More</a>
        </div>
        
    </div>
</article>

<?php
}
            } ?>

    


<?php get_footer() ?>   
<!-- Category page for activities-->
<?php get_header() ?>

<h2 class="beige-heading top-heading" >Activities</h2>

<!--Loop content-->
<?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
    
               ?>

<article class="margin-bottom">

<!-- Link to single page-->
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

        <div>
        <h3><?php the_title(); ?></h3>
        <!--Text about accomondation-->
        <div class="list-text news-text-excerpt">
     
            
            
                <?php the_excerpt(); ?>
        
        </div>
        </div>
        
    </div>
    </a>
</article>

<?php
}
            } ?>





<?php get_footer() ?> 
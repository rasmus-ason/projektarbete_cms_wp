<?php get_header() ?>


<article class="single-page-content">
    <?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
    ?>
    <h2 class="beige-heading"><?php the_title()?></h2>
    <div>
        <?php 
            if(has_post_thumbnail()) {
                the_post_thumbnail('singlepageimage'); 

            }
            ?>    
        </div>

    <div class="textblock-container textblock-about">
        <h3 class="beige-heading">About</h3>
        <?php the_content(); ?>
    </div>

    <?php
                }
            }
            ?> 

<div class="textblock-container">
        <h3 class="beige-heading">Price</h3>
        <div class="price-list-container hide-elements-pricelist">
            


            <div class="price-list">
            <?php the_content(); ?>
            </div>

            

        </div>
    </div>

</article>

<?php get_footer() ?>  
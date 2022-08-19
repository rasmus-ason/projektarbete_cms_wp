<?php
/*
Template Name: Page-with-headerimage-no-image
*/
?>

<?php get_header() ?>

<!--Header image-->
<div class="headerimage">
   	
<img alt="" src="<?php header_image();?>">   

            </div>

<!--Content -->
<div class="subpage-no-image">
        <?php 
        if(have_posts()) : 
            while(have_posts()) : ?>
            <h2 class="beige-heading"><?php the_title()?></h2>
            <?php
                the_post();
                the_content();
            endwhile;
        endif;
        ?>

        

    </div>


<?php get_footer() ?>    

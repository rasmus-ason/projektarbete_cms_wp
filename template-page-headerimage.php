<?php
/*
Template Name: Page-with-headerimage
*/
?>

<?php get_header() ?>

<!--Header image-->
<div class="headerimage">
   	
<img alt="" src="<?php header_image();?>">   

            </div>

<!--Content -->
<div class="inside-content">
    <div class="inside-content-image">

    <?php 
            if(has_post_thumbnail()) {
                the_post_thumbnail('small'); 
            }
            ?>
</div>
        <div class="inside-content-text">
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

        

    </div>


<?php get_footer() ?>    


<?php
/*
Template Name: Page-with-headerimage-and-subpagepuff
*/
?>

<?php get_header() ?>

<!--Header image-->
<div class="headerimage">
   	
<img alt="" src="<?php header_image();?>">   

            </div>

<!-- Sub Page Widget -->
<?php 
    if(is_active_sidebar('sub-page-puff')) : ?>
    <article class="front-page-puff-container">
        <div class="front-page-puff">
            <div id="sub-page-puff">
                <?php dynamic_sidebar('sub-page-puff'); ?>
            </div>
        </div>
    </article>
<?php
endif; ?>

<!--Content -->
<div class="inside-content">
    <div class="inside-content-image">

    <?php 
            if(has_post_thumbnail()) {
                the_post_thumbnail(); 
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

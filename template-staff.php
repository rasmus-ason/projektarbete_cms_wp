<!-- Mall för kontaktsida -->
<?php
/*
Template Name: Staff-page
*/
?>

<?php get_header() ?>

template-staff

<h2 class="beige-heading">Our staff</h2>

<div class="inside-content inside-content-staffpage">
    <div class="inside-content-image inside-content-staffpage-image">
    

    <?php 
            if(has_post_thumbnail()) {
                the_post_thumbnail('small'); 
            }
            ?>
</div>
        <div class="inside-content-text inside-content-staffpage-text">
        <?php 
        if(have_posts()) : 
            while(have_posts()) : ?>
            <h3 class="beige-heading"><?php the_title()?></h3>
            <?php
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
        </div>

        

    </div>





<?php get_footer() ?>    

<!-- Mall för kontaktsida -->
<?php
/*
Template Name: Contact-form-page
*/
?>


<?php get_header() ?>

<div class="contact-form">
    
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

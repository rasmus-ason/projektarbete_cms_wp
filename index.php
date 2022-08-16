<!-- Index page -->
<?php get_header() ?>

<?php 
            if(has_post_thumbnail()) {
                the_post_thumbnail(); 
            }
            ?>

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



<?php get_footer() ?>    

<!-- Page default template -->
<?php get_header() ?>

<!--Inside content -->
<div class="inside-content">
    <div class="inside-content-image">

    <!--Images-->
    <?php 
            if(has_post_thumbnail()) {
                the_post_thumbnail(); 
            }
            ?>
</div>
        <!-- Text area -->
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

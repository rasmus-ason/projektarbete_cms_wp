<?php get_header() ?>


<!-- Displays single page content-->
<article class="single-page-content">
    <?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
    ?>

    <h2 class="beige-heading top-heading"><?php the_title()?></h2>
    <div>
        <?php 
            if(has_post_thumbnail()) {
                the_post_thumbnail('singlepageimage'); 

            }
            ?>    
        </div>

    <!-- Category deciding heading alternatives-->
    <div class="textblock-container textblock-about">
        <?php 
                if(in_category('accomondation') || (in_category('activities'))) : ?>
                <h3 class="beige-heading">About</h3>

                <?php else: ?>
                    <h3 class="beige-heading"><?php the_title()?></h3> 
                <?php endif ?>
        <?php the_content(); ?>
    </div>

    <?php
                }
            }
            ?> 

<!-- Price list displays only if category is accomondation or activities-->
<?php if(in_category('accomondation') || (in_category('activities'))) : ?>
    <div class="textblock-container">
        <h3 class="beige-heading">Price</h3>
        <div class="price-list-container hide-elements-pricelist">
            
            <div class="price-list">
            <?php the_content(); ?>
            </div>
        </div>
    </div>   
<?php endif ?>

<!-- Displays only if category is accomondation-->
        <?php 
            if(in_category('accomondation')) : ?>
            <div class="booking-calendar">
                <h3 class="beige-heading">Check Availability</h3>
                    <?php  
                        if(is_active_sidebar('rental-search')) : ?>
                            <div id="rental-search">
                                <?php dynamic_sidebar('rental-search'); ?>
                        </div><?php endif; ?>
                        </div>
            <?php endif; ?>
        

<!-- Displays only if category is activities-->         
    <?php  
    if(in_category('activities')) :
        if(is_active_sidebar('cf-activities')) : ?>
            <div class="contact-form">
                <h3 class="beige-heading">Book activity</h3>
                    <div id="cf-activities">
                        <?php dynamic_sidebar('cf-activities'); ?>
                    </div>
                </div>
                <?php endif; ?>
            <?php endif; ?>

<!-- End tag on article -->
</article>

<?php get_footer() ?>  
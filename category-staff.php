<!-- Category page staff-->
<?php get_header() ?>

<h2 class="beige-heading top-heading">Staff</h2>

<!-- Displays single page content-->
<article class="staff-page-container">

    <!-- Display posts with category staff-->
    <?php
    query_posts('category_name=Staff');
    if(have_posts()) {
        while(have_posts()) {
            the_post();
    ?>

    
    <div class="staff-page">
        <?php 
            if(has_post_thumbnail()) {
                the_post_thumbnail(); 

            }?>
                <h3 class="beige-heading"><?php the_title()?></h3><?php
                the_content(); ?>    
        </div>

        <?php
        }}?>




<!-- End tag on article -->
</article>

<!-- Link to contact page -->
<div class="large-buttons">
<a href="https://studenter.miun.se/~raan2100/writeable/dt197g_projekt/wordpress/contact/">Go to contact Page</a>
</div>



<?php get_footer() ?>  
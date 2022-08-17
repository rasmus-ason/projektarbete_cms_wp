<?php get_header() ?>

<!--Header image-->
<div class="headerimage">
    <div class="headerimage-text">
    <?php 
                query_posts('category_name=Headertext');
                if(have_posts()) {
                    while(have_posts()) {
                        the_post();
                    }
                }
                the_content();
            ?> 
    </div>    	
<img alt="" src="<?php header_image();?>">   
            </div>



<!-- Front Page Widget -->
<?php 
    if(is_active_sidebar('front-page-puff')) : ?>
    <article class="front-page-puff-container">
        <div class="front-page-puff">
            <div id="front-page-puff">
               
                    <?php dynamic_sidebar('front-page-puff'); ?>
               
            </div>
        </div>
    </article>
<?php
endif; ?>
    
<!--Front Page Links -->
<section>
    <div class="image-link-container">
        <div class="image-link">
            <?php 
            if(is_active_sidebar('frontpagelinks-1')) : ?>
                    <div id="frontpagelinks-1">
                            <?php dynamic_sidebar('frontpagelinks-1'); ?>
                        <h2>Villas</h2>
                    </div>
                    <?php
            endif; ?>
                
        </div>
        
    

    <!-- <div class="image-link-container"> -->
        <div class="image-link">
            <?php 
            if(is_active_sidebar('frontpagelinks-2')) : ?>
                    <div id="frontpagelinks-2">
                        <?php dynamic_sidebar('frontpagelinks-2'); ?>
                        <h2>Guesthouse</h2>
                    </div>
                    <?php
            endif; ?>
        </div>
        
    

    <!-- <div class="image-link-container"> -->
        <div class="image-link">
            <?php 
            if(is_active_sidebar('frontpagelinks-3')) : ?>
                    <div id="frontpagelinks-3">
                        <?php dynamic_sidebar('frontpagelinks-3'); ?>
                        <h2>Activities</h2>
                    </div>
                    <?php
            endif; ?>
        </div>
        
    

    <!-- <div class="image-link-container"> -->
        <div class="image-link">
            <?php 
            if(is_active_sidebar('frontpagelinks-4')) : ?>
                    <div id="frontpagelinks-4">
                        <?php dynamic_sidebar('frontpagelinks-4'); ?>
                        <h2>Contact</h2>
                    </div>
                <?php
            endif; ?>
        </div>
    <!--Container closing tag-->
    </div>
</section>

<!-- 4 latest news section -->
<section>
    <h2 class="beige-heading">Latest news from Pals Villas</h2>
        <div class="news-frontpage-container">

        <?php 
            query_posts('category_name=News&posts_per_page=4');
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
            ?>

            <div>
                <div class="news-frontpage">
                    <?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail(); 

                    }
                    ?>
                    
                    <?php the_excerpt(); ?>
                    <div class="news-frontpage-buttons">
                        <a href="<?php the_permalink(); ?>" class="news-button">Read article</a>
                    </div>
                </div>
                </div>

            <?php
                }
            }
            ?> 
            
        </div>
</section>

<!--Review container-->
<section>
    <div class="review-container review-display-box">
        <h2>Reviews from our visitors!</h2>
        <?php  
    if(is_active_sidebar('site-review-summary')) : ?>
        <div id="site-review-summary">
        
            <?php dynamic_sidebar('site-review-summary'); ?>
       
        </div><?php
    endif; ?>
    </div>
</section>


<!--Include footer-->
<?php get_footer() ?>    

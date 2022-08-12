<?php get_header() ?>

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

<div class="rental-search-container">
    <div class="search-box">

    <?php  
    if(is_active_sidebar('rental-search')) : ?>
        <div id="rental-search">
            <?php dynamic_sidebar('rental-search'); ?>
        </div><?php
    endif; ?>

    </div>
</div>

<!-- Front Page Widget -->
<article>
    <div class="front-page-puff">
        <?php 
            if(is_active_sidebar('front-page-puff')) : ?>
                <div id="front-page-puff">
                    <?php dynamic_sidebar('front-page-puff'); ?>
                </div>
            <?php
            endif; ?>
    </div>
</article>

<section>
        

    <div class="image-link-container">

    <?php  
            query_posts('category_name=Frontpagelinks&posts_per_page=6');
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
            ?>

        <div class="image-link">
            <?php 
                if(has_post_thumbnail()) {
                    the_post_thumbnail(); 
                    }
                ?>
            <h2><?php the_title();?></h2>
        </div>
        <?php
                }
            }
        ?> 
    </div>
    
</section>




<section class="button-general front-page-buttons">
    <div class="large-buttons">
        <a>Make a reservation!</a>
    </div>
    <div class="large-buttons">
        <a>Book Activities</a>
    </div>
</section>

<section>
    <h2 class="beige-heading">Latest news from Pals Villas</h2>
        <div class="news-frontpage-container">

        <?php 
            query_posts('category_name=News&posts_per_page=3');
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
            ?>

            <article>
                <div class="news-frontpage">
                    <?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail(); 

                    }
                    ?>
                    
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="button-general">Read article</a>
                </div>
            </article>

            <?php
                }
            }
            ?> 
            
        </div>
</section>

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



<?php get_footer() ?>    

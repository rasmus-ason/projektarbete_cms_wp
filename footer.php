<!--Close tag main-->
</main>

<!--Footer content-->
<footer>
    <h2>Pals Villas & Guesthouse</h2>
   
    <div class="divide-line"></div>
    <h3>Contact us!</h3>
    <h4>Phonenumber</h4>
    <!-- Widget for dynamic phonenumber-->
    <?php  
    if(is_active_sidebar('footer-content-phonenumber')) : ?>
        <div id="footer-content-phonenumber">
         
            <?php dynamic_sidebar('footer-content-phonenumber'); ?>
         
        </div><?php
    endif; ?>

    <h4>Email</h4>
    <!-- Widget for dynamic email-->
    <?php  
    if(is_active_sidebar('footer-content-email')) : ?>
        <div id="footer-content-email">
         
            <?php dynamic_sidebar('footer-content-email'); ?>
         
        </div><?php
    endif; ?>

    <br><p>OR</p><br>

<!-- Link to contact page-->
<a href="https://studenter.miun.se/~raan2100/writeable/dt197g_projekt/wordpress/contact/">Go to contact Page</a>

    
    
    <div class="divide-line"></div>

    
    <!-- Site review container and widget area-->
    <article class="review-container">
    <h2>Please leave a review!</h2>
    <?php  
    if(is_active_sidebar('site-review')) : ?>
        <div id="site-review">
            <?php dynamic_sidebar('site-review'); ?>
        </div><?php
    endif; ?>
    </article>

    <!-- Footer menu-->
    <nav> 
        <div class="divide-line"></div>
            <?php wp_nav_menu()?>
        <div class="divide-line"></div>
    </nav>
    
</footer>

   
<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
<!--Header-innehåll-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!--CSS-->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/lists.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/menu.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/images.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/articles.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/footer.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/singlepage.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/contactform.css">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@200&display=swap" rel="stylesheet">
    

     <!--Icon library-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <?php wp_head(); ?>

</head>
<body>

<header id="stickyheader">

    <!-- Link to home page and h1-heading-->
    <a href="<?php echo get_home_url(); ?>"><h1>Pals Villas & Guesthouse</h1></a>

    <!-- The overlay -->
    <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
    <!-- Overlay content -->
    <div class="overlay-content">
        <nav>

            <div class="menu-line"></div>
                <?php wp_nav_menu()?>
            <div class="menu-line"></div>

        </nav>
    </div>
  
  </div>
  
  <!-- Open/close navigation -->
  <div class="menu-icon-container">
    <span onclick="openNav()"><i class="fa fa-bars"></i></span>
  </div>

        <!-- Breadcrumbs widget area-->
         <?php 
            if(is_active_sidebar('breadcrumbs')) : ?>
            <div class="breadcrumbs">
                <div id="breadcrumbs">
                    <?php dynamic_sidebar('breadcrumbs'); ?>
                </div>
            </div>
            <?php
            endif; ?> 

</header>

        

<main>



<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php the_title();?> | IDM250</title>
<!-- Open Wordpress Header Code -->
<?php wp_head(); ?>
<!-- Close Wordpress Header Code -->
</head>

<body>
<?php if ( is_home() ) : ?>
<header>
    <div id="headerDiv">
    <div id="headerLeft">
        <a href="https://www.etsy.com/shop/MelGrossShop?ref=seller-platform-mcnav"><h2>SHOP</h2></a>
        <a href="about.php"><h2>ABOUT ME</h2></a>
        <a href="contact.php"><h2>CALL ME MAYBE</h2></a>
        <a href="https://www.instagram.com/melgross_art/?hl=en"><h3>@MELGROSS_ART</h3></a>
    </div>
    <div id="headerLogo">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/MelGLogo.png" alt="Logo for Mel Gross"> 
    </div>
    <div id="headerRight">
    <a href="archive.php"><h2>BRANDING</h2></a>
    <a href="archive.php"><h2>ILLUSTRATION</h2></a>
    <a href="archive.php"><h2>PHOTOGRAPHY</h2></a>
    </div></div>
    </header>

<?php else: ?>
<header id="splashHeader">
       <a id="homeLink" href="melgross.net" class="link">MEL<br>GROSS</a>
       <?php get_search_form(); ?>
       
    </header>
<?php endif; ?>
<?php 
            wp_nav_menu([
                'theme_location'  => 'main',
                'container'       => 'ul',
                'menu_class'      => 'nav navbar-nav navbar-right',
            ]);
        ?>

    
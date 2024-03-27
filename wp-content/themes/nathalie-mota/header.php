<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <div class="header-container">
        <a href="<?php echo home_url ('/'); ?>" class="header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-nathalie-mota.png" alt="Logo" class="logo-nathalie-mota">
        </a> 
        <nav class="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'menu',
                'container' => false
            ));
            ?>
        </nav>               
    </div>
</header>
    
<?php wp_body_open(); ?>

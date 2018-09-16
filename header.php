<?php
/**
 * The header for our theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- 
    <link rel="profile" href="http://gmpg.org/xfn/11"> -->

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fullPage.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/_magnific-custom.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="preloader"></div>

<header class="header">
    <div class="container">

        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo bloginfo('name'); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Cronion"></a>
        <div class="header-right">
            <?php if ( qtrans_getLanguage() == 'ru' ) { ?>
            <a href="?lang=en" class="lang" title="English version"><img src="<?php echo get_template_directory_uri(); ?>/images/flag-en.png" width="22" height="14" alt="English"></a>
            <?php } else { ?>
                <a href="?lang=ru" class="lang" title="English version"><img src="<?php echo get_template_directory_uri(); ?>/images/flag-ru.png" width="22" height="14" alt="Русский"></a>
            <?php } ?>
            <?php if (get_field('email', 6)) : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>контакты/" class="email" title="Send email"><img src="<?php echo get_template_directory_uri(); ?>/images/email.png" width="22" height="auto" alt="Send email"></a>
            <?php endif; ?>
            <a href="#nav" class="menu popup-with-move-anim"><span></span></a>
        </div>
        
         
        
    </div>
</header>





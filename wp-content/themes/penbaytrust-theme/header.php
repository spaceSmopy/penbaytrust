<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >


    <?php wp_head(); ?>

</head>

<body class=" home-page">

<?php
wp_body_open();
?>



<section class="header wrapper">
    <a class="logo" href="<?php echo  site_url();?>">
        <img class="logo-big" src="<?php echo get_template_directory_uri()?>/img/svg/logo-big.svg" alt="logo-big">
        <img class="logo-small" src="<?php echo get_template_directory_uri()?>/img/svg/logo-small.svg" alt="logo-big">
    </a>
    <?php wp_nav_menu( [ 'menu' => 'header_menu', 'container_class' => 'desctop-menu', ] );?>
    <div class="burger-menu">
        <button class="burger-menu__button" >
            <span class="burger-menu__lines"></span>
        </button>
        <?php wp_nav_menu( [ 'menu' => 'header_menu', 'container_class' => 'burger-menu__nav', ] );?>
        <div class="burger-menu__overlay"></div>
    </div>
</section>
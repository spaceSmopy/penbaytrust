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
    <a class="logo" href="#">
        <img class="logo-big" src="<?php echo get_template_directory_uri()?>/img/svg/logo-big.svg" alt="logo-big">
        <img class="logo-small" src="<?php echo get_template_directory_uri()?>/img/svg/logo-small.svg" alt="logo-big">
    </a>
    <?php wp_nav_menu( [ 'menu' => 'header_menu', 'container_class' => 'desctop-menu', ] );?>
<!--    <nav class="">-->
<!--        <ul class="desctop-menu__list">-->
<!--            <li class="desctop-menu__item"><a class="desctop-menu__link" href="#">Who We Are</a></li>-->
<!--            <li class="desctop-menu__item"><a class="desctop-menu__link" href="#">Services</a></li>-->
<!--            <li class="desctop-menu__item"><a class="desctop-menu__link" href="#">Contact</a></li>-->
<!--        </ul>-->
<!--    </nav>-->
    <div class="burger-menu">
        <a class="burger-menu__button" href="#">
            <span class="burger-menu__lines"></span>
        </a>
        <?php wp_nav_menu( [ 'menu' => 'header_menu', 'container_class' => 'burger-menu__nav', ] );?>
<!--        <nav class="burger-menu__nav">-->
<!--            <ul class="burger-menu__list">-->
<!--                <li><a class="burger-menu__link" href="#">Who We Are</a></li>-->
<!--                <li><a class="burger-menu__link" href="#">Services</a></li>-->
<!--                <li><a class="burger-menu__link" href="#">Contact</a></li>-->
<!--            </ul>-->
<!--        </nav>-->
        <div class="burger-menu__overlay"></div>
    </div>
</section>
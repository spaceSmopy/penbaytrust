<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >


    <?php wp_head(); ?>

</head>

<body class="wrapper home-page">

<?php
wp_body_open();
?>

<section class="header"><a class="logo" href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri()?>/img/svg/logo.svg" alt="logo"></a>
        <?php wp_nav_menu( [ 'menu' => 'header_menu', 'container_class' => 'nav', ] );?>
<!--        <ul class="nav-list">-->
<!--            <li class="nav-list-item"><a class="nav-link" href="#">Who We Are</a></li>-->
<!--            <li class="nav-list-item"><a class="nav-link" href="#">Services</a></li>-->
<!--            <li class="nav-list-item"><a class="nav-link" href="#">Contact</a></li>-->
<!--        </ul>-->
</section>
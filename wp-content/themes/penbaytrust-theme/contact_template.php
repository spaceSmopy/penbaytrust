<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<div class="bg contacts-page"></div>
<section class="main-content contacts-page wrapper">
    <h1 class="title">Contact Us</h1>
</section>
<section class="contact-us wrapper">
    <div class="contact-us__info">
        <h2 class="contact-us__title">Contact Us</h2>
        <p class="contact-us__text">We would love to hear from you! Feel free to complete this form, or e-mail us at info@penbaytrust.com if you would like to learn more about what we do and how we might be able to help.</p>
    </div>
    <form class="contact-us__form">
        <?php echo do_shortcode('[contact-form-7 id="20" title="Contact form"]');?>
    </form>
</section>
<?php get_footer(); ?>

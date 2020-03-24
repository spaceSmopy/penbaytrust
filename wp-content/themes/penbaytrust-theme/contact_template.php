<?php /* Template Name: Contact Page */ ?>
<?php get_header();
$post = get_post();
$content = apply_filters('the_content', $post->post_content);
?>
<div class="bg contacts-page"></div>
<section class="main-content contacts-page wrapper">
    <h1 class="title"><?php echo get_the_title($post);?></h1>
</section>
<section class="contact-us wrapper">
    <div class="contact-us__info">
        <h2 class="contact-us__title"><?php echo get_the_title($post);?></h2>
        <p class="contact-us__text"><?php echo wp_filter_nohtml_kses($content);?></p>
    </div>
    <form class="contact-us__form">
        <?php echo do_shortcode('[contact-form-7 id="20" title="Contact form"]');?>
    </form>
</section>
<?php get_footer(); ?>

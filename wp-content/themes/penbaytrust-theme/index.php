<?php get_header();
$post = get_post();
$content = apply_filters('the_content', $post->post_content);

?>
    <div class="bg home-page"></div>
    <section class="main-content home-page wrapper">
        <h1 class="title"><?php echo $content?></h1><a class="button" href="#"><span class="button__lines"></span></a>
    </section>

<?php get_footer(); ?>
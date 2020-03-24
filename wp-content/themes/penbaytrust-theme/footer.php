</div> <!-- /.container -->

<section class="footer wrapper">
    <div class="location">
        <p class="info"><?php echo get_option('left_footer_first'); ?></p>
        <p class="info"><?php echo get_option('left_footer_second'); ?></p>
        <p class="info"><?php echo get_option('left_footer_third'); ?></p>
    </div>
    <div class="contacts">
        <a class="info" href="tel:<?php echo get_option('site_phone'); ?>"><?php echo get_option('site_phone'); ?></a>
        <a class="info" href="mailto:<?php echo get_option('site_mail'); ?>"><?php echo get_option('site_mail'); ?></a>
        <a class="info" href="<?php echo get_option('linkedin'); ?>">
            <img src="<?php echo get_template_directory_uri()?>/img/svg/linkedin.svg" alt="linkedin">
        </a>
    </div>
</section>


<?php wp_footer(); ?>
</body>
</html>
<?php

add_theme_support( 'menus' );
add_theme_support( 'widgets' );
/**
 * ###
 *
 * Enqueue scripts and styles
 *
 * ###
 */
function theme_scripts_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.min.css' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );



/**
 * ###
 *
 * Add Theme Panel page
 *
 * ###
 */

// ### Enqueue Theme Panel page
function add_theme_menu_item()
{
    add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");
function theme_settings_page()
{
    ?>
    <div class="wrap">
        <h1>Theme Panel</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
// ### Enqueue Theme Panel Options
function display_left_footer_first()
{
    ?>
    <input type="text" name="left_footer_first" id="left_footer_first" value="<?php echo get_option('left_footer_first'); ?>" />
    <?php
}
function display_left_footer_second()
{
    ?>
    <input type="text" name="left_footer_second" id="left_footer_second" value="<?php echo get_option('left_footer_second'); ?>" />
    <?php
}
function display_left_footer_third()
{
    ?>
    <input type="text" name="left_footer_third" id="left_footer_third" value="<?php echo get_option('left_footer_third'); ?>" />
    <?php
}
function display_phone_element()
{
    ?>
    <input type="text" name="site_phone" id="site_phone" value="<?php echo get_option('site_phone'); ?>" />
    <?php
}
function display_mail_element()
{
    ?>
    <input type="text" name="site_mail" id="site_mail" value="<?php echo get_option('site_mail'); ?>" />
    <?php
}
function display_linkedin_element()
{
    ?>
    <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" />
    <?php
}



// ### Register Theme Panel Options
function display_theme_panel_fields()
{
    add_settings_section("section", "Footer Settings", null, "theme-options");


    add_settings_field("left_footer_first", "Left Footer (First paragraph): ", "display_left_footer_first", "theme-options", "section");
    add_settings_field("left_footer_second", "Left Footer (Second paragraph): ", "display_left_footer_second", "theme-options", "section");
    add_settings_field("left_footer_third", "Left Footer (Third paragraph): ", "display_left_footer_third", "theme-options", "section");

    add_settings_field("site_phone", "Phone: ", "display_phone_element", "theme-options", "section");
    add_settings_field("site_mail", "Mail: ", "display_mail_element", "theme-options", "section");
    add_settings_field("linkedin", "Linkedin Link: ", "display_linkedin_element", "theme-options", "section");


    register_setting("section", "left_footer_first");
    register_setting("section", "left_footer_second");
    register_setting("section", "left_footer_third");

    register_setting("section", "site_phone");
    register_setting("section", "site_mail");
    register_setting("section", "linkedin");
}

add_action("admin_init", "display_theme_panel_fields");

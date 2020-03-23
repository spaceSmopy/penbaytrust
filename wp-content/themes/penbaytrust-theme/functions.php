<?php
/**
 * ###
 *
 * enqueue scripts and styles
 *
 * ###
 */
function theme_scripts_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );




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
function display_phone_element()
{
    ?>
    <input type="text" name="site_phone" id="site_phone" value="<?php echo get_option('site_phone'); ?>" />
    <?php
}
function display_leftFooter_element()
{
    ?>
    <input type="text" name="left_footer" id="left_footer" value="<?php echo get_option('left_footer'); ?>" />
    <?php
}


function display_theme_panel_fields()
{
    add_settings_section("section", "Footer Settings", null, "theme-options");

    add_settings_field("site_mail", "Mail: ", "display_mail_element", "theme-options", "section");
    add_settings_field("linkedin", "Linkedin Link: ", "display_linkedin_element", "theme-options", "section");
    add_settings_field("site_phone", "Phone: ", "display_phone_element", "theme-options", "section");
    add_settings_field("left_footer", "Left Footer Text: ", "display_leftFooter_element", "theme-options", "section");


    register_setting("section", "site_mail");
    register_setting("section", "linkedin");
    register_setting("section", "site_phone");
    register_setting("section", "left_footer");

}

add_action("admin_init", "display_theme_panel_fields");
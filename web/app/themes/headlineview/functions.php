<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// Add PlatformB Logo
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/login.png);
            background-size: 300px 225px;
            margin:0 auto;
            width:300px;
            height:225px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return "https://www.platformb.com.au";
}
add_filter( 'login_headerurl', 'my_login_logo_url' );


// Add Logo To Menu Customizer-------------------

function themeslug_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );

    $wp_customize->add_section( 'themeslug_footer_logo_section' , array(
    'title'       => __( 'Footer Mobile', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the footer',
    ) );


$wp_customize->add_setting( 'themeslug_logo' );
$wp_customize->add_setting( 'themeslug_footer_logo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_footer_logo', array(
    'label'    => __( 'Footer Logo', 'themeslug' ),
    'section'  => 'themeslug_footer_logo_section',
    'settings' => 'themeslug_footer_logo',
) ) );

}
add_action( 'customize_register', 'themeslug_theme_customizer' );

// Custom Fields Settings
// ---------- Options Page For Custom cubrid_num_fields(result)
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Front Page Settings',
    'menu_title'  => 'Front Page Settings',
    'parent_slug' => 'theme-general-settings',
  ));
}


// WOOCOMMERCE SETTINGS

add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs) {
  unset($tabs['reviews']);
  return $tabs;
}


// remove breadcrumbs
add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
 
function woo_custom_cart_button_text() {
 
        return __( '<i class="fa fa-cart-plus"></i>  Add to Cart', 'woocommerce' );
 
}

add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
 
function woo_archive_custom_cart_button_text() {
 
        return __( ' Add to Cart', 'woocommerce' );
 
}
<?php

/**
 * Add functions files
 *
 * @package Virtue Theme
 */

define('THEME_URL', get_stylesheet_directory_uri());
define('ASSETS', THEME_URL . '/assets');
define('IMAGES', ASSETS . '/img');
/**
 * Language setup
 */
function virtue_lang_setup()
{
  load_theme_textdomain('virtue', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'virtue_lang_setup');

/**
 * add plugin
 */
if (!function_exists('setTheme')) {
  /**
   * load plugins supported by wordpress
   * @param function setTheme
   * @return add_action(init, setTheme)
   */
  function setTheme()
  {
    /**
     * add post thumbnail
     */
    add_theme_support('post-thumbnails');
    /**
     * add title tag automatic
     */
    add_theme_support('title-tag');
    /**
     * plugin add sidebar into footer.php
     */
    register_sidebar(array(
      'name' => 'footer nav',
      'id' => 'navbar-footer',
      'description'    => '',
      'class'          => 'page-item-link',
      'before_widget'  => '',
      'after_widget'   => '',
      'before_title'   => '',
      'after_title'    => '',
      'before_sidebar' => '',
      'after_sidebar'  => '',
    ));
  }
  add_action('init', 'setTheme');
}


/*
 * Init Theme Options
 */
require_once trailingslashit(get_template_directory()) . 'themeoptions/framework.php';                 // Options framework.
require_once trailingslashit(get_template_directory()) . 'themeoptions/options.php';                   // Options settings.
require_once trailingslashit(get_template_directory()) . 'themeoptions/options/virtue_extension.php';  // Options framework extension.

/*
 * Init Theme Startup/Core utilities/classes
 */
require_once trailingslashit(get_template_directory()) . 'lib/classes/class-virtue-plugin-check.php';          // Check plugin class.
require_once trailingslashit(get_template_directory()) . 'lib/utils.php';                                      // Utility functions.
require_once trailingslashit(get_template_directory()) . 'lib/init.php';                                       // Initial theme setup and constants
require_once trailingslashit(get_template_directory()) . 'lib/sidebar.php';                                    // Sidebar class
require_once trailingslashit(get_template_directory()) . 'lib/config.php';                                     // Configuration
require_once trailingslashit(get_template_directory()) . 'lib/cleanup.php';                                    // Cleanup
require_once trailingslashit(get_template_directory()) . 'lib/elementor/elementor-support.php';                // Elementor Support
require_once trailingslashit(get_template_directory()) . 'lib/nav.php';                                        // Custom nav modifications
require_once trailingslashit(get_template_directory()) . 'lib/metaboxes.php';                           // Custom metaboxes
require_once trailingslashit(get_template_directory()) . 'lib/comments.php';                            // Custom comments modifications
require_once trailingslashit(get_template_directory()) . 'lib/image-functions.php';                     // Image functions
require_once trailingslashit(get_template_directory()) . 'lib/class-virtue-get-image.php';              // Image Class
require_once trailingslashit(get_template_directory()) . 'lib/custom.php';                              // Custom functions
require_once trailingslashit(get_template_directory()) . 'lib/kadence-toolkit-plugin.php';              // Plugin Activation.

/*
* Woomcommerce Support
*/
require_once trailingslashit(get_template_directory()) . 'lib/woocommerce/woo-core-hooks.php';           // Woocommerce Core functions
require_once trailingslashit(get_template_directory()) . 'lib/woocommerce/woo-archive-hooks.php';        // Woocommerce Archive functions
require_once trailingslashit(get_template_directory()) . 'lib/woocommerce/woo-single-product-hooks.php'; // Woocommerce single product functions
require_once trailingslashit(get_template_directory()) . 'lib/woo-account.php';                          // Woocommerce account functions.

/*
 * Template Hooks
 */
require_once trailingslashit(get_template_directory()) . 'lib/authorbox.php';                             // Author box
require_once trailingslashit(get_template_directory()) . 'lib/template_hooks/portfolio_hooks.php';        // Portfolio Template Hooks
require_once trailingslashit(get_template_directory()) . 'lib/template_hooks/post_hooks.php';             // Post Template Hooks
require_once trailingslashit(get_template_directory()) . 'lib/template_hooks/page_hooks.php';             // Post Template Hooks.

/*
 * Init Widgets
 */
require_once trailingslashit(get_template_directory()) . 'lib/widgets.php';                               // Sidebars and widgets.

/*
 * Load Scripts
 */
require_once trailingslashit(get_template_directory()) . 'lib/admin-scripts.php';                         // Admin Scripts
require_once trailingslashit(get_template_directory()) . 'lib/scripts.php';                               // Scripts and stylesheets
require_once trailingslashit(get_template_directory()) . 'lib/custom-css.php';                            // Fontend Custom CSS.

/**
 * Note: Do not add any custom code here. Please use a custom plugin or child theme so that your customizations aren't lost during updates.
 * https://www.kadencewp.com/child-themes/
 */

/**
 * Show link to post in header
 */
function the_breadcrumb()
{
  echo '<ul id="crumbs">';
  if (!is_home()) {
    echo '<a href="';
    echo get_option('home');
    echo '">';
    echo 'Top';
    echo "</a> / ";
    if (is_category() || is_single()) {
      the_category(' / ');
      if (is_single()) {
        the_title(' / ');
      }
    } elseif (is_page()) {
      echo the_title(' / ');
    }
  } elseif (is_tag()) {
    single_tag_title();
  }
  echo '</ul>';
}

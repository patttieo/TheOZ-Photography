<?php
  include_once( get_template_directory() . '/wpflex-options.php' );

  if ( ! function_exists( 'wpflex_setup' ) ) :
    function wpflex_setup() {
      require_once locate_template('/inc/functions/theme-support.php');
      require_once locate_template('/inc/functions/asset-loader.php');
      require_once locate_template('/inc/functions/title.php');
      require_once locate_template('/inc/functions/header.php');
      require_once locate_template('/inc/functions/nav-menu.php');
      require_once locate_template('/inc/functions/comments.php');
      require_once locate_template('/inc/functions/comment-reply.php');
      require_once locate_template('/inc/functions/widgets.php');
      require_once locate_template('/inc/functions/editor-styles.php');
      require_once locate_template('/inc/functions/content-width.php');
	add_action( 'after_setup_theme', 'wpflex_setup' );
    }
  endif;

  add_action( 'after_setup_theme', 'wpflex_setup' );

add_action('after_setup_theme', 'setting_text_domain');
function setting_text_domain(){
    load_theme_textdomain('wpflex', get_template_directory() . '/languages');
}


add_filter( 'nav_menu_link_attributes', 'wpse121123_contact_menu_atts', 10, 3 );
function wpse121123_contact_menu_atts( $atts, $item, $args )
{
  // The ID of the target menu item
  $menu_target = 123;

  // inspect $item
  if ($item->ID == $menu_target) {
    $atts['data-toggle'] = 'modal';
  }
  return $atts;
}
?>

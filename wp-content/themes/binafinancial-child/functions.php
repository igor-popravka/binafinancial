<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        
		wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
		
		wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css', array(), 'latest', 'all'  );
		
		wp_enqueue_style('font-googlefont', '//fonts.googleapis.com/css?family=Pontano+Sans');
		
		wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/binafinancial.js');
		
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// After Login 
function my_login_redirect( $url, $request, $user ){
    if( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
        if( $user->has_cap( 'administrator' ) ) {
            $url = admin_url();
        } else {
            $url = admin_url('');
        }
    }
    return $url;
}
add_filter('login_redirect', 'my_login_redirect', 10, 3 );


// After Logout 
add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
wp_redirect( home_url() );
exit();
}

register_sidebar( array(
    'name' => __( 'Sticky Logo', 'theme-slug' ),
    'id' => 'sticky-logo',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );

// END ENQUEUE PARENT ACTION
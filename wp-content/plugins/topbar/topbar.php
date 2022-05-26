<?php 
/**
 * Plugin Name:      Example Plugin
 * Plugin URI:        
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 */
 
 add_action('admin_menu', 'custom_menu');
 
 function custom_menu() { 

  add_menu_page( 
      'Page Title', 
      'Example Plugin Menu', 
      'edit_posts', 
      'menu_slug', 
      'page_callback_function', 
      'dashicons-media-spreadsheet' 

     );
}

function wpb_follow_us($content) {
 
// Only do this when a single post is displayed
if ( is_single() ) { 
 
// Message you want to display after the post
// Add URLs to your own Twitter and Facebook profiles
 
$content .= '<p class="follow-us">If you liked this article, then please follow us on <a href="http://twitter.com/wpbeginner" title="WPBeginner on Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="https://www.facebook.com/wpbeginner" title="WPBeginner on Facebook" target="_blank" rel="nofollow">Facebook</a>.</p>';
 
} 
// Return the content
return $content; 
 
}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'wpb_follow_us'); 

?>
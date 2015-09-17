<?php
/**
Plugin Name: My Short codes
Description: Customized short codes
Author: Lasantha Indrajith
Version: 1.0
Author URI: http://landrithsoft.com/
*/

/*
 * Get the blog url without ending slashes
 */
function site_url_shortcode() {
    return trim(get_bloginfo('url'),"/");
}
add_shortcode('ls_site_url','site_url_shortcode');
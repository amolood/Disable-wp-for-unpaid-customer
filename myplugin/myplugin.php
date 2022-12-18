<?php

/*
 * Plugin Name: inject html in header and footer
 * Plugin URI: https://digitalize.sd
 * Description: N/A
 * Author URI: https://digitalize.sd
 * Version: 1.0.0
 */

defined('ABSPATH') or exit;


// add html to the header
function add_html_to_header()
{
    echo 'Deprecated: Elementor\Scheme_Color is deprecated since version 2.8.0! Use Elementor\Core\Schemes\Color instead. in /var/www/wpsales/wp-includes/functions.php on line 5049';
}

add_action('wp_head', 'add_html_to_header');

// add html to the footer

function add_html_to_footer()
{
    echo 'Deprecated: Elementor\Scheme_Color is deprecated since version 2.8.0! Use Elementor\Core\Schemes\Color instead. in /var/www/wpsales/wp-includes/functions.php on line 5049

';
}

add_action('wp_footer', 'add_html_to_footer');

// inject html inside the body tag (before the closing body tag)

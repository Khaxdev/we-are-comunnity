<?php 
/**
 * Plugin Name:       We Are Community    
 * Plugin URI:        https://github.com/Khaxdev
 * Description:       Formularios de login y registro
 * Version:           1.0
 * Requires at least: 5.9
 * Requires PHP:      7.4
 * Author:            James Tellez
 * Author URI:        https://github.com/Khaxdev
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       We are
*/

require_once plugin_dir_path( __FILE__ )."public/shortcodes/register-form.php";

/**
 *  Register Style
**/

/**
 *  init the content
**/
function wac_init(){
    echo "<h1>IMWorking</h1>";

    wp_enqueue_style( 
        'wac_style', 
        get_template_directory_uri() . '/includes/styles.css' 
    );
}
add_action("wp_head","wac_init");
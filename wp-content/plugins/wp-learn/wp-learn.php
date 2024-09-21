<?php

/**
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://webgool.com
 * @since             1.0
 * @package           Learningplugins
 *
 * Plugin Name:     Learningplugins
 * Plugin URI:      #
 * Description:    This is plugin for basic learning 
 * Version:         3.1.2
 * Author:          webgool
 * Author URI:      #
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain:     wp-learn-free
 * Domain Path:     /languages
 */

function profilecontainer()
{
    ob_start(); ?>
    <div class="um_profile_container">Day la noi dung tu plugins</div>

<?php return ob_get_clean();
}
add_shortcode('profile-container', 'profilecontainer');
?>
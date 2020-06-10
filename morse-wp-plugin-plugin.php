<?php
/**
 * Plugin Name: Morse WordPress Theme Settings Plugin
 * Description: Settings used in the Morse WordPress theme.
 * Version: 0.0.1
 * Author: Samson Zhang
 * Author URI: https://www.samsonzhang.com/
 */

add_filter('use_block_editor_for_post', '__return_false', 10);

require_once(plugin_dir_path(__FILE__) . "inc/customizer.php");
require_once(plugin_dir_path(__FILE__) . "inc/register-menus.php");
require_once(plugin_dir_path(__FILE__) . "inc/add-styles.php");
require_once(plugin_dir_path(__FILE__) . "inc/register-widgets.php");
require_once(plugin_dir_path(__FILE__) . "widgets/morse-wp-widget-call-to-action.php");
<?php
/**
 * Plugin Name: Ajax Pagination.
 * Plugin URI: https://github.com/novastarsw/WP-Plugin-Ajax-Pagination
 * Description: Ajax pagination plugin for post.
 * Version: 1.0.0
 * Author: NovaStar
 * Author URI: https://github.com/novastarsw
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: malinky-ajax-pagination
 * Domain Path: /languages
 */

define( 'NOVA_AJAX_PAGINATION_PLUGIN_DIR',  plugin_dir_path( __FILE__ ) );
define( 'NOVA_AJAX_PAGINATION_URL',         plugins_url( basename(plugin_dir_path(__FILE__)) ) );

class Nova_Ajax_Pagination {

    public function __construct() {
        
    }
}

$nova_ajax_pagination = new Nova_Ajax_Pagination();
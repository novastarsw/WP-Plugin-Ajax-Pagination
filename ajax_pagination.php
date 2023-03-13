<?php
/**
 * Plugin Name: Ajax Pagination
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
        add_action('init',          array($this, 'pagination_init'  ));
        add_action( 'wp_footer',    array($this, 'additioanl_css'   ));      
    }

    public function pagination_init() {
        $this->pagination_display();
    }

    public function pagination_display(){
        add_action( 'loop_end', array($this, 'create_custom_pagination'));
    }
    
    public function create_custom_pagination() {
        ?>
        
        <?php
    }

    public function additioanl_css() {
        // import /css/style.css file for customize the pagination navigation.
        wp_enqueue_style( 'pagination_stylesheet',      plugins_url( '/css/style.css', __FILE__ ) );
        
        // hide the previous pagination.
        wp_enqueue_style( 'pagination_other_styles',    $this->pagination_print_style() );
    }

    public function pagination_print_style() {
        ?>
        <style type="text/css">
            .navigation.pagination{
                display:none;
            }
        </style>
        <?php
    }
}

$nova_ajax_pagination = new Nova_Ajax_Pagination();

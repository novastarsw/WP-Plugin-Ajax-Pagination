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
        add_action('wp_enqueue_scripts', array($this, 'nova_napp_wp_enqueue_stylesheet'));
        add_action('loop_end', array($this, 'nova_napp_ajax_pagination'));
    }
    
    public function nova_napp_wp_enqueue_stylesheet() {
        wp_enqueue_style( 'nova-napp-stylesheet', NOVA_AJAX_PAGINATION_URL . '/css/style.css' );
    }

    public function nova_napp_ajax_pagination() {
        ?>
        <div class="nova-napp-navigation">
            <div class="nova-napp-pagination">
                <a href="">&laquo;</a>
                <a href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
                <a href="">5</a>
                <a href="">6</a>
                <a href="">&raquo;</a>
            </div>
            <select class="nova-napp-post-count">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <?php
    }
}

$nova_ajax_pagination = new Nova_Ajax_Pagination();
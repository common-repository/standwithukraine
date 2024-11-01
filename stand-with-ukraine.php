<?php

/**
 * @package		Stand_With_Ukraine
 * @author		Andrey Serb <imsadhappy@gmail.com>
 *
 * Plugin Name:	#StandWithUkraine
 * Description:	Inform visitors of your website about Russian war in Ukraine and how they can help to stop it
 * Version:		1.0.3
 * Author:		Andrey Serb
 * Author URI:	https://profiles.wordpress.org/imsadhappy/
 * License:		GPL-2.0+
 * License URI:	http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:	stand-with-ukraine
 * Domain Path:	/languages
 */

if ( ! defined( 'ABSPATH' ) )
	exit;

if ( ! defined('STAND_WITH_UKRAINE_DIR') )
    define('STAND_WITH_UKRAINE_DIR', plugin_dir_path( __FILE__ ));

if ( ! defined('STAND_WITH_UKRAINE_URL') )
    define('STAND_WITH_UKRAINE_URL', plugin_dir_url( __FILE__ ));

add_action( 'admin_menu', function () {

    add_menu_page( __( 'Stand With Ukraine', 'stand-with-ukraine' ),
                    __( 'Stand With Ukraine', 'stand-with-ukraine' ),
                    'manage_options',
                    'stand-with-ukraine',
                    function () {
                        require_once STAND_WITH_UKRAINE_DIR . 'templates/settings.php';
                    },
                    'dashicons-flag' );
} );

add_action( 'admin_init', function () {

    global $pagenow;

    if ( wp_doing_ajax() || 'options.php' !== $pagenow )
        return;

    if ( isset($_REQUEST['page']) && 'stand-with-ukraine' === $_REQUEST['page'] ) {

        if ( isset($_REQUEST['format']) && in_array($_REQUEST['format'], array('line_top', 'line_bottom', 'notice_left', 'notice_right')) )
            update_option('stand_with_ukraine_selected_format', sanitize_html_class($_REQUEST['format']));

        if ( isset($_REQUEST['style']) && in_array($_REQUEST['style'], array( 'black_white', 'white_black', 'national' ) ) )
            update_option('stand_with_ukraine_selected_style', sanitize_html_class($_REQUEST['style']));

        wp_safe_redirect(admin_url('admin.php?page=stand-with-ukraine'));
    }
} );

add_action( 'plugins_loaded', function () {

    load_plugin_textdomain( 'stand-with-ukraine', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
});

add_action( 'wp_footer', function () {

    require_once STAND_WITH_UKRAINE_DIR . 'templates/banner.php';
} );

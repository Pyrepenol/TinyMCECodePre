<?php
/**
 * Plugin Name: TinyMCE 4 @ Code Pre
 * Description:
 * Plugin URI:
 * Version:     0.0.1
 * Author:      Frank Bültge
 * Author URI:  http://bueltge.de
 * License:     GPLv2
 * License URI: ./assets/license.txt
 * Text Domain:
 * Domain Path: /languages
 * Network:     false
 */

add_action( 'admin_head', 'fb_add_tinymce' );
function fb_add_tinymce() {
    global $typenow;

    // Only on Post Type: post and page
    if( ! in_array( $typenow, array( 'post', 'page' ) ) )
        return ;

    add_filter( 'mce_external_plugins', 'fb_add_tinymce_plugin' );
    // Add to line 1 form WP TinyMCE
    add_filter( 'mce_buttons', 'fb_add_tinymce_button' );
}

// Inlcude the JS for TinyMCE
function fb_add_tinymce_plugin( $plugin_array ) {

    $plugin_array['fb_test'] = plugins_url( '/plugin.js', __FILE__ );
    // Print all plugin JS path
    var_dump( $plugin_array );
    // Print all plugin JS path
    var_dump( $plugin_array );
    return $plugin_array;
}

// Add the button key for address via JS
function fb_add_tinymce_button( $buttons ) {

    array_push( $buttons, 'codeprebutton' );
    // Print all buttons
    var_dump( $buttons );
    return $buttons;
}


<?php
/*
Plugin Name: WP TinyMCE Tables
Description: Add Table controls to the WordPress TinyMCE editor
Author: Adam Pope
Author URI: http://www.stormconsultancy.co.uk
*/

/*
 * Load external plugins
 */
add_filter('mce_external_plugins', 'wp_tinymce_tables_external_plugins');
function wp_tinymce_tables_external_plugins( $plugin_array ) {
    $plugin_array['table'] = plugin_dir_url( __FILE__ ) . 'table/editor_plugin.js';
    $plugin_array['tableDropdown'] = plugin_dir_url( __FILE__ ) . 'tableDropdown/editor_plugin.js';
    return $plugin_array;
}

/*
 * Add tables drop-down to second row
 */ 
add_filter( 'mce_buttons_2', 'wp_tinymce_tables_editor_buttons' );

function wp_tinymce_tables_editor_buttons( $buttons ) {
  array_unshift( $buttons, 'tableDropdown' );
  return $buttons;
}

?>
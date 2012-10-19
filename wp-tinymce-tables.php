<?php
/*
 * Plugin Name: WP TinyMCE Tables
 * Description: Add Table controls to the WordPress TinyMCE editor
 * Version: 1.0
 * Author: Adam Pope
 * Author URI: http://www.stormconsultancy.co.uk
 * License: MIT
 *
 * Copyright (c) 2012 Storm Consultancy (EU) Ltd, 
 * http://www.stormconsultancy.co.uk/
 * 
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
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
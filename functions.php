<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
$roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/init.php',            // Initial theme setup and constants
  'lib/wrapper.php',         // Theme wrapper class
  'lib/sidebar.php',         // Sidebar class
  'lib/config.php',          // Configuration
  'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/comments.php',        // Custom comments modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',          // Custom functions
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/*
function roots_starter_modify_classes($classes,$widget,$instance){
    print_r($instances);
    if(isset($instance["panel-grid-cell"])) $classes[]=$instance["panel-grid-cell"];
    return $classes;
}
add_filter("siteorigin_panels_custom_widget_class","roots_starter_modify_classes",10,3);
 */

function my_panels_row_style( $styles ) {
        $styles['my-style-panels'] = __( 'My Style Panels', 'mytheme' );
            return $styles;
}
add_filter( 'siteorigin_panels_row_styles', 'my_panels_row_style' );

function my_panels_row_classes( $grid_classes ) {
        $grid_classes[] = 'my-panel-grid';
            return $grid_classes;
}
add_filter( 'siteorigin_panels_row_classes', 'my_panels_row_classes' );

function my_panels_cell_classes( $cell_classes ) {
        $cell_classes[] = 'my-panel-grid-cell';
            return $cell_classes;
}
add_filter( 'siteorigin_panels_row_cell_classes', 'my_panels_cell_classes' );

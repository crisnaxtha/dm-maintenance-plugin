<?php
/*
Plugin Name: DM Maintenance Plugin
Description: Simple Maintenance Plugin.
*/

/* Start Adding Functions Below this Line */
  function maintenance_mode() {
 
      if ( !current_user_can( 'edit_themes' ) || !is_user_logged_in() ) { wp_die('Maintenance.'); }
 
}
add_action('get_header', 'maintenance_mode');
  
/* Stop Adding Functions Below this Line */
?>
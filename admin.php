<?php
// admin page settings

add_action( 'admin_init', 'nagbar_settings' );
function nagbar_settings() {
  register_setting( 'nagbar-settings-group', 'content' );
}

add_action( 'admin_menu', 'nagbar_menu_page' );

function nagbar_menu_page() {

	add_menu_page( 'nagbar', 'custom menu', 'manage_options', 'myplugin/myplugin-admin.php', '', plugins_url( 'myplugin/images/icon.png' ), 6 );

}

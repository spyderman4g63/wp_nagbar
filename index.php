<?php
/**
 * Plugin Name: nagbar
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Create a nag bar at the top of your site
 * Version: 0.0.1
 * Author: Johnathan Ward
 * Author URI: http://johnathanward.com
 * License: GPL2
 */

 /*  Copyright 2015  Johnathan Ward  (email : spyderman4g63@gmail.com)

     This program is free software; you can redistribute it and/or modify
     it under the terms of the GNU General Public License, version 2, as
     published by the Free Software Foundation.

     This program is distributed in the hope that it will be useful,
     but WITHOUT ANY WARRANTY; without even the implied warranty of
     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     GNU General Public License for more details.

     You should have received a copy of the GNU General Public License
     along with this program; if not, write to the Free Software
     Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
 function nagbar_main() {
     echo '<div id="nagbar"><div class="nagbar_content">Check out this totally cool thing</div> <a class="close" onclick="jQuery(\'#nagbar\').slideUp();"></a></div>';
 }
 add_action('wp_footer', 'nagbar_main');


 // Register style sheet.
 add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

 function register_plugin_styles() {
 	wp_register_style( 'nagbar', plugins_url( 'nagbar/css/style.css' ) );
 	wp_enqueue_style( 'nagbar' );
 }

 // admin page settings

 add_action( 'admin_init', 'nagbar_settings' );
 function nagbar_settings() {
   register_setting( 'nagbar-settings-group', 'content' );
 }

 add_action( 'admin_menu', 'nagbar_menu_page' );

 function nagbar_menu_page() {

 	add_menu_page( 'Nagbar Settings', 'Nagbar', 'manage_options', 'nagbar/admin.php', '', plugins_url( 'nagbar/images/icon.png' ) );

 }

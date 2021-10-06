<?php
/**
 * Plugin Name: Custom Hippo Registration by lalit
 * Plugin URI: https:
 * Description: An Custom table Hippo Registration
 * Version: 2.6.13
 * Author: Lalit
 * Author URI: https://lalit.com
 * Requires at least: 4.4
 * Tested up to: 4.7
 *
 * Text Domain: Custom Table
 * Domain Path:
 *
 * @package Custom
 * @category Custom
 * @author Lalit
 */

 function create_hippo_registration_table(){

 global $wpdb;
 $table_name = $wpdb->prefix . "hipporegistration";

 $charset_collate = $wpdb->get_charset_collate();
 $sql = "CREATE TABLE IF NOT EXISTS $table_name (
  id int (11) NOT NULL AUTO_INCREMENT,
  first_name varchar(255) NOT NULL,
  middle_name varchar(255) NOT NULL,
  last_name varchar(255) NOT NULL,
  street_address text NOT NULL,
  unit varchar(255) NOT NULL,
  city varchar(255) NOT NULL,
  state varchar(255) NOT NULL,
  zip_code bigint(10) NOT NULL,
  dob varchar(255) NOT NULL,
  mob_no bigint(10) NOT NULL,
  email varchar(55) NOT NULL,
  housech varchar(255) NOT NULL,
  p_date DATETIME,
  status int(1) NULL,
  PRIMARY KEY id (id)
) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
 }
 register_activation_hook( __FILE__, 'create_hippo_registration_table' );

 ?>
<?php 
if(!defined('ABSPATH')) exit;

		global $wpdb;
    	$table_name ='Login_audit';
   		$charset_collate = $wpdb->get_charset_collate();
   		$sql ="CREATE TABLE IF NOT EXISTS $table_name(
     		id int(11) NOT NULL AUTO_INCREMENT,
     		ip varchar(200) NOT NULL,
     		username varchar(100) NOT NULL,
            event varchar(100) NOT NULL,
            event_time datetime NOT NULL,
    		PRIMARY KEY  (id) ) $charset_collate;";
   			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
   			dbDelta( $sql );



?>
<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 register_deactivation_hook( __FILE__, 'Login_audit_remove_database_table' );
if(!function_exists('Login_audit_remove_database_table')){
	function Login_audit_remove_database_table() {
 global $wpdb;
     $drop_table_name ='Login_audit';
     $delete_table = "DROP TABLE IF EXISTS $drop_table_name";
    // echo  $delete_table; die;
     $wpdb->query($delete_table);
     delete_option("my_plugin_db_version");
}

}
 
 
?>
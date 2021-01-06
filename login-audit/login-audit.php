<?php 
/**
* Plugin name: Login Audit 
* Author: Vaibhav 
* Description: get logs of every login activity.
* Version:1.0
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); //calling main plugin file

include_once('create-audit-table-activation.php');
register_deactivation_hook( __FILE__, 'Login_audit_remove_database_table' ); 
include_once('remove-table.php');
include_once('admin-options.php');

$admin = is_admin();
if(is_admin()){
if($admin==1){
	$user = "Admin";

}else{
	$user ="user";
}
//echo $admin; die;

}

function Audit_login( $user_login, $user ) {
    // your code
    global $wpdb;
       $table_name = 'Login_audit';
      
       $ip = '193.164.8.0';
       $username = 'username';
       $event = 'Login';
       $event_time = date('Y-m-d H:i:s');
       
       
     $insert_setting =  $wpdb->insert($table_name, array(

          'ip' => $ip,
          'username' => $username,
          'event'=> $event,
          'event_time' => $event_time
  ));
}
add_action('wp_login', 'Audit_login', 10, 2);




function wpdocs_clear_transient_on_logout() {
   //echo "Logout hit"; die;

	global $wpdb;
       $table_name = 'Login_audit';
      
       $ip = '192.16.8.0';
       $username = 'username';
       $event = 'Logout';
       $event_time = date('Y-m-d H:i:s');
       
       
     $insert_setting =  $wpdb->insert($table_name, array(

          'ip' => $ip,
          'username' => $username,
          'event'=> $event,
          'event_time' => $event_time
  ));

}
add_action( 'wp_logout', 'wpdocs_clear_transient_on_logout' );
?>




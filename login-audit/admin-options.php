<?php 

function Login_audit_menu() {
    add_menu_page(
        __( 'Custom Menu Title', 'textdomain' ),
        'Login Audit',
        'manage_options',
        'login-audit/Login-audit-logs.php',
        '',
        plugins_url( 'login-audit/images/icon.png' ),
        6
    );
}
add_action( 'admin_menu', 'Login_audit_menu' );

?>
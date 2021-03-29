<?php
/**
 * Plugin Name: Send emails through Amazon SES
 * Plugin URI: https://github.com/nationalarchives/ds-tna-wp-ses
 * Description: Sends WordPress emails through Amazon SES.
 * Version: 1.9
 * Author: The National Archives
 * Author URI: https://github.com/nationalarchives
 * License: GPL2
 *
 * Define global variables in wp-config.php
 * define( 'SMTP_SES', true);
 * define( 'SMTP_SES_USER', 'username' );
 * define( 'SMTP_SES_PASS', 'password' );
 * define( 'SMTP_SES_HOST', 'email-smtp.*.amazonaws.com' );
 * define( 'SMTP_SES_PORT', 587 );
 * define( 'SMTP_SES_SECURE', 'tls' );
 */

// Amazon SES instead PHP mail.
add_action( 'phpmailer_init', 'use_amazon_ses' );
function use_amazon_ses( $phpmailer ) {
    if (SMTP_SES == true ) {
        $phpmailer->isSMTP();
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = SMTP_SES_USER;
        $phpmailer->Password = SMTP_SES_PASS;
        $phpmailer->Host = SMTP_SES_HOST;
        $phpmailer->Port = SMTP_SES_PORT;
        $phpmailer->SMTPSecure = SMTP_SES_SECURE;
    }
}

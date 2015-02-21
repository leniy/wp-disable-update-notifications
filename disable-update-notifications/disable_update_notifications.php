<?php

/**
 * Plugin Name: Disable Update Notifications
 * Plugin URI:  http://blog.leniy.org/disable-notification-emails-after-wordpress-auto-updates.html
 * Description: Disable email notifications after wordpress auto updates.
 * Author:      Leniy
 * Author URI:  http://blog.leniy.org/
 * Version:     1.0.0
 * License:     GPL
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class Disable_Update_Notifications {
	public function __construct() {
		/* apply_filters( 'auto_core_update_send_email', true, $type, $core_update, $result );
		 * @param bool   $send        Whether to send the email. Default true.
		 * @param string $type        The type of email to send.
		 *                            Can be one of 'success', 'fail', 'critical'.
		 * @param object $core_update The update offer that was attempted.
		 * @param mixed  $result      The result for the core update. Can be WP_Error.
		 */
		add_filter( 'auto_core_update_send_email', '__return_false' );
		add_filter( 'send_core_update_notification_email', '__return_false' );
		add_filter( 'automatic_updates_send_debug_email', '__return_false' );
	}
}

$disable_update_notifications = new Disable_Update_Notifications;

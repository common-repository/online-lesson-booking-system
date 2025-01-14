<?php
/*
Plugin Name: Online Lesson Booking system
Plugin URI: https://olbsys.com
Description: Online Lesson Booking system (OLB) is reservation-form and scheduler for an one-to-one online lesson.
Author: tnomi
Ahthor Name: SUKIMALAB
Author URI: https://sukimalab.com
Version: 0.9.6
*/

	require_once dirname(__FILE__).'/class/my-settings.php';
	require_once dirname(__FILE__).'/class/my-shortcodes.php';
	require_once dirname(__FILE__).'/class/my-hookactions.php';
	require_once dirname(__FILE__).'/class/my-adminpage.php';
	require_once dirname(__FILE__).'/class/my-widget.php';
	require_once dirname(__FILE__).'/class/my-functions.php';
	require_once dirname(__FILE__).'/class/my-paging.php';
	require_once dirname(__FILE__).'/class/my-auth.php';
	require_once dirname(__FILE__).'/class/my-room.php';
	require_once dirname(__FILE__).'/class/my-history.php';
	require_once dirname(__FILE__).'/class/my-timetable.php';
	require_once dirname(__FILE__).'/class/my-formaction.php';
	require_once dirname(__FILE__).'/class/my-info.php';
	require_once dirname(__FILE__).'/class/my-ticket.php';
	require_once dirname(__FILE__).'/class/my-calendar.php';

	$olb = new olbTimetable();

?>

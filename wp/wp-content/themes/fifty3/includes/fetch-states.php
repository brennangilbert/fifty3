<?php
/**
 * Gets states that currently have properties from the WP database
 * and returns them so we can build a nice JS map.
 */

if (empty($_POST['form_name']) || $_POST['form_name'] != 'fetch-states') {
	echo json_encode(array('errors' => 'Sorry, this form submission is not allowed.'));
	exit;
}

global $wpdb;

$state_codes = array();
$states = $wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE post_id = '" . ABOUT_PAGE_ID . "' AND meta_key LIKE 'states_%_state_name'");
foreach ($states as $state) {
	array_push($state_codes, $state->meta_value);
}

echo json_encode(array('states' => $state_codes));
exit;
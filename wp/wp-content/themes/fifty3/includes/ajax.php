<?php
/**
 *    This file makes it possible to send AJAX submissions
 *    through WordPress, so we have access to WP functions
 *    in our included PHP files.
 */
add_action('wp_enqueue_scripts', 'setupAJAX');
add_action('wp_ajax_ajax-submit', 'submitAJAX');
add_action('wp_ajax_nopriv_ajax-submit', 'submitAJAX');

function setupAJAX()
{
	wp_localize_script('final-js', 'fifty3_ajax', array(
			'ajaxURL' => admin_url('admin-ajax.php'),
			'ajaxNonce' => wp_create_nonce('fifty3_ajax_nonce')
		)
	);
}

function submitAJAX()
{
	// check nonce
	$nonce = $_POST['nonce'];
	if (!wp_verify_nonce($nonce, 'fifty3_ajax_nonce')) {
		echo json_encode(array('errors' => 'Invalid nonce; please try refreshing the page'));
		exit;
	}

	$form_name = $_POST['form_name'];

	// include file with same name as hidden form name
	include_once(TEMPLATEPATH . '/includes/' . $form_name . '.php');

	// generate the response
	$response = json_encode($_POST);

	// response output
	header("Content-Type: application/json");
	echo $response;

	exit();
}
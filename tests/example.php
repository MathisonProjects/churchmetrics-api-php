<?php
	require_once(__DIR__ . '/../vendor/autoload.php');
	use \Divinityfound\ChurchMetricsApiPhp\Rest;

	define('CHURCH_METRICS_EMAIL', 'XXXXXX@XXXXXXXXX.com');
	define('CHURCH_METRICS_AUTH' , 'XXXXXXXXXXXXXXXXXXXX');
	//Church Metrics Client
	$CM_Client = new Rest(CHURCH_METRICS_EMAIL, CHURCH_METRICS_AUTH);
	$params = array(
		'url'            => 'records',
		'church_id'      => 20976,
		'week_reference' => 2390);
	$data = $CM_Client->groups($params);

	echo '<pre>';
	print_r($data);
	echo '</pre>';
	exit;
?>
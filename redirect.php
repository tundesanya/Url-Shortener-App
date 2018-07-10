<?php 
require_once 'classes/Shortener.php';

//redirect from the generated code site to the original domain
if (isset($_GET['code'])) {
	$s = new Shortener;
	$code = $_GET['code'];

	//redirects to the fetched url
	if ($url = $s->getUrl($code)) {
		header("Location: {$url}");
		die();
	}
}

//redirect to home page incase a wrong string of url is parsed in
header('Location: index.php');
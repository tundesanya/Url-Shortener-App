<?php 
session_start();
require_once 'classes/Shortener.php';

$s = new Shortener;

//check if url input is authentic in index.php
if(isset($_POST['url'])){
	$url = $_POST['url'];

	if ($code = $s->makeCode($url)) {
		$_SESSION['feedback'] = "<div class=\"centerr\">Generated! Your short Url is: <a href=\"http://localhost:8089/shortener/{$code}\">www./{$code}.com</a></div>";
	} else {
		//if the url is not valid
		$_SESSION['feedback'] = "There was a problem. Invalid URL, perhaps?";
	}
}

header('Location: index.php');
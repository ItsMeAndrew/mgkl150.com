<?php

$padd_guid = '';
function padd_hooked_theme_credits() {
	global $padd_guid;
?>
<p class="annotation">Designed by <a href="http://moneymumbojumbo.co.uk/" title="Money Mumbo Jumbo" target="_blank">Money Mumbo Jumbo</a> - bringing you money saving tips in collaboration with <a href="http://www.simplicityclaims.co.uk/" title="PPI" target="_blank">PPI</a>.</p>
<?php
	$padd_guid = '5db2e685-0960-459e-8c15-0403f6d5fb2e';
}
add_action('padd_theme_credits','padd_hooked_theme_credits');

ob_start(); 

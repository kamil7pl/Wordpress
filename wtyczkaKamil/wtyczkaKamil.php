<?php
/*Do folderu wordpress/wp-content/plugins*/
/*
*Plugin Name: Moja wtyczka
*Description: opis
*Version: 1.0
*Author: ja
*Author URI: 
*Plugin URI:
*License:
*/
function moja_wtyczka(){
	add_menu_page('Strona główna wtyczki', 'Moja wtyczka Kamil', 'administrator', 'xx-glowna', 'yy_glowna', '', 24);
}
add_action('admin_menu', 'moja_wtyczka', '');
function yy_glowna(){
	echo 2+15;
}
?>

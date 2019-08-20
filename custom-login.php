<?php

/**
 * Plugin name: Personalización del login de WordPress
 * Plugin URI: #
 * Description: Plugin de funcionalidades personalizadas para el login de WordPress
 * Version: 1.0
 * Author: Marta Torre
 * Author URI: #
 * License: GPLv2
 * 
 */

//Modificar el logo del login
add_action('login_enqueue_scripts','mt_login_logo');

function mt_login_logo(){

	?>

	<style type="text/css" media="screen">
		body.login div#login h1 a {
			background-image: url('#');
			background-size: auto;
			height: 130px;
			width: 100%;
		}

	</style>

	<?php
}

//Modificar la url del logo
add_filter ('login_headerurl','mt_login_logo_link');

function na_login_logo_link($url){

	return home_url();
}

//Modificar el texto del logo
add_filter('login_headertitle','mt_login_logo_title');

function mt_login_logo_title($message){

	$message = get_bloginfo('name');
	return $message;
}
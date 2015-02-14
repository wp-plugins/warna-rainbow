<?php
/*
Plugin Name: Warna Rainbow
URI: http://www.warna.tk
Description: This feature makes the color of the link be colored like a rainbow when in hover To see demo actions click this <a href="/http://www.warna.tk/blog">link</a> 
Author: Warna™
Version: 1.0
Author URI: http://www.warna.tk
*/ 
?> 
<?php
function scripts_pelangi_ku() {
	wp_enqueue_script(
		'pelangi',
		plugins_url( '/js/pelangi.js' , __FILE__ ),
		array( 'scriptaculous' )
	);
}

add_action( 'wp_enqueue_scripts', 'scripts_pelangi_ku' );
?>
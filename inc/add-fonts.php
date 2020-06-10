<?php
function morse_wp_enqueue_fonts(){
	wp_enqueue_script( 'webfontloader', plugin_dir_url( __FILE__) . "../js/webfontloader.js", NULL, '', true );
	$fonts_array = array_unique([get_theme_mod("morse-wp-font-body"), get_theme_mod("morse-wp-font-heading"), get_theme_mod("morse-wp-font-accent")]);
	$fonts_string = "";
	foreach ($fonts_array as $f){
		$fonts_string = $fonts_string . "\"" . $f . ":400,700\",";
	}

	$config_string = "
WebFont.load({
  google: {
    families: [
    " . $fonts_string . "
    ]
  }
});
	";

	wp_add_inline_script( 'webfontloader', $config_string, 'after' );
}
add_action("wp_enqueue_scripts", "morse_wp_enqueue_fonts");

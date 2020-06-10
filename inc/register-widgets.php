<?php
function morse_wp_widgets_init() {
	register_sidebar(array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="uppercase-link morse-font-accent"><span>',
		'after_title'   => '</span></div>',
	) );

}
add_action( 'widgets_init', 'morse_wp_widgets_init' );
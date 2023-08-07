<?php

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Menu PC'),
			// 'menu-2' => __('Menu Footer 1'),
			// 'menu-3' => __('Menu Footer 2'),
		)
	);
}
add_action('init', 'm_register_menu');





if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

?>


<?php
	global $post;
	global $wp_query;
	$page = get_post();
	wp_reset_query();
	
	get_template_part('templates/sitematrix/header');
	get_template_part('templates/sitematrix/nav');


	if (is_front_page()):
		get_template_part('templates/pages/page', 'home');
	endif;
	
	get_template_part('templates/sitematrix/footer');
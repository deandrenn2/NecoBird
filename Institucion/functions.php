<?php

add_theme_support("post-thumbnails");

add_image_size( 'Portada', 800, 200, true );


function registrar_mi_menu(){
	register_nav_menus( 
		array('nav-header' => __('Menu del encabezado'),
			'nav-footer' => __('Menu del pie')
			)
		);
}

add_action('init','registrar_mi_menu');

function registrar_sidebar(){
	register_sidebar(
		$arrayName = array('name'          => 'Sidebar del Pie',
		'id'            => 'sidebar-footer',
		'description'	=> 'Agregar links',
		'before_widget' => '<div class="sidebar__item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>')
	 );
}

add_action('init','registrar_sidebar');

function registrar_sidebar_header(){
	register_sidebar(
		$arrayName = array('name'          => 'Sidebar del Encabezado',
		'id'            => 'sidebar-header',
		'description'	=> 'Widget del encabezado',
		'before_widget' => '<div class="sidebar__item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>')
	 );
}

add_action('init','registrar_sidebar_header');
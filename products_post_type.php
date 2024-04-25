<?php
/*
    Plugin Name: Prolimpie - Post Types
    Plugin URI: https://twitter.com/MysticMefisto
    Description: Allow to admin products via simple crm
    Version: 1.0.0
    Author: Mefisto Contreras
    Author URI: https://twitter.com/MysticMefisto
    Text Domain: Products admin prolimpie
*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function prolimpie_productos_post_type() {

	$labels = array(
		'name'                  => _x( 'Productos', 'Post Type General Name', 'prolimpie' ),
		'singular_name'         => _x( 'Producto', 'Post Type Singular Name', 'prolimpie' ),
		'menu_name'             => __( 'Productos', 'prolimpie' ),
		'name_admin_bar'        => __( 'Producto', 'prolimpie' ),
		'archives'              => __( 'Archivo', 'prolimpie' ),
		'attributes'            => __( 'Atributos', 'prolimpie' ),
		'parent_item_colon'     => __( 'Producto Padre', 'prolimpie' ),
		'all_items'             => __( 'Todos Los Productos', 'prolimpie' ),
		'add_new_item'          => __( 'Agregar Producto', 'prolimpie' ),
		'add_new'               => __( 'Agregar Producto', 'prolimpie' ),
		'new_item'              => __( 'Nuevo Producto', 'prolimpie' ),
		'edit_item'             => __( 'Editar producto', 'prolimpie' ),
		'update_item'           => __( 'Actualizar Producto', 'prolimpie' ),
		'view_item'             => __( 'Ver Producto', 'prolimpie' ),
		'view_items'            => __( 'Ver Productos', 'prolimpie' ),
		'search_items'          => __( 'Buscar Producto', 'prolimpie' ),
		'not_found'             => __( 'No Encontrado', 'prolimpie' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'prolimpie' ),
		'featured_image'        => __( 'Imagen Destacada', 'prolimpie' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'prolimpie' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'prolimpie' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'prolimpie' ),
		'insert_into_item'      => __( 'Insertar en Producto', 'prolimpie' ),
		'uploaded_to_this_item' => __( 'Agregado en Productos', 'prolimpie' ),
		'items_list'            => __( 'Lista de productos', 'prolimpie' ),
		'items_list_navigation' => __( 'Navegación de productos', 'prolimpie' ),
		'filter_items_list'     => __( 'Filtrar productos', 'prolimpie' ),
	);
	$args = array(
		'label'                 => __( 'Producto', 'prolimpie' ),
		'description'           => __( 'Productos para el Sitio Web', 'prolimpie' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'prolimpie_products', $args );

}
add_action( 'init', 'prolimpie_productos_post_type', 0 );
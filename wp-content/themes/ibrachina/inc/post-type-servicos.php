<?php 
// Register Custom Post Type
function custom_post_type_servicos() {

	$labels = array(
		'name'                => _x( 'Serviços', 'Post Type General Name', 'servicos' ),
		'singular_name'       => _x( 'Serviço', 'Post Type Singular Name', 'servicos' ),
		'menu_name'           => __( 'Serviços', 'servicos' ),
		'parent_item_colon'   => __( 'Serviços', 'servicos' ),
		'all_items'           => __( 'Todos os Serviços', 'servicos' ),
		'view_item'           => __( 'Ver Serviço', 'servicos' ),
		'add_new_item'        => __( 'Adicionar Serviço', 'servicos' ),
		'add_new'             => __( 'Adicionar Serviço', 'servicos' ),
		'edit_item'           => __( 'Editar Serviço', 'servicos' ),
		'update_item'         => __( 'Atualizar Serviço', 'servicos' ),
		'search_items'        => __( 'Procurar Serviço', 'servicos' ),
		'not_found'           => __( 'Serviço não existe', 'servicos' ),
		'not_found_in_trash'  => __( 'Não existe Serviços na lixeira', 'servicos' ),
	);
	$args = array(
		'label'               => __( 'servicos', 'servicos' ),
		'description'         => __( 'Serviços', 'servicos' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-hammer',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite' => array('with_front' => false, 'slug' => 'servicos'),
		'capability_type'    => 'page',

	);
	register_post_type( 'servicos', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type_servicos', 0 );
?>
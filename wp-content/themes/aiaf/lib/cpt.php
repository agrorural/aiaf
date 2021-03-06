<?php //Documentos

add_action( 'init', 'create_my_post_types' );
function create_my_post_types() {
	$labels_documento = array(
		'name'               => _x( 'Documentos', 'post type general name', 'aiaf' ),
		'singular_name'      => _x( 'Documento', 'post type singular name', 'aiaf' ),
		'menu_name'          => _x( 'Documentos', 'admin menu', 'aiaf' ),
		'name_admin_bar'     => _x( 'Documento', 'Agregar Nuevo on admin bar', 'aiaf' ),
		'add_new'            => _x( 'Agregar Nuevo', 'Documento', 'aiaf' ),
		'add_new_item'       => __( 'Agregar Nuevo Documento', 'aiaf' ),
		'new_item'           => __( 'Nuevo Documento', 'aiaf' ),
		'edit_item'          => __( 'Editar Documento', 'aiaf' ),
		'view_item'          => __( 'Ver Documento', 'aiaf' ),
		'all_items'          => __( 'Todos', 'aiaf' ),
		'search_items'       => __( 'Buscar Documentos', 'aiaf' ),
		'parent_item_colon'  => __( 'Documento Padre:', 'aiaf' ),
		'not_found'          => __( 'Ningún Documento encontrado.', 'aiaf' ),
		'not_found_in_trash' => __( 'Ningún Documento encontrado en la Papelera.', 'aiaf' )
	);
 
	$args_documento = array(
		'labels'             => $labels_documento,
        'description'        => __( 'Documentos de AF.', 'aiaf' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type' => 'documento',
			'capabilities' => array(
				'publish_posts' => 'publish_documentos',
				'edit_posts' => 'edit_documentos',
				'edit_others_posts' => 'edit_others_documentos',
				'delete_posts' => 'delete_documentos',
				'delete_others_posts' => 'delete_others_documentos',
				'read_private_posts' => 'read_private_documentos',
				'edit_post' => 'edit_documento',
				'delete_post' => 'delete_documento',
				'read_post' => 'read_documento',
			),
		'has_archive'        => true,
		'hierarchical'       => true,
		'rewrite'            => array( 'slug' => 'documentos' ),
		'menu_position'      => 10,
		'menu_icon'			 => 'dashicons-archive',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	$labels_institucion = array(
		'name'               => _x( 'Instituciones', 'post type general name', 'aiaf' ),
		'singular_name'      => _x( 'Institución', 'post type singular name', 'aiaf' ),
		'menu_name'          => _x( 'Instituciones', 'admin menu', 'aiaf' ),
		'name_admin_bar'     => _x( 'Institución', 'name on admin bar', 'aiaf' ),
		'add_new'            => _x( 'Agregar Nueva', 'Institución', 'aiaf' ),
		'add_new_item'       => __( 'Agregar Nueva Institución', 'aiaf' ),
		'new_item'           => __( 'Nueva Institución', 'aiaf' ),
		'edit_item'          => __( 'Editar Institución', 'aiaf' ),
		'view_item'          => __( 'Ver Institución', 'aiaf' ),
		'all_items'          => __( 'Todas', 'aiaf' ),
		'search_items'       => __( 'Buscar Instituciones', 'aiaf' ),
		'parent_item_colon'  => __( 'Institución Padre:', 'aiaf' ),
		'not_found'          => __( 'Ninguna Institución encontrado.', 'aiaf' ),
		'not_found_in_trash' => __( 'Ninguna Institución encontrado en la Papelera.', 'aiaf' )
	);
 
	$args_institucion = array(
		'labels'             => $labels_institucion,
        'description'        => __( 'Instituciones de AF.', 'aiaf' ),
		'public'             => true,
		/*'exclude_from_search' => true,*/
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type' => 'institucion',
			'capabilities' => array(
				'publish_posts' => 'publish_instituciones',
				'edit_posts' => 'edit_instituciones',
				'edit_others_posts' => 'edit_others_instituciones',
				'delete_posts' => 'delete_instituciones',
				'delete_others_posts' => 'delete_others_instituciones',
				'read_private_posts' => 'read_private_instituciones',
				'edit_post' => 'edit_institucion',
				'delete_post' => 'delete_institucion',
				'read_post' => 'read_institucion',
			),
		'has_archive'        => true,
		'hierarchical'       => true,
		'rewrite'            => array( 'slug' => 'instituciones' ),
		'menu_position'      => 10,
		'menu_icon'			 => 'dashicons-building',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type('documento', $args_documento);
	register_post_type('institucion', $args_institucion);
}

add_action( 'init', 'create_my_taxonomies', 0 );
function create_my_taxonomies() {
	// Agregar Nuevo taxonomy, make it hierarchical (like categories)
	$labels_documento_clasificacion = array(
		'name'              => _x( 'Clasificaciones', 'taxonomy general name' ),
		'singular_name'     => _x( 'Clasificación', 'taxonomy singular name' ),
		'search_items'      => __( 'Buscar Clasificaciones' ),
		'all_items'         => __( 'Todos las Clasificaciones' ),
		'parent_item'       => __( 'Clasificación Padre' ),
		'parent_item_colon' => __( 'Clasificación Padre:' ),
		'edit_item'         => __( 'Editar Clasificación' ),
		'update_item'       => __( 'Actualizar Clasificación' ),
		'add_new_item'      => __( 'Agregar Nueva Clasificación' ),
		'new_item_name'     => __( 'Nombre de Nueva Clasificación' ),
		'menu_name'         => __( 'Clasificaciones' )
	);

	$args_documento_clasificacion = array(
		'public' 			=> true,
		'hierarchical'      => true,
		'labels'            => $labels_documento_clasificacion,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'capabilities'		=> array(
			'manage_terms' => 'manage_clasificacion',
			'edit_terms' => 'edit_clasificacion',
			'delete_terms' => 'delete_clasificacion',
			'assign_terms' => 'assign_clasificacion'
		)
	);

	$labels_institucion_tipo = array(
		'name'              => _x( 'Tipos', 'taxonomy general name' ),
		'singular_name'     => _x( 'Tipo', 'taxonomy singular name' ),
		'search_items'      => __( 'Buscar Tipos' ),
		'all_items'         => __( 'Todos los Tipos' ),
		'parent_item'       => __( 'Tipo Padre' ),
		'parent_item_colon' => __( 'Tipo Padre:' ),
		'edit_item'         => __( 'Editar Tipo' ),
		'update_item'       => __( 'Actualizar Tipo' ),
		'add_new_item'      => __( 'Agregar Nuevo Tipo' ),
		'new_item_name'     => __( 'Nombre de Nuevo Tipo' ),
		'menu_name'         => __( 'Tipos' )
	);

	$args_institucion_tipo = array(
		'public' 			=> true,
		'hierarchical'      => true,
		'labels'            => $labels_institucion_tipo,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'capabilities'		=> array(
			'manage_terms' => 'manage_tipo',
			'edit_terms' => 'edit_tipo',
			'delete_terms' => 'delete_tipo',
			'assign_terms' => 'assign_tipo'
		)
	);

	register_taxonomy( 'clasificacion', 'documento', $args_documento_clasificacion );
	register_taxonomy( 'tipo', 'institucion', $args_institucion_tipo );
}
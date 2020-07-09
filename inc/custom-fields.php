<?php

/*
    Metaboxes para página Home
*/

add_action('cmb2_admin_init','amu_campos_homepage');

function amu_campos_homepage(){
    $prefix = 'amu_homepage_';
    $id_home = get_option( 'page_on_front' );

    $amu_campos_homepage = new_cmb2_box(array(
        'id' => $prefix . 'metabox',
        'title' => esc_html__( 'Campos página Home', 'cmb2' ),
        'object_types' => array('page'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
        'show_on' => array(
            'id' => array($id_home),
        ),   
        
    ));

    $amu_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Titulo principal', 'cmb2' ),
		'desc'    => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      => 'titulo_principal_home',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
    ) );
    
    $amu_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Parrafo principal', 'cmb2' ),
		'desc'    => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      => 'parrafo_principal_home',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
    ) );
    
    $amu_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen principal', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => 'imagen_home',
		'type' => 'file',
    ) );
    
    $amu_campos_homepage->add_field( array(
		'name' => esc_html__( 'Titulo demo', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'titulo_demo',
		'type' => 'text',
    ) );
    
    $amu_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Descripcion demo', 'cmb2' ),
		'desc'    => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      => 'parrafo_descripcion_demo',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
    ) );
    
    $amu_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => 'imagen_demo',
		'type' => 'file',
	) );

    $amu_campos_homepage->add_field( array(
		'name' => esc_html__( 'Titulo noticias', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'titulo_noticias',
		'type' => 'text',
    ) );
    
    $amu_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Descripcion general sección noticias', 'cmb2' ),
		'desc'    => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      => 'parrafo_noticias',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
    ) );
}

add_action( 'cmb2_admin_init', 'amu_modulos' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function amu_modulos() {
	/**
	 * Repeatable Field Groups
	 */
	$amu_campos_modulo = new_cmb2_box( array(
		'id'           => 'iconos_modulos',
		'title'        => esc_html__( 'Iconos modulos', 'cmb2' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => 'true',
		'show_on'      => array(  'id' =>  array(60)),
	) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id = $amu_campos_modulo->add_field( array(
		'id'          => 'yourprefix_group_demo',
		'type'        => 'group',
		'description' => esc_html__( 'Inserte la cantidad de modulos necesaria', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Modulo número {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar otro modulo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar modulo', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$amu_campos_modulo->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Titulo modulo', 'cmb2' ),
		'id'         => 'titulo_modulo',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$amu_campos_modulo->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Descripcion modulo', 'cmb2' ),
		'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

	$amu_campos_modulo->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Icono modulo', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
	) );
}
















?>
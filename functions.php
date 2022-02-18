<?php
function load_styles_and_scripts(){
	// Cargar Styles
	wp_enqueue_style(
		'main-styles',
		get_template_directory_uri().'/style.css'
		);
	wp_enqueue_style(
		'bootstrap-style',
		get_template_directory_uri().'/css/bootstrap.css'
		);

	// Cargar Scripts
	wp_enqueue_script(
		'jquery',
		get_template_directory_uri().'/js/jquery-3.2.1.slim.min.js'
		);
	wp_enqueue_script(
		'bootstrap',
		get_template_directory_uri().'/js/bootstrap.js'
		);
}
add_action('wp_enqueue_scripts','load_styles_and_scripts');
/* START MENU BLOCK */
/* START MENU BLOCK */
	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');
	register_nav_menus( array(
    	'principal' => __( 'Menu Principal', 'mytheme' ),
    	'top_menu' => 'Top Menu',
    	'footer_menu' => 'Footer Menu'
) );

register_sidebar(array(
	'name' => 'Slider',
	'before_widget' => '<div class="slider">',
	'after_widget' => '</div>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));
register_sidebar(array(
	'name' => 'Formulario',
	'before_widget' => '<div class="formulario">',
	'after_widget' => '</div>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));
register_sidebar(array(
	'name' => 'Valores',
	'before_widget' => '<div class="valores">',
	'after_widget' => '</div>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));
register_sidebar(array(
	'name' => 'Footer-Contac',
	'before_widget' => '<div class="footer-contac">',
	'after_widget' => '</div>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));
register_sidebar(array(
	'name' => 'Footer-Etiquetas',
	'before_widget' => '<div class="footer-etiquetas">',
	'after_widget' => '</div>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));
register_sidebar(array(
	'name' => 'Footer-Redes',
	'before_widget' => '<div class="footer-Redes">',
	'after_widget' => '</div>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));
register_sidebar(array(
	'name' => 'Paginas',
	'before_widget' => '<div class="paginas">',
	'after_widget' => '</div>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));
register_sidebar(array(
	'name' => 'Formulario-Contacto',
	'before_widget' => '<div class="formulario-contacto">',
	'after_widget' => '</div>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));
register_sidebar(array(
	'name' => 'Contacto-Info',
	'before_widget' => '<div class="contacto-info">',
	'after_widget' => '</div>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));
register_sidebar(array(
	'name' => 'Formulario-Pagina',
	'before_widget' => '<div class="Formulario-Pagina">',
	'after_widget' => '</div>',
	'before_title' => '<h6>',
	'after_title' => '</h6>',
	));


add_theme_support('post-thumbnails'); 
function longitud_excerpt($length) {
    return 10;
}
// Función para contar visualizaciones de un post.
function set_post_views() {
    if (is_single()) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );
 
        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );
 
// Función para obtener el número de visualizaciones de un post
function get_post_views($post_ID){
    $count = get_post_meta($post_ID, 'post_views', true);
 
    if ($count == ''){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }
    return $count;
}
// Añadir columna al listado de post de wp-admin
function posts_column_views($defaults){
    $defaults['post_views'] = __('Vistas', 'your_textdomain');
    return $defaults;
}
add_filter('manage_posts_columns', 'posts_column_views');
 
function posts_custom_column_views($column_name, $id){
    if ($column_name === 'post_views'){
        echo get_post_views(get_the_ID());
    }
}
add_action('manage_posts_custom_column', 'posts_custom_column_views', 5, 2);


add_filter('excerpt_length', 'longitud_excerpt');

/*---------------------------------------descripcion de menu----------*/
add_filter('walker_nav_menu_start_el','dcms_agregar_descripcion',10,4);

function dcms_agregar_descripcion( $item_output, $item, $depth, $args ){
    if ( ! empty($item->description)){
        return str_replace( '</a>', '<br/><small>'.$item->description.'</small></a>', $item_output );        
    }
    return $item_output;
}

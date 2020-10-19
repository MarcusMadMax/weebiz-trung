<?php 

function register_resource() {
    register_nav_menu('main-menu', 'Main Menu' );
    
    //--- Register post types
    $args = array(
        'public'    => true,
        'label'     => 'Services',
        'menu_icon' => 'dashicons-hammer',
    );
    register_post_type( 'service', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Features',
        'menu_icon' => 'dashicons-buddicons-groups',
    );
    register_post_type( 'feature', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Slides',
        'menu_icon' => 'dashicons-format-gallery',
    );
    register_post_type( 'slide', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Staff',
        'menu_icon' => 'dashicons-universal-access',
    );
    register_post_type( 'staff', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Ptojects',
        'menu_icon' => 'dashicons-buddicons-activity',
    );
    register_post_type( 'project', $args );

    //Custom taxonomy
    $args = array(
        'label'        => 'Type',
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true,
        'show_in_nav_menus' => true
    );
     
    register_taxonomy( 'type', 'project', $args );

}
add_action( 'init', 'register_resource' );

function add_class_to_li( $classes, $item, $args ) {
 
    $classes[] = 'nav-item';
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'add_class_to_li' , 10, 4 );

function add_class_to_anchors( $atts ) {
    $atts['class'] = 'nav-link';
 
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );

?>
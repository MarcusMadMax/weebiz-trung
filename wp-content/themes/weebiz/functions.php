<?php 

function register_resource() {
    register_nav_menu('main-menu', 'Main Menu' );
    
    //--- Register post types
    $args = array(
        'public'    => true,
        'label'     => 'Services',
    );
    register_post_type( 'service', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Features',
    );
    register_post_type( 'feature', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Slides',
    );
    register_post_type( 'slide', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Staff',
    );
    register_post_type( 'staff', $args );

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
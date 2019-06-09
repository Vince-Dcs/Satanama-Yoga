<?php 

// Création du menu Header-Navbar
function register_my_menu(){
    register_nav_menu( 'header-menu', __( 'Header Menu' ) );
    register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}

add_action( 'init', 'register_my_menu' );

function satanama_register_sidebars() {
    register_sidebar(
        array(
            'name'          => 'Widget sidebar' ,
            'id'            => 'widget',
            'description'   => 'The footer for widgets ',
            'class'         => 'footer__widgets-class',
            'before_widget' => '<li class="footer__widgets-class">',
            'after_widget'  => "</li>\n",
        )
    );
}
add_action( 'widgets_init', 'satanama_register_sidebars' );



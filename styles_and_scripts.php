<?php
########## FUNCTION FOR ADDING STYLESHEET/JS ##########################################


function starts360_CSS_n_JS() {
    wp_register_style('VG_CSS_n_JS', plugins_url('/css/bootstrap.min.css',__FILE__ ));
    wp_enqueue_style('VG_CSS_n_JS');
    wp_register_script( 'VG_CSS_n_JS', plugins_url('/js/bootstrap.min.js',__FILE__ ));
    wp_enqueue_script('VG_CSS_n_JS');
    wp_register_script( 'VG_CSS_n_JS', plugins_url('/js/jquery.js',__FILE__ ));
    wp_enqueue_script('VG_CSS_n_JS');
    //Calling custom js file
     wp_register_script( 'VG_Custom_JS', plugins_url('/js/custom.js',__FILE__ ));
    wp_enqueue_script('VG_Custom_JS');
}

add_action( 'init','starts360_CSS_n_JS');


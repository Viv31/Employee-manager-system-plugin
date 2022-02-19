<?php
//Creating custom post type for manager and for employee section
if(!function_exists('starts360MangerCPT')){
function starts360MangerCPT(){
	register_post_type('starts-manager',array(
   			'labels'=>array(
   			'name'=>__('Starts 360 manager'),
   			'Singular_name'=>__('starts360Manager'),
            'menu_name' => __('Starts 360 Manager Post','admin menu')
   		),
   		'supports'=>array('title','editor','thumbnail','excerpt','custom-fields','revisions'),
   		'public'=>true,
   			'has_archive'=>true,
   			'can_export'=>true,
   			'rewrite'=>array('slug'=>'starts360-manager')
   		));
   
}

}
add_action('init','starts360MangerCPT');

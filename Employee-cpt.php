<?php
if(!function_exists('starts360EmployeeCPT')){
function starts360EmployeeCPT(){
	register_post_type('starts-employee',array(
   			'labels'=>array(
   			'name'=>__('Starts 360 employee'),
   			'Singular_name'=>__('starts360Employee'),
            'menu_name' => __('Starts 360 Employee Post','admin menu')
   		),
   		'supports'=>array('title','editor','thumbnail','excerpt','custom-fields','revisions'),
   		'public'=>true,
   			'has_archive'=>true,
   			'can_export'=>true,
   			'rewrite'=>array('slug'=>'starts360-employee')
   		));
}

}
add_action('init','starts360EmployeeCPT');
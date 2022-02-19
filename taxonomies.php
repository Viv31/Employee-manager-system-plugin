<?php
//Creating taxonomy for Employee and manager

function starts360_register_taxonomy_manager() {
     $labels = array(
         'name'              => _x( 'Manager Taxonomy', 'taxonomy general name' ),
         'singular_name'     => _x( 'ManagerTxo', 'taxonomy singular name' ),
         'search_items'      => __( 'Search ManagerDesignations' ),
         'all_items'         => __( 'All ManagerDesignations' ),
         'parent_item'       => __( 'Parent ManagerDesignations' ),
         'parent_item_colon' => __( 'Parent ManagerDesignations:' ),
         'edit_item'         => __( 'Edit ManagerDesignations' ),
         'update_item'       => __( 'Update ManagerDesignations' ),
         'add_new_item'      => __( 'Add New ManagerDesignations' ),
         'new_item_name'     => __( 'New ManagerDesignations Name' ),
         'menu_name'         => __( 'ManagerDesignations' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'manager-designations' ],
     );
     register_taxonomy( 'ManagerTxo', [ 'starts-manager' ], $args );
}
add_action( 'init', 'starts360_register_taxonomy_manager' );


function starts360_register_taxonomy_employee() {
     $labels = array(
         'name'              => _x( 'Employee Taxonomy', 'taxonomy general name' ),
         'singular_name'     => _x( 'EmployeeTxo', 'taxonomy singular name' ),
         'search_items'      => __( 'Search EmployeeDesignations' ),
         'all_items'         => __( 'All EmployeeDesignations' ),
         'parent_item'       => __( 'Parent EmployeeDesignations' ),
         'parent_item_colon' => __( 'Parent EmployeeDesignations:' ),
         'edit_item'         => __( 'Edit EmployeeDesignations' ),
         'update_item'       => __( 'Update EmployeeDesignations' ),
         'add_new_item'      => __( 'Add New EmployeeDesignations' ),
         'new_item_name'     => __( 'New EmployeeDesignations Name' ),
         'menu_name'         => __( 'EmployeeDesignations' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'employee-designations' ],
     );
     register_taxonomy( 'EmployeeTxo', [ 'starts-employee' ], $args );
}
add_action( 'init', 'starts360_register_taxonomy_employee' );
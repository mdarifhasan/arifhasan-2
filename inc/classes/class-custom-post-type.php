<?php
/**
 * Bootstraps The Theme
 * 
 * @package ARIF THEME
 */

namespace ARIF_THEME\Inc;

use ARIF_THEME\Inc\Traits\Singleton;

class CUSTOM_POST_TYPE{
    use Singleton;
    protected function __construct(){
        // Load Classes
        $this->setup_hooks();

    }
    protected function setup_hooks(){
        /**
         * Actions And Filter
         */
        add_action('init',[$this,'register_post_type']);
    }
    public function register_post_type(){
        // Service post type
        $labels = array(
            'name'                  => esc_html__( 'Services', 'arif-hasan' ),
            'singular_name'         => esc_html__( 'Service','arif-hasan' ),
            'menu_name'             => esc_html__( 'Services', 'arif-hasan' ),
            'name_admin_bar'        => esc_html__( 'Service', 'arif-hasan' ),
            'add_new'               => esc_html__( 'Add New', 'arif-hasan' ),
            'add_new_item'          => esc_html__( 'Add New service', 'arif-hasan' ),
            'new_item'              => esc_html__( 'New service', 'arif-hasan' ),
            'edit_item'             => esc_html__( 'Edit service', 'arif-hasan' ),
            'view_item'             => esc_html__( 'View service', 'arif-hasan' ),
            'all_items'             => esc_html__( 'All services', 'arif-hasan' ),
            'search_items'          => esc_html__( 'Search services', 'arif-hasan' ),
            'parent_item_colon'     => esc_html__( 'Parent services:', 'arif-hasan' ),
            'not_found'             => esc_html__( 'No services found.', 'arif-hasan' ),
            'not_found_in_trash'    => esc_html__( 'No services found in Trash.', 'arif-hasan' ),
            'featured_image'        => esc_html__( 'Service Cover Image', 'arif-hasan' ),
            'set_featured_image'    => esc_html__( 'Set cover image', 'arif-hasan' ),
            'remove_featured_image' => esc_html__( 'Remove cover image','arif-hasan' ),
            'use_featured_image'    => esc_html__( 'Use as cover image','arif-hasan' ),
            'archives'              => esc_html__( 'Service archives', 'arif-hasan' ),
            'insert_into_item'      => esc_html__( 'Insert into service','arif-hasan' ),
            'uploaded_to_this_item' => esc_html__( 'Uploaded to this service','arif-hasan' ),
            'filter_items_list'     => esc_html__( 'Filter services list', 'arif-hasan' ),
            'items_list_navigation' => esc_html__( 'Services list navigation','arif-hasan' ),
            'items_list'            => esc_html__( 'Services list', 'arif-hasan' ),
        );     
        $args = array(
            'labels'             => $labels,
            'description'        => 'Service custom post type.',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'service' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
            'taxonomies'         => array( 'category', 'post_tag' ),
            'show_in_rest'       => true
        );
          
        register_post_type( 'services', $args );

        // Portfolio post type
        $labels = array(
            'name'              => esc_html__( 'Portfolio Categories','arif-hasan' ),
            'singular_name'     => esc_html__( 'Portfolio Category', 'arif-hasan' ),
            'search_items'      => esc_html__( 'Search Category', 'arif-hasan' ),
            'all_items'         => esc_html__( 'All Category', 'arif-hasan' ),
            'parent_item'       => esc_html__( 'Parent Category', 'arif-hasan' ),
            'parent_item_colon' => esc_html__( 'Parent Category:', 'arif-hasan' ),
            'edit_item'         => esc_html__( 'Edit Category', 'arif-hasan' ),
            'update_item'       => esc_html__( 'Update Category', 'arif-hasan' ),
            'add_new_item'      => esc_html__( 'Add New Category', 'arif-hasan' ),
            'new_item_name'     => esc_html__( 'New Category Name', 'arif-hasan' ),
            'menu_name'         => esc_html__( 'Category', 'arif-hasan' ),
        );
     
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'portfolio-category' ),
        );
     
        register_taxonomy( 'portfolio_category', ['portfolios'], $args );



        $labels = array(
            'name'                  => esc_html__( 'Portfolios', 'arif-hasan' ),
            'singular_name'         => esc_html__( 'Portfolio','arif-hasan' ),
            'menu_name'             => esc_html__( 'Portfolios', 'arif-hasan' ),
            'name_admin_bar'        => esc_html__( 'Portfolio', 'arif-hasan' ),
            'add_new'               => esc_html__( 'Add New', 'arif-hasan' ),
            'add_new_item'          => esc_html__( 'Add New portfolio', 'arif-hasan' ),
            'new_item'              => esc_html__( 'New portfolio', 'arif-hasan' ),
            'edit_item'             => esc_html__( 'Edit portfolio', 'arif-hasan' ),
            'view_item'             => esc_html__( 'View portfolio', 'arif-hasan' ),
            'all_items'             => esc_html__( 'All portfolios', 'arif-hasan' ),
            'search_items'          => esc_html__( 'Search portfolios', 'arif-hasan' ),
            'parent_item_colon'     => esc_html__( 'Parent portfolios:', 'arif-hasan' ),
            'not_found'             => esc_html__( 'No portfolios found.', 'arif-hasan' ),
            'not_found_in_trash'    => esc_html__( 'No portfolios found in Trash.', 'arif-hasan' ),
            'featured_image'        => esc_html__( 'Portfolio Cover Image', 'arif-hasan' ),
            'set_featured_image'    => esc_html__( 'Set cover image', 'arif-hasan' ),
            'remove_featured_image' => esc_html__( 'Remove cover image','arif-hasan' ),
            'use_featured_image'    => esc_html__( 'Use as cover image','arif-hasan' ),
            'archives'              => esc_html__( 'Portfolio archives', 'arif-hasan' ),
            'insert_into_item'      => esc_html__( 'Insert into portfolio','arif-hasan' ),
            'uploaded_to_this_item' => esc_html__( 'Uploaded to this portfolio','arif-hasan' ),
            'filter_items_list'     => esc_html__( 'Filter portfolios list', 'arif-hasan' ),
            'items_list_navigation' => esc_html__( 'Portfolios list navigation','arif-hasan' ),
            'items_list'            => esc_html__( 'Portfolios list', 'arif-hasan' ),
        );     
        $args = array(
            'labels'             => $labels,
            'description'        => 'Portfolio custom post type.',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'portfolio' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
            'show_in_rest'       => true
        );
          
        register_post_type( 'portfolios', $args );
    }
   
}
?>
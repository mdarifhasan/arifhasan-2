<?php
/**
 * Bootstraps The Theme
 * 
 * @package ARIF THEME
 */

namespace ARIF_THEME\Inc;

use ARIF_THEME\Inc\Traits\Singleton;

class ARIF_THEME{
    use Singleton;
    protected function __construct(){
        // Load Classes
        Assets::get_instance();
        Menus::get_instance();
        CUSTOM_POST_TYPE::get_instance();
        ARIF_KIRKI_Customizer::get_instance();
       
        $this->setup_hooks();

    }
    protected function setup_hooks(){
        /**
         * Actions And Filter
         */
        add_action('after_setup_theme',[$this,'theme_setup']);
    }
    public function theme_setup(){
        // Tittle
        add_theme_support( 'title-tag');
        // Html5
        add_theme_support('HTML5',[
            'comments-form',
            'comments-list',
            'gallery',
            'search-form',
            'style',
            'scripts'
        ]);
        // Post Thumbnails
        add_theme_support('post-thumbnails');
        // Automatic Feed Links
        global $wp_version;
        if(version_compare($wp_version,'3.0','>=')){
            add_theme_support('automatioc-feed-links');
        }else{
            automatic_feed_links();
        }
        // Customizer Refresh Widget
        add_theme_support('customizer-refresh-widgets');
        // Align Wide support for post block
        add_theme_support('align-wide');
        // Editor-style
        add_editor_style( );
        // Custom Logo
        add_theme_support('custom-logo',[
            'header-text'=>['site-title','site-description'],
            'height'     =>250,
            'width'      =>250,
            'flex-height'=>true,
            'flex-width' =>true
        ]);
        remove_theme_support( 'widgets-block-editor' );
        // Adding excerpt for page
        add_post_type_support( 'page', 'excerpt' );
    }
}
?>
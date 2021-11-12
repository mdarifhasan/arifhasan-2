<?php
/**
 * Assets The Theme
 * 
 * @package ARIF THEME
 */

namespace ARIF_THEME\Inc;

use ARIF_THEME\Inc\Traits\Singleton;

class Assets{
    use Singleton;
    protected function __construct(){
        // Load Classes
        $this->setup_hooks();

    }
    protected function setup_hooks(){
        /**
         * Actions And Filter
         */
        add_action('wp_enqueue_scripts',[$this,'register_style']);
        add_action('wp_enqueue_scripts',[$this,'register_script']);
        add_action('wp_enqueue_scripts',[$this,'register_fonts']);
    }
    public function register_style(){
        // Registering style
        wp_register_style('stylesheet',get_stylesheet_uri(),[],filemtime(ARIF_DIR_PATH.'/style.css'),'all');
    
        wp_register_style('fontAwesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css');

        wp_register_style('main',ARIF_DIR_PATH_URI.'/assets/css/main.min.css',[],filemtime(ARIF_DIR_PATH.'/assets/css/main.min.css'),'all');
        // Enqueuing style
        wp_enqueue_style('styleshhet');
        wp_enqueue_style('fontAwesome');
        wp_enqueue_style('main');
        
    }
    public function register_script(){
        // Registering Scripts
  
        wp_register_script('bodyMovin','https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.8.0/lottie.min.js',['jquery']);
        wp_register_script('main',ARIF_DIR_PATH_URI.'/assets/js/main.js',[],filemtime(ARIF_DIR_PATH.'/assets/js/main.js'),true);
        // Enqueueing Scripts
        wp_enqueue_script('bodyMovin');
        wp_enqueue_script('main');
    }
    public function register_fonts(){

        wp_enqueue_style('google-fonts-pop','https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap',false);
        wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap',false);
    }
}
?>
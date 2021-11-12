<?php
/**
 * Theme Functions
 * 
 * @package Theme Name
 */

if(!defined('ARIF_DIR_PATH_URI')){
    define('ARIF_DIR_PATH_URI',untrailingslashit( get_template_directory_uri() ));
}
if(!defined('ARIF_DIR_PATH')){
    define('ARIF_DIR_PATH',untrailingslashit( get_template_directory() ));
}
require_once ARIF_DIR_PATH.'/inc/helpers/autoloader.php';

function arif_theme_get_instance(){
    ARIF_THEME\Inc\ARIF_THEME::get_instance();
}
arif_theme_get_instance();




function hook_javascript() {
    ?>
        <script>
            // Lottie animation for hero area
            let heroImg = document.querySelector('.hero-img');
            let heroAnimation = bodymovin.loadAnimation({
                container: heroImg,
                render: 'svg',
                loop: true,
                autoplay:true,
                path: './assets/img/hero-animation.json'
            });
        </script>
    <?php
}
add_action('wp_head', 'hook_javascript');


function cc_mime_types($mimes) {
$mimes['json'] = 'application/json'; 
$mimes['svg'] = 'image/svg+xml'; 
return $mimes; 
} 

add_filter('upload_mimes', 'cc_mime_types');
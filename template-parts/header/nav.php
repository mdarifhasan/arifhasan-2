<?php
/**
 * Navigation of the theme
 * 
 * @package ARIF THEME
 */

$menu_class=\ARIF_THEME\Inc\Menus::get_instance();
$header_menu_id=$menu_class->get_menu_id('arif-header-menu');
$header_menus=wp_get_nav_menu_items($header_menu_id);


?>
<nav class="navbar">
    <?php
        if(!empty($header_menus) && is_array($header_menus)){
            ?>
                <ul>
                    <?php
                        foreach($header_menus as $menu_item){
                            ?>
                                <li>
                                    <a href="<?php echo esc_url($menu_item->url)?>">
                                        <?php
                                            echo esc_html( $menu_item->title);
                                        ?>
                                    </a>
                                </li>
                            <?php
                        }
                    ?>
                </ul>
            <?php
        }
    ?>
    <div class="toggle-menu">
        <h3><?php echo esc_html__( 'menu','arif-hasan' ) ?></h3>
        <div class="toggle-bar">
        <div class="bar"></div>
        <div class="bar"></div>
        </div>
    </div>
</nav>
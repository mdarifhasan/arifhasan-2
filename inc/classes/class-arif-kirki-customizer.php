<?php
/**
 * Kirki Customizer to add customizer field and do customization
 * 
 * @package JobGrids
 * 
 */


namespace ARIF_THEME\Inc;

use ARIF_THEME\Inc\Traits\Singleton;
use Kirki;

class ARIF_KIRKI_Customizer{

   use Singleton;
   public function __construct(){

    $this->kirki_customizer();
   }
   public function kirki_customizer(){
    $config_id='jarif_config_id';

    Kirki::add_config( $config_id, array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );
    /**
     * Footer options
     */
    Kirki::add_panel('footer_options',[
        'priority'      =>170,
        'title'         =>esc_html__( 'Footer Options','arif-hasan' ),
    ]);
    // Footer bottom
    Kirki::add_section('footer-bootom',[
        'title'         =>esc_html__( 'Footer Bottom','arif-hasan' ),
        'panel'         =>'footer_options'
    ]);
    Kirki::add_field($config_id,[
        'type'          =>'textarea',
        'settings'      =>'footer_copyright_txt',
        'label'         =>esc_html__( 'Copyright Text', 'jobgrids' ),
        'default'       =>esc_html( '&copy; All Rights Reserved By '),
        'section'       =>'footer-bootom'
    ]);
    Kirki::add_field( $config_id, [
        'type'     => 'link',
        'settings' => 'footer-copyright-url',
        'label'    => __( 'Copyright link', 'arif-hasan' ),
        'section'  => 'footer-bootom',
        'default'  => 'https://mdarifhasan.com/',

    ] );

    Kirki::add_field( $config_id, [
        'type'     => 'text',
        'settings' => 'footer-copyright-url-text',
        'label'    => __( 'Copyright link text', 'arif-hasan' ),
        'section'  => 'footer-bootom',
        'default'  => 'arif hasan',

    ] );
    
    /**
     * call to action
     */
    Kirki::add_panel('cta_panel',[
        'title'     => esc_html__( 'CTA Section' ,'arif-hasan' ),
        'priority'  =>200
    ]);
    Kirki::add_section('cta_section',[
        'title'     =>'section',
        'panel'     =>'cta_panel'
    ]);
    Kirki::add_field( $config_id ,[
        'section'     =>'cta_section',
        'type'      =>'text',
        'settings'  =>'cta_txt',
        'label'     =>esc_html__( 'CTA Text', 'arif-hasan' ),
        'default'   =>esc_html__( "Let's Work Together", 'arif-hasan' ),
    ]);
  
    /**
     *  contact
     */
    Kirki::add_panel('contact',[
        'title'         =>esc_html__( 'Contact','arif-hasan' ),
    ]);
    Kirki::add_section('contact_details', [
        'panel'    =>'contact',
        'title'    =>esc_html__( 'Contact details','arif-hasan' )
    ]);
    Kirki::add_field( $config_id, [
        'type'        => 'repeater',
        'label'       => esc_html__( 'Footer bottom contact', 'arif-hasan' ),
        'section'     => 'contact_details',
        'priority'    => 10,
        'row_label' => [
            'type'  => 'field',
            'value' => esc_html__( 'Your Custom Value', 'arif-hasan' ),
            'field' => 'link_text',
        ],
        'button_label' => esc_html__('Add new contact', 'arif-hasan' ),
        'settings'     => 'contact_details_settings',
        'default'      => [
            [
                'info_txt' => esc_html__( 'Phone', 'arif-hasan' ),
                'info_details'  => '+8801738555995',
            ],
            
        ],
        'fields' => [
            'info_txt' => [
                'type'      => 'text',
                'label'     => esc_html__( 'Info text', 'arif-hasan' ),
                'priority'  => 10,
                'settings'  => 'contact_details_info_txt',
            ],
            'info_details'  => [
                'type'      => 'text',
                'label'     => esc_html__( 'Info details', 'arif-hasan' ),
                'settings'  => 'contact_details_info_details',
            ],
        ]
    ] );
    Kirki::add_section('contact_button', [
        'title'     =>esc_html__( 'Contact Buttons','arif-hasan' ),
        'panel'     =>'contact'
    ]);
    Kirki::add_field($config_id, [
        'label'     =>esc_html__( 'Contact Button text','arif-hasan' ),
        'type'      =>'text',
        'default'   =>esc_html__( 'Contact me', 'arif-hasan' ),
        'section'   =>'contact_button',
        'settings'  =>'contact_btn_txt'

    ]);
    Kirki::add_field($config_id, [
        'label'     =>esc_html__( 'Contact Button url','arif-hasan' ),
        'type'      =>'link',
        'default'   =>esc_url( home_url( ).'/contact' ),
        'section'   =>'contact_button',
        'settings'  =>'contact_btn_url'

    ]);
    /**
     * About section
     */
    Kirki::add_panel('about_panel', [
        'title'     =>esc_html__( 'About Section', 'arif-hasan' )
    ]);
    Kirki::add_section('about_section', [
        'title'     =>esc_html__( 'About Section', 'arif-hasan' )
    ]);

    Kirki::add_field($config_id,[
        'title'     =>esc_html__( 'About title','arif-hasan' ),
        'type'      =>'text',
        'default'   =>esc_html__( "Who's this guy?", 'arif-hasan' ),
        'settings'  =>'about_title',
        'panel'     =>'about_panel'
    ]);
    Kirki::add_field($config_id,[
        'title'     =>esc_html__( 'About title','arif-hasan' ),
        'type'      =>'textarea',
        'default'   =>esc_html__( "This is a description", 'arif-hasan' ),
        'settings'  =>'about_desc',
        'section'     =>'about_section',

    ]);
    Kirki::add_field( $config_id , [
        'type'        => 'image',
        'settings'    => 'about_img_url',
        'label'       => esc_html__( 'About image', 'arif-hasan' ),
        'description' => esc_html__( 'Description Here.', 'arif-hasan' ),
        'section'     => 'about_section',
        'default'     => home_url().'/assets/img/about.png',
    ] );


   }
}
?>
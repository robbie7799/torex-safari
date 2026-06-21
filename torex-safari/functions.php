<?php
// Theme functions: registers CPT "attraction", taxonomy "region", enqueues assets and adds customizer settings

function torex_safari_enqueue(){
    wp_enqueue_style('torex-safari-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts','torex_safari_enqueue');

function torex_safari_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menu('primary','Primary Menu');
}
add_action('after_setup_theme','torex_safari_setup');

// Register Attractions CPT
function torex_register_attraction_cpt(){
    $labels = array(
        'name' => 'Attractions',
        'singular_name' => 'Attraction',
        'add_new_item' => 'Add New Attraction'
    );
    $args = array(
        'labels'=>$labels,
        'public'=>true,
        'has_archive'=>true,
        'show_in_rest'=>true,
        'supports'=>array('title','editor','thumbnail','excerpt'),
        'rewrite'=>array('slug'=>'attractions')
    );
    register_post_type('attraction',$args);

    // Regions taxonomy
    register_taxonomy('region','attraction',array(
        'label'=>'Regions',
        'rewrite'=>array('slug'=>'region'),
        'hierarchical'=>true,
        'show_in_rest'=>true
    ));
}
add_action('init','torex_register_attraction_cpt');

// Customizer: UTB and URSB links + contact info
function torex_customizer_register($wp_customize){
    $wp_customize->add_section('torex_branding', array('title'=>'Torex Safari Settings','priority'=>30));

    $wp_customize->add_setting('torex_utb_url', array('default'=>'https://www.visituganda.com'));
    $wp_customize->add_control('torex_utb_url_ctrl', array(
        'label'=>'Uganda Tourism Board (UTB) URL','section'=>'torex_branding','settings'=>'torex_utb_url','type'=>'url'
    ));

    $wp_customize->add_setting('torex_ursb_url', array('default'=>'https://ursb.go.ug'));
    $wp_customize->add_control('torex_ursb_url_ctrl', array(
        'label'=>'Uganda Registration Services Bureau (URSB) URL','section'=>'torex_branding','settings'=>'torex_ursb_url','type'=>'url'
    ));

    $wp_customize->add_setting('torex_contact', array('default'=>'info@torexsafari.example'));
    $wp_customize->add_control('torex_contact_ctrl', array(
        'label'=>'Contact email/phone','section'=>'torex_branding','settings'=>'torex_contact','type'=>'text'
    ));
}
add_action('customize_register','torex_customizer_register');

// Widget area
function torex_widgets_init(){
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar-1',
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>'
    ));
}
add_action('widgets_init','torex_widgets_init');

// Short helper to output UTB/URSB links from customizer
function torex_brand_links(){
    $utb = esc_url(get_theme_mod('torex_utb_url','https://www.visituganda.com'));
    $ursb = esc_url(get_theme_mod('torex_ursb_url','https://ursb.go.ug'));
    echo '<p class="brand-links">Official: <a href="'. $utb .'" target="_blank">UTB</a> | <a href="'. $ursb .'" target="_blank">URSB</a></p>';
}

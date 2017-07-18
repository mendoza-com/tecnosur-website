<?php
namespace EdgeCore\CPT\Carousels;

use EdgeCore\Lib;

/**
 * Class CarouselRegister
 * @package EdgeCore\CPT\Carousels
 */
class CarouselRegister implements Lib\PostTypeInterface {
    /**
     * @var string
     */
    private $base;
    /**
     * @var string
     */
    private $taxBase;

    public function __construct() {
        $this->base = 'carousels';
        $this->taxBase = 'carousels_category';
    }

    /**
     * @return string
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Registers custom post type with WordPress
     */
    public function register() {
        $this->registerPostType();
        $this->registerTax();
    }

    /**
     * Registers custom post type with WordPress
     */
    private function registerPostType() {
        global $cozy_edge_Framework;

        $menuPosition = 5;
        $menuIcon = 'dashicons-admin-post';
        if(edgt_core_theme_installed()) {
            $menuPosition = $cozy_edge_Framework->getSkin()->getMenuItemPosition('carousel');
            $menuIcon = $cozy_edge_Framework->getSkin()->getMenuIcon('carousel');
        }

        register_post_type($this->base,
            array(
                'labels'    => array(
                    'name'        => __('Edge Carousel','edge-cpt' ),
                    'menu_name' => __('Edge Carousel','edge-cpt' ),
                    'all_items' => __('Carousel Items','edge-cpt' ),
                    'add_new' =>  __('Add New Carousel Item','edge-cpt'),
                    'singular_name'   => __('Carousel Item','edge-cpt' ),
                    'add_item'      => __('New Carousel Item','edge-cpt'),
                    'add_new_item'    => __('Add New Carousel Item','edge-cpt'),
                    'edit_item'     => __('Edit Carousel Item','edge-cpt')
                ),
                'public'    =>  false,
                'show_in_menu'  =>  true,
                'rewrite'     =>  array('slug' => 'carousels'),
                'menu_position' =>  $menuPosition,
                'show_ui'   =>  true,
                'has_archive' =>  false,
                'hierarchical'  =>  false,
                'supports'    =>  array('title'),
                'menu_icon'  =>  $menuIcon
            )
        );
    }

    /**
     * Registers custom taxonomy with WordPress
     */
    private function registerTax() {
        $labels = array(
            'name' => __( 'Carousels', 'edge-cpt' ),
            'singular_name' => __( 'Carousel', 'edge-cpt' ),
            'search_items' =>  __( 'Search Carousels','edge-cpt' ),
            'all_items' => __( 'All Carousels','edge-cpt' ),
            'parent_item' => __( 'Parent Carousel','edge-cpt' ),
            'parent_item_colon' => __( 'Parent Carousel:','edge-cpt' ),
            'edit_item' => __( 'Edit Carousel','edge-cpt' ),
            'update_item' => __( 'Update Carousel','edge-cpt' ),
            'add_new_item' => __( 'Add New Carousel','edge-cpt' ),
            'new_item_name' => __( 'New Carousel Name','edge-cpt' ),
            'menu_name' => __( 'Carousels','edge-cpt' ),
        );

        register_taxonomy($this->taxBase, array($this->base), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'show_admin_column' => true,
            'rewrite' => array( 'slug' => 'carousels-category' ),
        ));
    }

}
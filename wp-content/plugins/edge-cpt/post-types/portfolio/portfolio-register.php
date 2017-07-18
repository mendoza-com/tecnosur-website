<?php
namespace EdgeCore\CPT\Portfolio;

use EdgeCore\Lib\PostTypeInterface;

/**
 * Class PortfolioRegister
 * @package EdgeCore\CPT\Portfolio
 */
class PortfolioRegister implements PostTypeInterface {
    /**
     * @var string
     */
    private $base;

    public function __construct() {
        $this->base = 'portfolio-item';
        $this->taxBase = 'portfolio-category';

        add_filter('single_template', array($this, 'registerSingleTemplate'));
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
        $this->registerTagTax();
    }

    /**
     * Registers portfolio single template if one does'nt exists in theme.
     * Hooked to single_template filter
     * @param $single string current template
     * @return string string changed template
     */
    public function registerSingleTemplate($single) {
        global $post;

        if($post->post_type == $this->base) {
            if(!file_exists(get_template_directory().'/single-portfolio-item.php')) {
                return EDGE_CORE_CPT_PATH.'/portfolio/templates/single-'.$this->base.'.php';
            }
        }

        return $single;
    }

    /**
     * Registers custom post type with WordPress
     */
    private function registerPostType() {
        global $cozy_edge_Framework, $cozy_edge_options;

        $menuPosition = 5;
        $menuIcon = 'dashicons-admin-post';
        $slug = $this->base;

        if(edgt_core_theme_installed()) {
            $menuPosition = $cozy_edge_Framework->getSkin()->getMenuItemPosition('portfolio');
            $menuIcon = $cozy_edge_Framework->getSkin()->getMenuIcon('portfolio');

            if(isset($cozy_edge_options['portfolio_single_slug'])) {
                if($cozy_edge_options['portfolio_single_slug'] != ""){
                    $slug = $cozy_edge_options['portfolio_single_slug'];
                }
            }
        }

        register_post_type( $this->base,
            array(
                'labels' => array(
                    'name' => __( 'Portfolio','edge-cpt' ),
                    'singular_name' => __( 'Portfolio Item','edge-cpt' ),
                    'add_item' => __('New Portfolio Item','edge-cpt'),
                    'add_new_item' => __('Add New Portfolio Item','edge-cpt'),
                    'edit_item' => __('Edit Portfolio Item','edge-cpt')
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => $slug),
                'menu_position' => $menuPosition,
                'show_ui' => true,
                'supports' => array('author', 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'comments'),
                'menu_icon'  =>  $menuIcon
            )
        );
    }

    /**
     * Registers custom taxonomy with WordPress
     */
    private function registerTax() {
        $labels = array(
            'name' => __( 'Portfolio Categories', 'edge-cpt' ),
            'singular_name' => __( 'Portfolio Category', 'edge-cpt' ),
            'search_items' =>  __( 'Search Portfolio Categories','edge-cpt' ),
            'all_items' => __( 'All Portfolio Categories','edge-cpt' ),
            'parent_item' => __( 'Parent Portfolio Category','edge-cpt' ),
            'parent_item_colon' => __( 'Parent Portfolio Category:','edge-cpt' ),
            'edit_item' => __( 'Edit Portfolio Category','edge-cpt' ),
            'update_item' => __( 'Update Portfolio Category','edge-cpt' ),
            'add_new_item' => __( 'Add New Portfolio Category','edge-cpt' ),
            'new_item_name' => __( 'New Portfolio Category Name','edge-cpt' ),
            'menu_name' => __( 'Portfolio Categories','edge-cpt' ),
        );

        register_taxonomy($this->taxBase, array($this->base), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
	        'show_admin_column' => true,
            'rewrite' => array( 'slug' => 'portfolio-category' ),
        ));
    }

    /**
     * Registers custom tag taxonomy with WordPress
     */
    private function registerTagTax() {
        $labels = array(
            'name' => __( 'Portfolio Tags', 'edge-cpt' ),
            'singular_name' => __( 'Portfolio Tag', 'edge-cpt' ),
            'search_items' =>  __( 'Search Portfolio Tags','edge-cpt' ),
            'all_items' => __( 'All Portfolio Tags','edge-cpt' ),
            'parent_item' => __( 'Parent Portfolio Tag','edge-cpt' ),
            'parent_item_colon' => __( 'Parent Portfolio Tags:','edge-cpt' ),
            'edit_item' => __( 'Edit Portfolio Tag','edge-cpt' ),
            'update_item' => __( 'Update Portfolio Tag','edge-cpt' ),
            'add_new_item' => __( 'Add New Portfolio Tag','edge-cpt' ),
            'new_item_name' => __( 'New Portfolio Tag Name','edge-cpt' ),
            'menu_name' => __( 'Portfolio Tags','edge-cpt' ),
        );

        register_taxonomy('portfolio-tag',array($this->base), array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
	        'show_admin_column' => true,
            'rewrite' => array( 'slug' => 'portfolio-tag' ),
        ));
    }
}
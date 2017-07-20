<?php
/**
 * Cache class
 * 
 * @package   WP_Simple_SEO
 * @author    WP Simple SEO
 * @version   1.0.0
 * @copyright WP Simple SEO
 */
class WP_Simple_SEO_Cache {

    /**
     * Holds the class object.
     *
     * @since 1.0.0
     *
     * @var object
     */
    public static $instance;

    /**
     * Constructor
     *
     * @since 1.0.0
     */
    public function __construct() {

        
    }

    /**
     * Helper method to determine whether caching data is enabled.
     *
     * @since   1.0.0
     *
     * @return  bool    Caching Enabled
     */
    public function enabled() {

        // By default, enable caching
        $cache_enabled = true;

        // Don't cache in development mode
        if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
            $cache_enabled = false;
        }

        // Return filtered result
        return apply_filters( 'wp_simple_seo_cache_enabled', $cache_enabled );

    }

    /**
     * Helper method to determine how long to cache data for.
     *
     * Transients are automatically cleared when a change in the underlying data occurs (e.g. Post published,
     * Taxonomy Term added), so the caching duration can be safely set to a very long time.
     *
     * @since   1.0.0
     *
     * @return  int    Caching Duration
     */
    public function duration() {

        // Return filtered result
        return apply_filters( 'wp_simple_seo_cache_duration', YEAR_IN_SECONDS );

    }

    /**
     * Returns cached data for the given type, if caching is enabled and data exists.
     *
     * @since   1.0.0
     *
     * @param   string  $type   Type
     * @return  mixed           false | Data
     */
    public function get( $type ) {

        // If caching is disabled, bail
        if ( ! $this->enabled() ) {
            return false;
        }

        // Get data
        $data = get_transient( 'wp_simple_seo_cache_' . $type );

        // Filter
        $data = apply_filters( 'wp_simple_seo_cache_get', $data, $type );

        return $data;
     
    }

    /**
     * Caches the given data by storing it as a transient, if caching is enabled.
     *
     * @since   1.0.0
     *
     * @param   string  $type   Type
     * @param   array   $data   Data
     */
    public function set( $type, $data ) {

        // If caching is disabled, bail
        if ( ! $this->enabled() ) {
            return false;
        }

        // If data is empty, bail
        if ( empty( $data ) ) {
            return false;
        }

        // Filter
        $data = apply_filters( 'wp_simple_seo_cache_set', $data, $type );

        // Cache data
        set_transient( 'wp_simple_seo_cache_' . $type, $data, $this->duration() );

    }

    /**
     * Deletes the given transient name from storage.
     *
     * @since   1.0.1
     *
     * @param   string  $type   Type
     */
    public function delete( $type ) {

        delete_transient( 'wp_simple_seo_cache_' . $type );

    }

    /**
     * Deletes all transients starting with wp_simple_seo_
     *
     * @since   1.0.1
     */
    public function delete_all() {

        global $wpdb;
        
        $wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE '_transient_wp_simple_seo_%'" );
        $wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE '_site_transient_wp_simple_seo_%'" );
        $wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE '_transient_timeout_wp_simple_seo_%'" );
        $wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE '_site_transient_timeout_wp_simple_seo_%'" );

    }

    /**
     * Returns the singleton instance of the class.
     *
     * @since 1.0.0
     *
     * @return object Class.
     */
    public static function get_instance() {

        if ( ! isset( self::$instance ) && ! ( self::$instance instanceof self ) ) {
            self::$instance = new self;
        }

        return self::$instance;

    }

}
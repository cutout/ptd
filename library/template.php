<?php

class SiteTemplate {

    // default site description
    private static $site_description = 'Partnering with <a href="http://theme.wordpress.com/themes/by/pro-theme-design/" target="_blank">WordPress.com</a> to build themes for thousands of creative bloggers.';

    // default site title
    private static $site_title = 'Pro Theme Design - WordPress Themes and Plugins';


    // Don't allow object instantiation
    private function __construct() {}
    private function __destruct() {}
    private function __clone() {}


    /**
     * get or set the site description
     */
    public static function description( $new_description = '' ) {

        if ( ! empty( $new_description ) ) {
            self::$site_description = $new_description;
        } else {
            echo self::$site_description;
        }

    }


    /**
     * get or set the site title
     */
    public static function title( $new_title = '' ) {

        if ( ! empty( $new_title ) ) {
            self::$site_title = $new_title;
        } else {
            echo self::$site_title;
        }

    }

}
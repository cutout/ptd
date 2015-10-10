<?php

/**
 * Homepage
 */
Flight::route( '/', function() {

    SiteTemplate::description( 'Designing <strong>Professional WordPress Themes</strong> since 2007.' );

    Flight::render(
        'home.php'
    );

} );


/**
 * Tools Pages
 */
Flight::route( '/tools/(@tool)/', function( $tool = '' ) {

    $view = 'tools.php';
    $layout = 'index.php';
    $tool_data = array();

    SiteTemplate::title( 'Pro Theme Design Handy Tools' );

    if ( ! empty( $tool ) ) {
        if ( $tool_data = tool_get( $tool ) ) {

            SiteTemplate::title( $tool_data['name'] . ' - Pro Theme Design' );
            SiteTemplate::description( $tool_data['description'] );

            $layout = '_' . $tool . '/index.php';

            if ( isset( $tool_data['view'] ) ) {
                $view = $tool_data['view'];
            }

        } else {

            Flight::notFound();

        }
    }

    Flight::render(
        $view,
        array(
            'tool' => $tool_data,
            'layout' => $layout,
        )
    );

} );


/**
 * Theme Club
 */
Flight::route( '/theme-club/', function() {

    // this number isn't strictly accurate - but it's pretty close
    $customers = date( 'U' ) / 12345;
    $customers = number_format( $customers );

    SiteTemplate::title( 'WordPress Themes Club' );
    SiteTemplate::description( 'Join over <strong>' . $customers . '</strong> happy themers.' );

    Flight::render(
        'theme-club.php'
    );

} );

/**
 * Theme
 */
Flight::route( '/theme/(@theme)/', function( $theme = '' ) {

    $theme_data = array();
    $themes = array();
    $theme_name = '';

    if ( ! empty( $theme ) && themes_exist( $theme ) ) {

        $theme_data = themes_get( $theme );
        $theme_name = $theme;
        $themes = get_theme_data();

        SiteTemplate::title( $theme_data[ 'name' ] );

    } else {

        Flight::notFound();

    }


    Flight::render(
        'theme.php',
        array(
            'theme' => $theme_data,
            'theme_name' => $theme_name,
            'themes' => $themes,
        )
    );

} );


/**
 * Theme Showcase
 */
Flight::route( '/theme-showcase/(@tag)/', function( $tag = '' ) {

    $title = 'WordPress Themes Showcase';
    $websites = array();

    if ( website_tag_exists( $tag ) ) {

        $websites = website_get_by_tag( $tag );

        if ( ! empty( $tag ) ) {
            $title = sprintf( '%s Themes: WordPress Themes Showcase', ucwords( $tag ) );
        }

    } else {

        Flight::notFound();

    }

    SiteTemplate::title( $title );
    SiteTemplate::description( 'A selection of the <strong>thousands of awesome sites</strong> our customers have built!' );

    Flight::render(
        'showcase.php',
        array(
            'websites' => $websites,
            'tag' => $tag
        )
    );

} );


/**
 * Terms and Conditions
 */
Flight::route( '/policies/', function() {

    SiteTemplate::title( 'Terms and Conditions' );

    Flight::render(
        'terms-and-conditions.php'
    );

} );


/**
 * WordPress Plugins
 */
Flight::route( '/wordpress-plugins/', function() {

    SiteTemplate::title( 'Recommended WordPress Plugins' );
    SiteTemplate::description( 'Plugins for creating the perfect WordPress site.' );

    Flight::render(
        'plugins.php'
    );

} );


/**
 * Contact
 */
Flight::route( '/contact/', function() {

    SiteTemplate::title( 'Contact Us' );
    SiteTemplate::description( 'Get in touch.' );

    Flight::render(
        'contact.php'
    );

} );


/**
 * Search
 */
Flight::route( '/search/', function() {

    SiteTemplate::title( 'Search' );

    Flight::render(
        'search.php'
    );

} );


/**
 * Theme Customization
 */
Flight::route( '/theme-customization/', function() {

    SiteTemplate::title( 'WordPress Theme Customization' );
    SiteTemplate::description( 'Customize your theme with <strong>Codeable.io</strong>.' );

    Flight::render(
        'theme-customizer.php'
    );

} );


/**
 * Contact Thanks
 */
Flight::route( '/contact/thanks/', function() {

    SiteTemplate::description( 'Thanks for the message!' );

    Flight::render(
        'contact-thanks.php',
        array(
            'title' => 'Contact Us',
        )
    );

} );


/**
 * Support
 */
Flight::route( '/documentation/(@type)(/@page)/', function( $type = '', $page = '' ) {

    $layout = '';

    SiteTemplate::add_breadcrumb( 'Support', 'documentation/' );

    if ( $type == '' && $page == '' ) {
        $layout = '_support/index.php';
    }

    if ( documentation_type_exists( $type ) ) {

        $layout = '_support/archive.php';

        SiteTemplate::add_breadcrumb( documentation_type_name( $type ), 'documentation/' . $type . '/' );
        SiteTemplate::title( sprintf( '%s Help - Pro Theme Design', documentation_type_name( $type ) ) );

        if ( documentation_page_exists( $page ) ) {

            $layout = '_support/type-' . $type . '.php';

            SiteTemplate::add_breadcrumb( documentation_page_name( $page ), 'documentation/' . $type . '/' . $page . '/' );
            SiteTemplate::title( sprintf( '%s Help - Pro Theme Design', documentation_page_name( $page ) ) );

        } else {

            if ( ! empty( $page ) ) {
                $page = '';
                $layout = '';
            }

        }

    } else {

        // reset just in case
        $type = '';
        $page = '';

    }

    if ( empty( $layout ) ) {

        Flight::notFound();

    }


    Flight::render(
        'documentation.php',
        array(
            'title' => 'Theme Documentation',
            'layout' => $layout,
            'type' => $type,
            'page' => $page,
        )
    );

} );


/**
 * theme preview
 */
Flight::route( '/theme-preview/(@theme)/', function( $theme = '' ) {

    SiteTemplate::title( 'Theme Preview' );
    $template = 'theme-preview.php';

    if ( ! themes_exist( $theme ) ) {

        Flight::notFound();

    }

    Flight::render(
        $template,
        array(
            'theme' => $theme,
        )
    );

} );


/**
 * theme preview
 */
Flight::route( '/showcase-preview/(@site)/', function( $site = '' ) {

    SiteTemplate::title( 'Showcase Site Preview' );
    $template = 'showcase-preview.php';

    if ( ! website_exists( $site ) ) {

        Flight::notFound();

    }

    Flight::render(
        $template,
        array(
            'site' => $site,
        )
    );

} );


/**
 * 404
 */
Flight::map( 'notFound', function() {

    SiteTemplate::title( '404 - not found :(' );

    $request = Flight::request();

    // see if there's a valid permanent redirect, and if there is send the user to the new location
    if ( $redirect_url = redirect_destination( $request->url ) ) {
        Flight::redirect( $redirect_url, 301 );
        die();
    }

    header( 'HTTP/1.0 404 Not Found' );

    Flight::render(
        '404.php'
    );

    die();

} );
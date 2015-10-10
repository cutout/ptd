<?php

/**
 * DOCUMENTATION IMPROVEMENTS
 *
 * installing child themes
 * add installation procedure to theme docs
 * plugin installation
 * theme updates
 * info about custom widgets for mimbo pro
 * link to tutorials on general wordpress usage
 * documentation about customizer
 * info about customizer settings as needed
 * screenshots for features
 * screenshots showing front page setup
 * web hosting with aff links?
 * add browser and server requirements doc
 */

/**
 * FlightPHP - http://flightphp.com/
 * FlightPHP on Github - https://github.com/mikecao/flight
 */

$environment = 'prod';

// enable debug on localhost
if ( 'localhost' == $_SERVER[ 'HTTP_HOST' ] ) {
    error_reporting( -1 );
    ini_set( 'display_errors', 'On' );
    $environment = 'dev';
}


// constants
define( 'DECACHE_CSS', '12' );
define( 'DECACHE_JS', '7' );
define( 'ENV', $environment );
define( 'GOOGLE_CSE', '010164663960188762731:aajo_mt5e2a' );


// include needed stuff
include_once( 'flight/Flight.php' );
include_once( 'library/routes.php' );
include_once( 'library/data.php' );
include_once( 'library/functions.php' );
include_once( 'library/template.php' );


// ensure the production site is running on https and using a canonical domain name (no www)
if ( 'prod' === $environment ) {

    $url = $_SERVER[ 'HTTP_X_FORWARDED_PROTO' ] . '://' . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
    $target_url = 'https://' . str_replace( 'www.', '', $_SERVER[HTTP_HOST] ) . $_SERVER[REQUEST_URI];

    if ( $target_url !== $url ) {
        Flight::redirect( $target_url, 301 );
    }

}


// take flight
Flight::start();

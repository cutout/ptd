<?php


/**
 * Return the css path for the specified file
 *
 * @param  string [$path       = ''] CSS url to retrieve
 * @return sring  Completed url
 */
function css_path( $path = '' ) {

    return path( 'styles/' . $path . '?d=' . DECACHE_CSS );

}


/**
 * Return the image path for the specified file
 *
 * @param  string [$path       = ''] Image path to retrieve
 * @return string Completed image path
 */
function image_path( $path = '' ) {

    return path( 'img/' . $path . '?d=' . DECACHE_CSS );

}


/**
 * Return the javascript path for the specified file
 *
 * @param  string [$path       = ''] Javascript path to retrieve
 * @return string Completed javascript path, with decache property appended
 */
function js_path( $path = '' ) {

    return path( 'js/' . $path . '?d=' . DECACHE_JS );

}


/**
 * A reusable helper that generates the path with the correct parent location
 *
 * @param  string [$path       = ''] Path value to get complete url for
 * @return string Completed url
 */
function path( $path = '' ) {

    $path = ltrim( $path, '/' );

    return get_base() . '/' . $path;

}


/**
 * Get the base directory for the site
 *
 * by default the Flight request object returns a / for site root and no / for directories - so this keeps things consistent
 * @return string Completed url
 */
function get_base() {

    $request = Flight::request();

    return rtrim( $request->base, '/' );

}


/**
 * Output a twitter share link
 *
 * @param string [$message       = ''] Message to display in Twitter share link
 */
function twitter_share_link( $message = '' ) {

    $args = array(
        'text' => urlencode( $message ),
        'url' => urlencode( 'https://prothemedesign.com' . Flight::request()->url ),
        'related' => 'prothemedesign',
    );

    $link = 'http://twitter.com/intent/tweet?';

    foreach( $args as $k => $v ) {
        $link .= '&amp;' . $k . '=' . $v;
    }

    echo $link;

}


/**
 * Return the screenshot url for a website
 *
 * @param  string $url Url to generate the screenshot from
 * @return string Completed url
 */
function site_screenshot( $url ) {

    return 'https://s0.wordpress.com/mshots/v1/' . urlencode( $url ) . '?w=400&h=300';

}


/**
 * Include a view (as long as it exists)
 *
 * @param string $path      File in the views directory to include
 * @param array  $variables Variables to make accessible to included file
 */
function site_include_view( $path, $variables = array() ) {

    $path = site_view_path( $path );

    if ( file_exists( $path ) ) {

        // if variables are set then make them usable
        if ( ! empty( $variables ) ) {

            extract( $variables );

        }

        // include file
        include( $path );

    }

}


/**
 * Get a file path relative to the view directory
 *
 * @param  string $path File path to retrieve
 * @return string Completed file path
 */
function site_view_path( $path ) {

    return Flight::get( 'flight.views.path' ) . '/' . $path;

}


/**
 * Check to see if a specific view file exists.
 *
 * @param  string  $path Path to check.
 * @return boolean true if exists, false otherwise.
 */
function site_include_exists( $path ) {

    return file_exists( site_view_path( $path ) );

}


/**
 * Is the current page the homepage
 *
 * @return boolean True if the page is the homepage, Flase otherwise
 */
function page_is_home() {

    return page_is( '/' );

}


/**
 * Determine if we are on the specified page.
 *
 * @param  string  $page The url of the page we want to check.
 * @return boolean true if the url is the one specified in page. False otherwise.
 */
function page_is( $page ) {

    return ( $page === Flight::request()->url );

}


/**
 * Is the current page in the theme route
 *
 * @return boolean true if the current page is a themes one.
 */
function page_is_themes() {

    $path = Flight::request()->url;

    // if path begins with /themes/
    if ( substr( $path, 0, 8 ) === '/themes/' ) {
        return true;
    }

    return false;

}


/**
 * Calculate how many customers we have served
 *
 * @return integer The number of customers served.
 */
function paid_customers() {

    // this number isn't strictly accurate - but it's pretty close to the true number of users
    $customers = date( 'U' ) / 12345;
    $customers = number_format( $customers );

    return $customers;

}

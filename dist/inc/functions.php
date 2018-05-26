<?php
/**
 * Functions File
 *
 * @since 1.0.0
 *
*/

/**
 * Convert string to lowercase, replace whitespace with hyphen, remove special characters.
 *
 * @link https://stackoverflow.com/a/11330527
 */
function page_url( $string ) {
  //Lower case everything
  $string = strtolower( $string );
  //Make alphanumeric (removes all other characters)
  $string = preg_replace( '/[^a-z0-9_\s-]/', '', $string );
  //Clean up multiple dashes or whitespaces
  $string = preg_replace( '/[\s-]+/', ' ', $string );
  //Convert whitespaces and underscore to dash
  $string = preg_replace( '/[\s_]/', '-', $string );

  return $string;
}

/**
 * Output minified CSS if `IS_PRODUCTION_ENV` is set to `true` (see: `./inc/environment.php`),
 * else output non-minified CSS.
 *
 * @since 1.0.0
 */
function get_stylesheets() {

  $arr_stylesheets = array( // list of CSS files (in order)
    'css/ie10-viewport-bug-workaround.css',
    'css/animate.css',
    'css/main.css'
  );

  if (IS_PRODUCTION_ENV) :

    echo '<link href="css/styles.min.css" rel="stylesheet">' . "\r\n";

  else:

    echo "<link href=\"" . implode( "\" rel=\"stylesheet\">\r\n  <link href=\"", $arr_stylesheets ) . "\" rel=\"stylesheet\">\r\n";

  endif;
}



/**
 * Output minified JS if `IS_PRODUCTION_ENV` is set to `true` (see: `./inc/environment.php`),
 * else output non-minified JS.
 *
 * @since 1.0.0
 */
function get_scripts() {

  $arr_scripts = array( // list of JS files (in order)
    'js/plugins.js',
    'js/jquery.easing.js',
    'js/jquery.fittext.js',
    'js/wow.js',
    'js/creative.js',
    'js/main.js',
    'js/ie10-viewport-bug-workaround.js'
  );

  if (IS_PRODUCTION_ENV) :

    echo '<script src="js/scripts.min.js"></script>' . "\r\n";

  else:

    echo "<script src=\"" . implode( "\"></script>\r\n  <script src=\"", $arr_scripts ) . "\"></script>\r\n";

  endif;
}

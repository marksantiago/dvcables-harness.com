<?php
/**
 * Default Configuration File
 *
 * @since 1.0.0
 *
*/
require_once( dirname(__FILE__) . '/environment.php' );
require_once( dirname(__FILE__) . '/functions.php' );
require_once( dirname(__FILE__) . '/main.php' );


/**
 * Define strings. We set values later on to `./inc/main.php`
*/

$str_page_meta_copyright     = "Copyright &copy; " . date('Y') . " " . $str_page_meta_author . ".";     // Page meta copyright

$str_page_title_home         = $str_site_title . $str_site_title_separator . $str_site_description;     // Page Title for home page



/**
 *	Pages
 */

// Page A
$str_page_id_page_a       = trim( strtolower( $str_page_a_name ) );                               // Page A Page ID
$str_page_title_page_a    = trim($str_page_a_name) . $str_site_title_separator . $str_site_title; // Page A Page Title
$str_page_a_file_path     = "pages/" . page_url( $str_page_a_name ) . "/";                  // URL Path to Page A index file
$str_page_a_img_file_name = "img/pages/" . page_url( $str_page_a_name ) . ".jpg";           // URL Path to Page A img

// Page B
$str_page_id_page_b       = trim( strtolower( $str_page_b_name ) );                               // Page B Page ID
$str_page_title_page_b    = trim($str_page_b_name) . $str_site_title_separator . $str_site_title; // Page B Page Title
$str_page_b_file_path     = "pages/" . page_url( $str_page_b_name ) . "/";                  // URL Path to Page B index file
$str_page_b_img_file_name = "img/pages/" . page_url( $str_page_b_name ) . ".jpg";           // URL Path to Page B img

// Page C
$str_page_id_page_c       = trim( strtolower( $str_page_c_name ) );                               // Page C Page ID
$str_page_title_page_c    = trim($str_page_c_name) . $str_site_title_separator . $str_site_title; // Page C Page Title
$str_page_c_file_path     = "pages/" . page_url( $str_page_c_name ) . "/";                  // URL Path to Page C index file
$str_page_c_img_file_name = "img/pages/" . page_url( $str_page_c_name ) . ".jpg";           // URL Path to Page C img

// Page D
$str_page_id_page_d       = trim( strtolower( $str_page_d_name ) );                               // Page D Page ID
$str_page_title_page_d    = trim($str_page_d_name) . $str_site_title_separator . $str_site_title; // Page D Page Title
$str_page_d_file_path     = "pages/" . page_url( $str_page_d_name ) . "/";                  // URL Path to Page D index file
$str_page_d_img_file_name = "img/pages/" . page_url( $str_page_d_name ) . ".jpg";           // URL Path to Page D img

// Page E
$str_page_id_page_e       = trim( strtolower( $str_page_e_name ) );                               // Page E Page ID
$str_page_title_page_e    = trim($str_page_e_name) . $str_site_title_separator . $str_site_title; // Page E Page Title
$str_page_e_file_path     = "pages/" . page_url( $str_page_e_name ) . "/";                  // URL Path to Page E index file
$str_page_e_img_file_name = "img/pages/" . page_url( $str_page_e_name ) . ".jpg";           // URL Path to Page E img

// Page F
$str_page_id_page_f       = trim( strtolower( $str_page_f_name ) );                               // Page F Page ID
$str_page_title_page_f    = trim($str_page_f_name) . $str_site_title_separator . $str_site_title; // Page F Page Title
$str_page_f_file_path     = "pages/" . page_url( $str_page_f_name ) . "/";                  // URL Path to Page F index file
$str_page_f_img_file_name = "img/pages/" . page_url( $str_page_f_name ) . ".jpg";           // URL Path to Page F img

<?php
/**
 * Main Configuration File.
 * We set our values here to strings defined in `./inc/default.php`
 *
 * @since 1.0.0
 *
*/


/**
 *	Page Title Display Properties
 *
 *  Configured in `./inc/default.php`, here we set our values.
 *  If empty, fallsback to hardcoded values in `./inc/header.php`.
 *
 *	These properties affects how page title is displayed, optimized for SEO.
 *
 *	For example: 
 *		if on home page     ->	Site Title - Site Description
 *		else if on subpages	->	Page Title - Site Title
 *
 */
$str_site_title           = "DV Cables &amp; Harness";                                   // Site/Company Title
$str_site_description     = "Company Site Description or Tagline"; // Site/Company Description (Tagline)
$str_site_title_separator = " &#8211; ";                                            // Site Title Separator (whitespace + hyphen + whitespace)


/*********************************
 *
 * HEADER
 *
 *********************************/

$str_page_meta_author             = "John Doe";          // Page meta author
$str_page_meta_robots_default     = "index,archive,follow";     // Page meta robots all webpages
$str_page_meta_robots_404         = "noindex,noarchive,follow"; // Page meta robots 404 error page
$str_page_id_home               = "home";         // Home Page ID	
$str_page_meta_description_home = "Company Home Page meta Description."; // Page meta description for home page


/**
 * !IMPORTANT!
 *
 * When setting the values for Pages,
 *
 * for example:
 *
 * $str_page_a_name = "Hello World";
 *
 * (1) Manually rename `/pages/page-a/` to `/pages/hello-world/`
 *
 * (2) Manually rename `/img/pages/page-a.jpg` to `/img/pages/hello-world.jpg`
 *
 * (3) Manually rename the `url` path to the `background` property for `.page-a` class selector in the `main.css` file
 *
 * for example,
 *
 * .page-a {
 *   background:
 *     -webkit-linear-gradient(
 *       rgba(0, 0, 0, 0.3),
 *       rgba(0, 0, 0, 0.3)
 *     ),
 *     url('../img/pages/hello-world.jpg');
 *   background:
 *     linear-gradient(
 *       rgba(0, 0, 0, 0.3),
 *       rgba(0, 0, 0, 0.3)
 *     ),
 *     url('../img/pages/hello-world.jpg');
 *   -webkit-background-size: cover;
 *      -moz-background-size: cover;
 *        -o-background-size: cover;
 *           background-size: cover;
 * }
 *
 */
 
 
/*********************************
 *
 * Pages - `./pages/../index.php`
 *
 *********************************/

// Page A
$str_page_a_name                  = "Page A";                        // Page A name
$str_page_meta_description_page_a = "Page A Meta Description.";      // Page A Page meta description
$str_page_a_img_alt_attr          = "";                                 // Page A img alt text (thumbnail images on home page Portfolio section)
$arr_page_a_service_type          = array( 'lorem', 'ipsum', 'dolor' ); // Categories associated with page A

// Page B
$str_page_b_name                  = "Page B";                        // Page B name
$str_page_meta_description_page_b = "Page B Meta Description.";      // Page B Page meta description
$str_page_b_img_alt_attr          = "";                                 // Page B img alt text (thumbnail images on home page Portfolio section)
$arr_page_b_service_type          = array( 'lorem', 'ipsum', 'dolor' ); // Categories associated with page B

// Page C
$str_page_c_name                  = "Page C";                        // Page C name
$str_page_meta_description_page_c = "Page C Meta Description.";      // Page C Page meta description
$str_page_c_img_alt_attr          = "";                                 // Page C img alt text (thumbnail images on home page Portfolio section)
$arr_page_c_service_type          = array( 'lorem', 'ipsum', 'dolor' ); // Categories associated with page C

// Page D
$str_page_d_name                  = "Page D";                        // Page D name
$str_page_meta_description_page_d = "Page D Meta Description.";      // Page D Page meta description
$str_page_d_img_alt_attr          = "";                                 // Page D img alt text (thumbnail images on home page Portfolio section)
$arr_page_d_service_type          = array( 'lorem', 'ipsum', 'dolor' ); // Categories associated with page D

// Page E
$str_page_e_name                  = "Page E";                        // Page E name
$str_page_meta_description_page_e = "Page E Meta Description.";      // Page E Page meta description
$str_page_e_img_alt_attr          = "";                                 // Page E img alt text (thumbnail images on home page Portfolio section)
$arr_page_e_service_type          = array( 'lorem', 'ipsum', 'dolor' ); // Categories associated with page E

// Page F
$str_page_f_name                  = "Page F";                        // Page F name
$str_page_meta_description_page_f = "Page F Meta Description.";      // Page F Page meta description
$str_page_f_img_alt_attr          = "";                                 // Page F img alt text (thumbnail images on home page Portfolio section)
$arr_page_f_service_type          = array( 'lorem', 'ipsum', 'dolor' ); // Categories associated with page F


/*********************************
 *
 * CONTENT - HOME
 *
 *********************************/
 
 
/**
 *	Home - Header Content (banner)
 */
$str_content_home_header_btn_text                            = "Find Out More";



/**
 *	Home - About Section Content
 */
$str_content_home_about_section_heading_text                 = "We've got what you need!";
$str_content_home_about_section_paragraph_text               = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$str_content_home_about_section_btn_text                     = "Get Started!";



/**
 *	Home - Services Section Content
 */
$str_content_home_services_section_heading_text              = "At Your Service";

  // Service Box Column 1
  $str_content_home_services_section_col_1_font_awesome_icon = "fa-diamond";     // default= "fa-diamond";
  $str_content_home_services_section_col_1_heading_text      = "Lorem Ipsum";
  $str_content_home_services_section_col_1_paragraph_text    = "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

  // Service Box Column 2
  $str_content_home_services_section_col_2_font_awesome_icon = "fa-paper-plane"; // default= "fa-paper-plane";
  $str_content_home_services_section_col_2_heading_text      = "Dolor Sit Amet";
  $str_content_home_services_section_col_2_paragraph_text    = "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris!";

  // Service Box Column 3
  $str_content_home_services_section_col_3_font_awesome_icon = "fa-newspaper-o"; // default= "fa-newspaper-o";
  $str_content_home_services_section_col_3_heading_text      = "Consectetur Adipiscing";
  $str_content_home_services_section_col_3_paragraph_text    = "Duis aute irure dolor in reprehenderit in voluptate.";

  // Service Box Column 4
  $str_content_home_services_section_col_4_font_awesome_icon = "fa-heart";       // default= "fa-heart";
  $str_content_home_services_section_col_4_heading_text      = "Sed Do Eiusmod";
  $str_content_home_services_section_col_4_paragraph_text    = "Excepteur sint occaecat cupidatat non proident!";



/**
 *	Home - Pages Aside Content
 */
$str_content_home_pages_aside_heading_text                = "Portfolio";
$str_content_home_pages_aside_paragraph_text              = "Lorem ipsum dolor sit amet consectetur.";



/**
 *	Home - Contact Section Content
 */
$str_content_home_contact_section_heading_text               = "Let's Get In Touch!";
$str_content_home_contact_section_paragraph_text             = "Excepteur sint occaecat cupidatat non proident? That's great! Give us a call or send us an email and we will get back to you as soon as possible!";

  // Phone Column 1
  $str_content_home_contact_section_col_1_font_awesome_icon  = "fa-phone";                         // default= "fa-phone";
  $str_content_home_contact_section_col_1_url                = "tel://1-555-555-5555";             // Change this to match the site's telephone number
  $str_content_home_contact_section_col_1_url_text           = "+1 (555) 555-5555";                // Change this to match the site's telephone number

  // Email Column 2
  $str_content_home_contact_section_col_2_font_awesome_icon  = "fa-envelope-o";                    // default= "fa-envelope-o";
  $str_content_home_contact_section_col_2_url                = "mailto://johndoe@dvcables-harness.com"; // Change this to match the site's email address
  $str_content_home_contact_section_col_2_url_text           = "johndoe@dvcables-harness.com";          // Change this to match the site's email address


/*********************************
 *
 * CONTENT - PAGES (Portfolio)
 *
 *********************************/
 
 /**
 *	Pages - Header Content (banner)
 */
$str_content_page_header_btn_text          = "Learn More";



/**
 *	Pages - Article Content
 */


// Page A
$str_content_page_a_article_paragraph_text = '<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';


// Page B
$str_content_page_b_article_paragraph_text = '<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';


// Page C
$str_content_page_c_article_paragraph_text = '<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';


// Page D
$str_content_page_d_article_paragraph_text = '<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';


// Page E
$str_content_page_e_article_paragraph_text = '<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';


// Page F
$str_content_page_f_article_paragraph_text = '<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';

<?php
require_once './inc/default.php';

$str_page_id               = $str_page_id_home;
$str_page_title            = $str_page_title_home;
$str_page_meta_description = $str_page_meta_description_home;

require_once './inc/header.php';
?>

  <header role="banner">
    <div class="header-content">
      <div class="header-content-inner">
        <h1 class="site-title"><a href="./" class="no-transition" rel="home"><?php echo $str_site_title; ?></a></h1>
        <hr>
        <p class="site-description"><?php echo $str_site_description; ?></p>
        <a href="#about" class="btn btn-primary btn-xl page-scroll" role="button"><?php echo $str_content_home_header_btn_text; ?></a>
      </div>
    </div>
  </header>

  <section class="bg-primary" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <h2 class="section-heading"><?php echo $str_content_home_about_section_heading_text; ?></h2>
          <hr class="light">
          <p class="text-faded"><?php echo $str_content_home_about_section_paragraph_text; ?></p>
          <a href="#services" class="page-scroll btn btn-default btn-xl" role="button"><?php echo $str_content_home_about_section_btn_text; ?></a>
        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading"><?php echo $str_content_home_services_section_heading_text; ?></h2>
          <hr class="primary">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box">
            <i class="fa fa-4x <?php echo $str_content_home_services_section_col_1_font_awesome_icon; ?> wow bounceIn text-primary"></i>
            <h3><?php echo $str_content_home_services_section_col_1_heading_text; ?></h3>
            <p class="text-muted"><?php echo $str_content_home_services_section_col_1_paragraph_text; ?></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box">
            <i class="fa fa-4x <?php echo $str_content_home_services_section_col_2_font_awesome_icon; ?> wow bounceIn text-primary" data-wow-delay=".1s"></i>
            <h3><?php echo $str_content_home_services_section_col_2_heading_text; ?></h3>
            <p class="text-muted"><?php echo $str_content_home_services_section_col_2_paragraph_text; ?></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box">
            <i class="fa fa-4x <?php echo $str_content_home_services_section_col_3_font_awesome_icon; ?> wow bounceIn text-primary" data-wow-delay=".2s"></i>
            <h3><?php echo $str_content_home_services_section_col_3_heading_text; ?></h3>
            <p class="text-muted"><?php echo $str_content_home_services_section_col_3_paragraph_text; ?></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box">
            <i class="fa fa-4x <?php echo $str_content_home_services_section_col_4_font_awesome_icon; ?> wow bounceIn text-primary" data-wow-delay=".3s"></i>
            <h3><?php echo $str_content_home_services_section_col_4_heading_text; ?></h3>
            <p class="text-muted"><?php echo $str_content_home_services_section_col_4_paragraph_text; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <aside class="bg-dark" id="portfolio">
    <div class="container text-center">
      <h2><?php echo $str_content_home_pages_aside_heading_text; ?></h2>
      <hr class="light">
      <p class="text-muted"><?php echo $str_content_home_pages_aside_paragraph_text; ?></p>
    </div>
  </aside>
	
  <section class="no-padding">
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="col-lg-4 col-sm-6">
          <a href="<?php echo $str_page_a_file_path; ?>" class="project-box">
            <img src="<?php echo $str_page_a_img_file_name; ?>" class="img-responsive" alt="<?php echo $str_page_a_img_alt_attr; ?>">
            <div class="project-box-caption">
              <div class="project-box-caption-content">
                <div class="project-name">
                  <?php echo $str_page_a_name; ?>
                
                </div>
                <div class="project-category text-faded">
                  <ul class="list-inline">
                    <?php echo "<li>" . implode( " &middot; </li>\r\n                    <li>", $arr_page_a_service_type ) . "</li>\r\n"; ?>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="<?php echo $str_page_b_file_path; ?>" class="project-box">
            <img src="<?php echo $str_page_b_img_file_name; ?>" class="img-responsive" alt="<?php echo $str_page_b_img_alt_attr; ?>">
            <div class="project-box-caption">
              <div class="project-box-caption-content">
                <div class="project-name">
                  <?php echo $str_page_b_name; ?>
                
                </div>
                <div class="project-category text-faded">
                  <ul class="list-inline">
                    <?php echo "<li>" . implode( " &middot; </li>\r\n                    <li>", $arr_page_b_service_type ) . "</li>\r\n"; ?>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="<?php echo $str_page_c_file_path; ?>" class="project-box">
            <img src="<?php echo $str_page_c_img_file_name; ?>" class="img-responsive" alt="<?php echo $str_page_c_img_alt_attr; ?>">
            <div class="project-box-caption">
              <div class="project-box-caption-content">
                <div class="project-name">
                  <?php echo $str_page_c_name; ?>
                
                </div>
                <div class="project-category text-faded">
                  <ul class="list-inline">
                    <?php echo "<li>" . implode( " &middot; </li>\r\n                    <li>", $arr_page_c_service_type ) . "</li>\r\n"; ?>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="<?php echo $str_page_d_file_path; ?>" class="project-box">
            <img src="<?php echo $str_page_d_img_file_name; ?>" class="img-responsive" alt="<?php echo $str_page_d_img_alt_attr; ?>">
            <div class="project-box-caption">
              <div class="project-box-caption-content">
                <div class="project-name">
                  <?php echo $str_page_d_name; ?>
                
                </div>
                <div class="project-category text-faded">
                  <ul class="list-inline">
                    <?php echo "<li>" . implode( " &middot; </li>\r\n                    <li>", $arr_page_d_service_type ) . "</li>\r\n"; ?>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="<?php echo $str_page_e_file_path; ?>" class="project-box">
            <img src="<?php echo $str_page_e_img_file_name; ?>" class="img-responsive" alt="<?php echo $str_page_e_img_alt_attr; ?>">
            <div class="project-box-caption">
              <div class="project-box-caption-content">
                <div class="project-name">
                  <?php echo $str_page_e_name; ?>
                
                </div>
                <div class="project-category text-faded">
                  <ul class="list-inline">
                    <?php echo "<li>" . implode( " &middot; </li>\r\n                    <li>", $arr_page_e_service_type ) . "</li>\r\n"; ?>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a href="<?php echo $str_page_f_file_path; ?>" class="project-box">
            <img src="<?php echo $str_page_f_img_file_name; ?>" class="img-responsive" alt="<?php echo $str_page_f_img_alt_attr; ?>">
            <div class="project-box-caption">
              <div class="project-box-caption-content">
                <div class="project-name">
                  <?php echo $str_page_f_name; ?>
                
                </div>
                <div class="project-category text-faded">
                  <ul class="list-inline">
                    <?php echo "<li>" . implode( " &middot; </li>\r\n                    <li>", $arr_page_f_service_type ) . "</li>\r\n"; ?>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <h2 class="section-heading"><?php echo $str_content_home_contact_section_heading_text; ?></h2>
          <hr class="primary">
          <p><?php echo $str_content_home_contact_section_paragraph_text; ?></p>
        </div>
        <div class="col-lg-4 col-lg-offset-2 text-center">
          <i class="fa <?php echo $str_content_home_contact_section_col_1_font_awesome_icon; ?> fa-3x wow bounceIn"></i>
          <p><a href="<?php echo htmlspecialchars( $str_content_home_contact_section_col_1_url, ENT_COMPAT, 'utf-8' ); ?>" class="phone-url" data-role="button" rel="external"><?php echo htmlspecialchars( $str_content_home_contact_section_col_1_url_text, ENT_NOQUOTES, 'utf-8' ); ?></a></p>
        </div>
        <div class="col-lg-4 text-center">
          <i class="fa <?php echo $str_content_home_contact_section_col_2_font_awesome_icon; ?> fa-3x wow bounceIn" data-wow-delay=".1s"></i>
          <p><a href="<?php echo htmlspecialchars( $str_content_home_contact_section_col_2_url, ENT_COMPAT, 'utf-8' ); ?>" data-role="button" rel="external"><?php echo htmlspecialchars( $str_content_home_contact_section_col_2_url_text, ENT_NOQUOTES, 'utf-8' ); ?></a></p>
        </div>
      </div>
    </div>
  </section>
<?php

require_once './inc/footer.php';

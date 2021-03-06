<?php
require_once '../../inc/default.php';

$str_page_id               = $str_page_id_page_b;
$str_page_title            = $str_page_title_page_b;
$str_page_meta_description = $str_page_meta_description_page_b;

require_once '../../inc/header.php';
?>

  <header class="page-b" role="banner">
    <div class="header-content">
      <div class="header-content-inner">
        <p class="h1 site-title"><a href="./" class="no-transition" rel="home"><?php echo $str_site_title; ?></a></p>
        <hr>
        <a href="#page-b" class="btn btn-primary btn-xl page-scroll" role="button"><?php echo $str_content_page_header_btn_text; ?></a>
      </div>
    </div>
  </header>

  <article id="page-b">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <h1><?php echo $str_page_b_name; ?></h1>
            <ul class="list-inline text-muted">
              <?php echo "<li><h2>" . implode( " &middot; </h2></li>\r\n              <li><h2>", $arr_page_b_service_type ) . "</h2></li>\r\n"; ?>
            </ul>
          <hr class="primary">
          <?php echo $str_content_page_b_article_paragraph_text . "\r\n"; ?>
        </div>
      </div>
    </div>
		
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <nav>
            <ul class="pager">
              <li class="previous"><a href="<?php echo $str_page_a_file_path; ?>"><span aria-hidden="true">&larr;</span> <?php echo $str_page_a_name; ?></a></li>
              <li class="next"><a href="<?php echo $str_page_c_file_path; ?>"><?php echo $str_page_c_name; ?> <span aria-hidden="true">&rarr;</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </article>
<?php

require_once '../../inc/footer.php';

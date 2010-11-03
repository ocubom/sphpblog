<?php
require_once('../../scripts/sb_functions.php');

read_config();

    $content_width = $theme_vars[ 'content_width' ];
    $menu_width = $theme_vars[ 'menu_width' ];
    $page_width = $content_width + $menu_width;

    // Default image path.
    $img_path = "images/";

    $header_graphic = $blog_config->getTag('BLOG_HEADER_GRAPHIC');
    if ( $header_graphic == '' ) {
      $header_graphic = $img_path . 'header750x100.jpg';
    }

    // Begin Page Layout HTML

    $oppo = 'left';
    if ($theme_vars[ 'menu_align' ] == 'left') {
        $oppo = 'right';
    }

header("Content-Type: text/css");
?>

  body {
    background-color: #<?php echo(get_user_color('bg_color')); ?>;
    color: #<?php echo(get_user_color('txt_color')); ?>;
  }

  hr  
  {
    color: #<?php echo(get_user_color('inner_border_color')); ?>;
    background-color: #<?php echo(get_user_color('inner_border_color')); ?>;
  }

  img {
    border-style: none;
  }

  #page {
    background-color: #<?php echo(get_user_color('main_bg_color')); ?>;
    max-width: <?php echo( $page_width ); ?>px;
    margin-left:auto;
    margin-right:auto;
    border: 1px solid #<?php echo(get_user_color('border_color')); ?>;
  }

  #header {
    background-repeat: no-repeat;
    background-image: url('<?php echo( $header_graphic ); ?>');
    min-height: 75px;
    border-color: #<?php echo(get_user_color('border_color')); ?>;
    color: #<?php echo(get_user_color('header_txt_color')); ?>;
    background-color: #<?php echo(get_user_color('header_bg_color')); ?>;
  }

  #footer {
    clear: both;
    background-color: #<?php echo(get_user_color('footer_bg_color')); ?>;
    color: #<?php echo(get_user_color('footer_txt_color')); ?>;
    background: #<?php echo(get_user_color('footer_bg_color')); ?>;
    border-top: 1px solid #<?php echo(get_user_color('border_color')); ?>;
  }

  h1, h2, h3, h4, h5, h6 {
    color: #<?php echo(get_user_color('headline_txt_color')); ?>;
  }

  #maincontent .blog_subject {
    color: #<?php echo(get_user_color('headline_txt_color')); ?>;
  }

  #maincontent .blog_date {
    color: #<?php echo(get_user_color('date_txt_color')); ?>;
  }

  #maincontent .blog_categories {
    color: #<?php echo(get_user_color('date_txt_color')); ?>;
  }

  #maincontent .blog_body_solid  {
    color: #<?php echo(get_user_color('txt_color')); ?>;
    background-color: #<?php echo(get_user_color('bg_color')); ?>;
    border-color: #<?php echo(get_user_color('txt_color')); ?>;
  }
  
  #maincontent {
    margin-<?php echo $theme_vars[ 'menu_align' ] ?>: <?php echo( $menu_width ); ?>px;
    background-color: #<?php echo(get_user_color('main_bg_color')); ?>
  }

  #sidebar {
    width: <?php echo $theme_vars[ 'menu_width' ] ?>px;
    float: <?php echo $theme_vars[ 'menu_align' ] ?>;
    background-color: #<?php echo(get_user_color('menu_bg_color')); ?>;
    border-<?php echo $oppo; ?>: 1px solid #<?php echo(get_user_color('inner_border_color')); ?>;
    border-bottom: 1px solid #<?php echo(get_user_color('inner_border_color')); ?>;
  }

  #sidebar .menu_body {
    border-color: #<?php echo(get_user_color('inner_border_color')); ?>;
  }

  a:link, a:visited {
    color: #<?php echo(get_user_color('link_reg_color')); ?>;
  }

  a:hover {
    color: #<?php echo(get_user_color('link_hi_color')); ?>;
  }

  a:active {
    color: #<?php echo(get_user_color('link_down_color')); ?>;
  }
  
  pre {
    width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;
    border-color: #<?php echo(get_user_color('inner_border_color')); ?>;
  }

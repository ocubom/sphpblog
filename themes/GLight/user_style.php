<style type="text/css">
  body {
    color: #<?php echo( $user_colors[ 'txt_color' ] ); ?>;
  }

  hr
  {
    color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
  }

  #header_image {
    border-color: #<?php echo( $user_colors[ 'border_color' ] ); ?>;
  }

  #header {
    border-color: #<?php echo( $user_colors[ 'border_color' ] ); ?>;
    color: #<?php echo( $user_colors[ 'headline_txt_color' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'header_bg_color' ] ); ?>;
  }

  #footer {
    color: #<?php echo( $user_colors[ 'footer_txt_color' ] ); ?>;
    background: #<?php echo( $user_colors[ 'footer_bg_color' ] ); ?>;
    border-top: 1px solid #<?php echo( $user_colors[ 'border_color' ] ); ?>;
  }

  h1, h2, h3, h4, h5, h6 {
    color: #<?php echo( $user_colors[ 'headline_txt_color' ] ); ?>;
  }

  #maincontent .blog_subject {
    color: #<?php echo( $user_colors[ 'entry_title_text' ] ); ?>;
    border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
  }

  #maincontent .blog_date {
    color: #<?php echo( $user_colors[ 'date_txt_color' ] ); ?>;
  }

  #maincontent .blog_categories {
    color: #<?php echo( $user_colors[ 'date_txt_color' ] ); ?>;
  }

  #maincontent .blog_body {
    border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'entry_text' ] ); ?>;
  }

  #maincontent .blog_body_solid  {
    border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'entry_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
  }

  #maincontent .entry_top {
    border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
  }

  #maincontent .entry_bottom {
    border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
  }

  #maincontent .blog_comment {
    background-color: #<?php echo( $user_colors[ 'entry_title_bg' ] ); ?>;
    border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
  }

  /* Comment differences */

  #maincontent .blog_subject_comment {
    color: #<?php echo( $user_colors[ 'menu_title_text' ] ); ?>;
    border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
  }

  #maincontent .entry_top_comment {
    border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
  }

  #maincontent .entry_bottom_comment {
    border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
  }

  #maincontent .blog_body_comment {
    border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'entry_text' ] ); ?>;
  }

  #maincontent .blog_comment_comment {
    background-color: #<?php echo( $user_colors[ 'menu_bg' ] ); ?>;
    border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
  }
  /* Side bar */

  #sidebar .menu_title {
    background-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'menu_title_text' ] ); ?>;
    border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
  }

  #sidebar .menu_body {
    border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'menu_bg' ] ); ?>;
  }

  a:link, a:visited {
    color: #<?php echo( $user_colors[ 'link_reg_color' ] ); ?>;
  }

  a:hover {
    color: #<?php echo( $user_colors[ 'link_hi_color' ] ); ?>;
  }

  a:active {
    color: #<?php echo( $user_colors[ 'link_down_color' ] ); ?>;
  }

  pre {
    width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;
    border-color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
  }
</style>

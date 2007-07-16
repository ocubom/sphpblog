<style type="text/css">
  /* OVERRIDE COLORS */

  /* GENERAL SETTINGS */
  body {
    background-color: #<?php echo( $user_colors[ 'bg_color' ] ); ?>;
    color: #<?php echo( $user_colors[ 'txt_color' ] ); ?>;
  }

  hr  
  {
    color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
  }
  
  /* TYPEOGRAPHY */
  
  a:link, a:visited { color: #<?php echo( $user_colors[ 'link_reg_color' ] ); ?>; }
  a:hover { color: #<?php echo( $user_colors[ 'link_hi_color' ] ); ?>; }
  a:active { color: #<?php echo( $user_colors[ 'link_down_color' ] ); ?>; }
  
  pre {
    width: <?php global $theme_vars; echo( $theme_vars[ 'max_image_width' ] ); ?>px;
    border-color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
  }
  
  /* HEADERS */
  
  h1, h2, h3, h4, h5, h6 {
    /* color: #<?php echo( $user_colors[ 'headline_txt_color' ] ); ?>; */
  }
  
  blockquote {
    color: #<?php echo( $user_colors[ 'txt_color' ] ); ?>;
    border-color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
  }
  
  /* LAYOUT / PLACEMENT */
  
  #page {
    background-color: #<?php echo( $user_colors[ 'main_bg_color' ] ); ?>;
    border-color: #<?php echo( $user_colors[ 'border_color' ] ); ?>;
  }
  
  #popup {
    background-color: #<?php echo( $user_colors[ 'main_bg_color' ] ); ?>;
    border-color: #<?php echo( $user_colors[ 'border_color' ] ); ?>;
  }
  
  #header {
    border-color: #<?php echo( $user_colors[ 'border_color' ] ); ?>;
  }
  
  #title {
    color: #<?php echo( $user_colors[ 'header_txt_color' ] ); ?>;
    border-color: #<?php echo( $user_colors[ 'border_color' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'header_bg_color' ] ); ?>;
  }
  
  #footer {
    color: #<?php echo( $user_colors[ 'footer_txt_color' ] ); ?>;
    border-color: #<?php echo( $user_colors[ 'border_color' ] ); ?>;
    background: #<?php echo( $user_colors[ 'footer_bg_color' ] ); ?>;
  }
  
  /* CONTENT */
  
  /* REGULAR ENTRY */
  #content .entry .blog_title
  {
    border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'entry_title_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'entry_title_bg' ] ); ?>;
  }
  
  #content .entry .blog_body
  {
    border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'entry_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'entry_bg' ] ); ?>;
  }

  #content .entry .blog_body_solid  {
    border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'entry_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
  }
  
  #content .entry .blog_comment
  {
    border-color: #<?php echo( $user_colors[ 'entry_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'entry_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'entry_bg' ] ); ?>;
  }
  
  #content .entry .blog_date,
  #content .static .blog_date,
  #content .comment .blog_date
  {
    color: #<?php echo( $user_colors[ 'date_txt_color' ] ); ?>;
  }
  
  /* STATIC ENTRY */
  #content .static .blog_title
  {
    border-color: #<?php echo( $user_colors[ 'static_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'static_title_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'static_title_bg' ] ); ?>;
  }
  
  #content .static .blog_body
  {
    border-color: #<?php echo( $user_colors[ 'static_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'static_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'static_bg' ] ); ?>;
  }
  
  #content .static .blog_comment
  {
    border-color: #<?php echo( $user_colors[ 'static_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'static_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'static_bg' ] ); ?>;
  }
  
  /* COMMENT ENTRY */
  #content .comment .blog_title
  {
    border-color: #<?php echo( $user_colors[ 'comment_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'comment_title_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'comment_title_bg' ] ); ?>;
  }
  
  #content .comment .blog_body
  {
    border-color: #<?php echo( $user_colors[ 'comment_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'comment_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'comment_bg' ] ); ?>;
  }
  
  #content .comment .blog_comment
  {
    border-color: #<?php echo( $user_colors[ 'comment_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'comment_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'comment_bg' ] ); ?>;
  }
  
  /* SIDEBAR */
  
  #sidebar {
    border-color: #<?php echo( $user_colors[ 'inner_border_color' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'menu_bg_color' ] ); ?>;
  }
  
  #sidebar .menu_body a:link { color: #<?php echo( $user_colors[ 'menu_link_reg_color' ] ); ?>; }
  #sidebar .menu_body a:visited { color: #<?php echo( $user_colors[ 'menu_link_reg_color' ] ); ?>; }
  #sidebar .menu_body a:hover { color: #<?php echo( $user_colors[ 'menu_link_hi_color' ] ); ?>; }
  #sidebar .menu_body a:active { color: #<?php echo( $user_colors[ 'menu_link_down_color' ] ); ?>; }
  
  #sidebar .menu_title {
    border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'menu_title_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'menu_title_bg' ] ); ?>;
  }
  
  #sidebar .menu_body {
    border-color: #<?php echo( $user_colors[ 'menu_border' ] ); ?>;
    color: #<?php echo( $user_colors[ 'menu_text' ] ); ?>;
    background-color: #<?php echo( $user_colors[ 'menu_bg' ] ); ?>;
  }
</style>

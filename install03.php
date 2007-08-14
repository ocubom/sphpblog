<?php
  // ---------------
  // INITIALIZE PAGE
  // ---------------
  require_once('scripts/sb_functions.php');
  global $logged_in;
  $logged_in = logged_in( true, false );
  
  read_config();
  
  // ---------------
  // POST PROCESSING
  // ---------------
  
  // Validate Language
  $temp_lang = '';
  if ( isset( $_POST['blog_language'] ) ) {
    $temp_lang = sb_stripslashes( $_POST['blog_language'] );
  } else if ( array_key_exists( 'blog_language', $_GET ) ) {  
    $temp_lang = sb_stripslashes( $_GET['blog_language'] );
  }
  if (validate_language($temp_lang) == false) {
    $temp_lang = 'english';
  }
  
  global $blog_config;
  $blog_config[ 'blog_language' ] = $temp_lang;
  
  require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
  sb_language( 'install03' );
  
  // ------------
  // PAGE CONTENT
  // ------------
  function page_content() {
    global $lang_string, $blog_config;
    
    // SUBJECT
    $entry_array = array();
    $entry_array[ 'subject' ] = $lang_string[ 'title' ];
    
    // PAGE CONTENT BEGIN
    ob_start();
    
    echo( $lang_string[ 'instructions' ] . '<p />' );
    
    echo( $lang_string[ 'supported' ]. '<br />');
    echo( $lang_string[ 'standard' ] . ( CRYPT_STD_DES == 1 ? '<b style="color: green;">' . $lang_string[ 'enabled' ] . '</b>' : '<b style="color: red;">' . $lang_string[ 'disabled' ] . '</b>' ) . '<br />');
    echo( $lang_string[ 'extended' ] . ( CRYPT_EXT_DES == 1 ? '<b style="color: green;">' . $lang_string[ 'enabled' ] . '</b>' : '<b style="color: red;">' . $lang_string[ 'disabled' ] . '</b>' ) . '<br />');
    echo( $lang_string[ 'MD5' ] . ( CRYPT_MD5 == 1 ?'<b style="color: green;">' . $lang_string[ 'enabled' ] . '</b>' : '<b style="color: red;">' . $lang_string[ 'disabled' ] . '</b>' ) . '<br />');
    echo( $lang_string[ 'blowfish' ] . ( CRYPT_BLOWFISH == 1 ? '<b style="color: green;">' . $lang_string[ 'enabled' ] . '</b>' : '<b style="color: red;">' . $lang_string[ 'disabled' ] . '</b>' ) . '<br />');
    echo('<br />');
  
    $hashtest = crypt('test');
    if ( strlen( $hashtest ) <= 13 ) {
      echo( $lang_string[ 'using_standard' ] );
    } else if ( strlen( $hashtest ) <= 20 ) {
      echo( $lang_string[ 'using_extended' ] );
    } else if ( substr( $hashtest, 0, 3 ) == '$1$' ) {
      echo( $lang_string[ 'using_MD5' ] );
    } else if ( substr( $hashtest, 0, 3 ) == '$2$' || substr( $hashtest, 0, 4 ) == '$2a$' ) {
      echo( $lang_string[ 'using_blowfish' ] );
    } else {
      echo( $lang_string[ 'using_unknown' ] );
    }
    echo( str_replace( '%string', CRYPT_SALT_LENGTH, $lang_string[ 'salt_length' ] ) );
    ?>
    
    <hr />
    
    <form action="install04.php?blog_language=<?php echo( $blog_config[ 'blog_language' ] ); ?>" method="post" onsubmit="return validate(this)">
      <label for="user"><?php echo( $lang_string['username'] ); ?></label><br />
      <input type="text" name="user" autocomplete="OFF" size="40"><br /><br />
      
      <label for="pass"><?php echo( $lang_string['password'] ); ?></label><br />
      <input type="password" name="pass" autocomplete="OFF" size="40"><br /><br />
      
      <input type="submit" name="submit" value="<?php echo( $lang_string['submit_btn'] ); ?>" />
    </form>
    
    <?php 
    // PAGE CONTENT END
    $entry_array[ 'entry' ] = ob_get_clean();
    
    // THEME ENTRY
    echo( theme_staticentry( $entry_array ) );
  }
  
  // ----
  // HTML
  // ----
?>
  <?php echo( get_init_code() ); ?>
  <?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
  
  <script type="text/javascript">
  <!--
  function validate(theform) {
    if (theform.user.value=="" || theform.pass.value=="") {
      alert("<?php echo( $lang_string[ 'form_error' ] ); ?>");
      return false;
    } else {
      return true;
    }
  }
  //-->
  </script>
  <title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
  <?php 
    // ------------
    // BEGIN OUTPUT
    // ------------
    theme_pagelayout();
  ?>
</html>

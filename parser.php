<?php

        // ---------------
        // INITIALIZE PAGE
        // ---------------
        require_once('scripts/sb_functions.php');
        global $logged_in;
        $logged_in = logged_in( true, true );

        read_config();

        require_once(ROOT_DIR . 'languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
        sb_language( 'add' );

        // ----
        // HTML
        // ----

        $page_template = new Template(TEMPLATE_DIR.'layouts/index.tpl');

        // Meta Data
        get_init_code($page_template);

        // Page Title
        $page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE'));

        $text = blog_to_html($_REQUEST['data'], false, false, false, true );
        $text = '<body><div id="maincontent">' . $text . '</div></body>';
        $page_template->setTag('{BODY}', $text);

        // Final Output
        $output = $page_template->getHTML();
        echo($output);

?>

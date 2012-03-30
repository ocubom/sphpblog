<?php
        // ----
        // HTML
        // ----

/* OLD
        $page_template = new Template(TEMPLATE_DIR.'layouts/index.tpl');

        // Meta Data
        get_init_code($page_template);

        // Page Title
        if (!isset($_GET['entry'])) {
                $page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE'));
        } else {
                $str = $blog_config->getTag('BLOG_TITLE').' - '.get_entry_title(substr($_GET['entry'], 5, 2), substr($_GET['entry'], 7, 2), $_GET['entry']);
                $page_template->setTag('{PAGE_TITLE}', $str);
        }

        // Category RSS
        $cat = '';
        if (isset($_GET['category'])) {
                $cat = '?c=' . $_GET['category'];
        }
        $page_template->setTag('{CATEGORY_ID}', $cat);

	$page_template->appendTag('{JAVASCRIPT}', $javascript);

        // Theme Layout
        ob_start();
        theme_pagelayout();
        $page_template->setTag('{BODY}', ob_get_clean());

        // Final Output
        $output = $page_template->getHTML();
        echo($output);

NEW
*/

flush();

if (function_exists('page_content')) {
        if (function_exists('theme_pagelayout')) {
                theme_pagelayout();
        } else {
                page_content();
        }
}

?>

</html>

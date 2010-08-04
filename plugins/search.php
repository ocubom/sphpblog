<?php

// opensearch standard

require_once("../setup/setup.php");
require_once("../scripts/classes/container.php");
require_once("../scripts/classes/configuration.php");
require_once("../scripts/sb_utility.php");

$blog_config = new Configuration();

header('Content-type: application/opensearchdescription+xml');

$thispage = curPageURL();

$rootpage = dirname(dirname($thispage));

echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>";
?>

<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/"
                       xmlns:moz="http://www.mozilla.org/2006/browser/search/">
<ShortName><?php echo $blog_config->getTag('BLOG_TITLE') ?></ShortName>
<Description><?php echo $blog_config->getTag('INFO_DESCRIPTION') ?></Description>
<InputEncoding>UTF-8</InputEncoding>
<Image width="16" height="16" type="image/x-icon"><?php echo $rootpage ?>/interface/favicon.ico</Image>
<Url type="text/html" template="<?php echo $rootpage ?>/search.php?q={searchTerms}" />
<moz:SearchForm><?php echo $rootpage ?>/search.php</moz:SearchForm>
</OpenSearchDescription>


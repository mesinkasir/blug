<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<meta charset="UTF-8">
<meta name="google-site-verification" content="lO3pNP7czUCL3XA6pca2iX1eKo91FdnRZ5ikLWKxrrc" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo Theme::metaTagTitle(); ?>
<?php echo Theme::metaTagDescription(); ?>
<?php echo Theme::favicon('img/favicon.png'); ?>
<script src="https://cdn.tailwindcss.com"></script>
<?php echo Theme::css('css/blug.css'); ?>
<?php Theme::plugins('siteHead'); ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6422989243541464"
     crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
<?php Theme::plugins('siteBodyBegin'); ?>
<?php
if ($WHERE_AM_I == 'page') {
include(THEME_DIR_PHP.'page.php');
} else {
include(THEME_DIR_PHP.'home.php');
}
?>
<?php include(THEME_DIR_PHP.'footer.php'); ?>
<?php Theme::plugins('siteBodyEnd'); ?>
</div>
<?php echo Theme::jquery(); ?>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
        <script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
        <title><?php if ( is_home() ) {
		bloginfo('name');
	} elseif ( is_category() ) {
		single_cat_title();
	} elseif (is_single() || is_page() ) {
		single_post_title();
	} elseif (is_search() ) {
		echo "搜索结果";
	} elseif (is_404() ) {
		echo '页面未找到!';
	} else {
		wp_title('',true);
	} ?></title>
    </head>
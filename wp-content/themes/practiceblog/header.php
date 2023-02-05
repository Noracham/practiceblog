<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/common/favicon.ico')); ?>">

    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <?php $html_tag = (is_home() || is_front_page() ? 'h1' : 'div'); ?>
        <<?php echo $html_tag; ?> class="site-title wrapper">
            <a href="<?php echo esc_url(home_url()) ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('img/common/logo.svg')) ?>" alt="">
            </a>
        </<?php echo $html_tag; ?>>

        <nav id="navi">
            <ul class="wrapper">
                <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>">NEWS</a></li>
                <li><a href="<?php echo esc_url(home_url('/category/column/')); ?>">COLUMN</a></li>
                <li><a href="<?php echo esc_url(home_url('/category/hotel/')); ?>">hotel</a></li>
                <li><a href="<?php echo esc_url(home_url('/category/contact/')); ?>">CONTACT</a></li>
            </ul>
        </nav>
    </header>
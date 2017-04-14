<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSSフィード" href="<?php bloginfo('rss2_url'); ?>">
  <meta name="description" content="カラフルだけど落ち着きのあるデザインのHTML/CSSテンプレート。WordPressテーマのカスタマイズや他CMSへの利用時に使ってください。">
  <meta name="keywords" content="HTML テンプレート,CSS テンプレート,webサイト テンプレート, webデザイン テンプレート, ホームページ テンプレート">

<!-- External files -->
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
 
<!-- Favicon, Thumbnail image -->
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page">
    <div id="wrapper">

<!-- Header -->   
      <header class="area-header" id="header">
        <?php if(is_home()): // ホームが表示されている場合、ブログタイトルを H1 で表示 ?>
             <h1 class="prt-lv1H"><a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a></h1>
        <?php else: // ホーム以外のページが表示されている場合は H1 を削除。各記事やページのタイトルに H1 を使用 ?>
             <a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a>
        <?php endif; ?>
        <p><?php bloginfo('description'); ?></p>
        <!-- <p>カラフルな背景とモノクロのデザインを融合。お好みでカスタマイズしてみてください。</p> -->
        <div class="prt-nav">
        <?php wp_nav_menu( array('menu_id' => 'nav' )); ?>
        </div>
      </header><!-- /#header -->
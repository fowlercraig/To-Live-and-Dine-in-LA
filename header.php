<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<?php
  $menuParameters = array(
    'container'       => false,
    'echo'            => false,
    'items_wrap'      => '%3$s',
    'theme_location'  => 'main-menu',
    //'Walker_Nav_Menu' => new NavWalker(),
    'depth'           => 0,
  );
?>

<body <?php body_class('fs-grid'); ?>>
  <div class="wrapper">
  <header id="head">
    <div class="fs-row">
      <div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3"><h1 id="logo"><a href="/"><?php bloginfo( 'name' ) ?></a></h1></div>
      <nav class="fs-cell fs-lg-8 fs-md-6 fs-sm-3"><?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?></nav>
    </div>
  </header>


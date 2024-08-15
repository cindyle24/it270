<!DOCTYPE html>
<html <?php language_attributes() ;?> >
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php bloginfo('name');?></title>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">
<?php wp_head();  ?> 

</head>
<body <?php body_class(! is_front_page() ? "inner-page" : "" ); ?>>
<header>
<div id ="top">
    <?php get_search_form(); ?>
</div>
<!-- end top -->

<div id ="inner-header">
<a href="<?php echo get_home_url() ;?>">
<img src="<?php echo get_template_directory_uri();?>/images/logo.jpg" alt="logo" id="logo">
</a>

<!-- our main navigation!!!-->

<nav id="site-navigation" class="main-navigation">
<button class="nav-button">Toggle Navigation</button>
<?php
$args_primary = array(
'theme_location' => 'primary',
'items_wrap' => '<ul class="primary-nav">%3$s</ul>'
);?>

<?php wp_nav_menu($args_primary); ?>
</nav>
</div>
<!-- close inner-header -->


</header>

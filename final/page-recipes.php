<?php
get_header();
/* Template Name: Recipe Page */
?>
<div id="hero">
<img src="<?php echo get_template_directory_uri(); ?>/images/header-inner.webp" alt="inner">
</div>
<!-- end hero -->
<div id="wrapper">
<main>
<?php if(have_posts()) : ?>

<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail(); ?>
<?php endif ?>

<?php while(have_posts()) : the_post() ;  ?>
<?php the_content() ; ?>
<?php endwhile; ?>
<?php else : ?>
<h2>
<?php echo wpautop('Sorry, no posts were found!');  
?>
</h2>
<?php endif; ?>
</main>


<aside id="secondary" class="widget-area">
<?php dynamic_sidebar('sidebar-recipes'); ?>
<?php dynamic_sidebar('sidebar-specials'); ?>

</aside>

</div>
<!-- close wrapper -->
<?php dynamic_sidebar('sidebar-buy'); ?>

<?php
get_footer();
?>
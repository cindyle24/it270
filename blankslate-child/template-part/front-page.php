<?php get_header(); 
    /**
    * Template Name: Front Page
    */
?> 
<?php $layout = get_option( 'front_page_layout', 'default' ); get_template_part( 'front-page', $layout );?>

<div id="wrapper" class="hfeed">
<div id="container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="header">
</header>

<div class="entry-content" itemprop="mainContentOfPage">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</div>
<!--end wrapper -->
<?php get_footer();
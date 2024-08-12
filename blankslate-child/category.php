<?php get_header(); ?>
<div id="wrapper" class="hfeed">
<main id="content" role="main">
<header class="header">
<div class="archive-meta" itemprop="description"><?php if ( '' != get_the_archive_description() ) { echo esc_html( get_the_archive_description() ); } ?></div>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>

</main>

<?php get_sidebar(); ?>

</div> 
<!-- End "wrapper". -->
<?php get_footer(); ?>
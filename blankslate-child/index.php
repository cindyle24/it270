<?php
get_header();
?>
<div id="wrapper" class="hfeed">
<div id="container">
<main id="content" role="main">

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'entry' );
comments_template();
endwhile; endif;
get_template_part( 'nav', 'below' );
?>

</main>
<?php get_sidebar(); ?>
</div>
<!-- End "wrapper". -->

<?php
get_footer();
?>
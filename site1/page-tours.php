<?php
get_header();
/* Template Name: Tours Page */
?>
<div id="hero">
<img src="<?php echo get_template_directory_uri(); ?>/images/yellowstone-inner.jpg" alt="Yellowstone">
</div>
<!-- end hero -->
<!--the index.php page is assigned to the blog page!!! blog container for all of our posts -->
<div id="wrapper">
<main>
<?php if(have_posts()) : ?>
<!-- We need to show the posts by using a while loop in the world of PHP  -->
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

<aside>

</aside>

</div>
<!-- close wrapper -->
<?php
get_footer();
?>
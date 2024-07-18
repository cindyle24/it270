<?php
get_header();
?>
<!--the index.php page is assigned to the blog page!!! blog container for all of our posts -->
<div id="hero">
<img src="<?php echo get_template_directory_uri(); ?>/images/yellowstone-inner.jpg" alt="Yellowstone">
</div>


<div id="wrapper">
<main>
<?php if(have_posts()) : ?>
<!-- We need to show the posts by using a while loop in the world of PHP  -->
<?php while(have_posts()) : the_post() ;  ?>
<article class="post">
<h2 class="title">

<?php the_title() ; ?>

</h2>
<div class="meta">
<span><b>Posted By:</b> <?php the_author();?></span>
<span><b>Posted On:</b> <?php the_time('F j, Y g:i a')  ;?></span>
</div>
<!-- close meta -->
<?php the_content() ; ?>



</article>
<?php endwhile; ?>
<?php else : ?>
<h2>
<?php echo wpautop('Sorry, no posts were found!');  
?>
</h2>
<?php endif; ?>
<?php comments_template();?>
</main>


</div>
<!-- close wrapper -->
<?php
get_footer();
?>
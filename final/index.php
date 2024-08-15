<?php
get_header();
?>
<!--the index.php page is assigned to the blog page and blog container for all of our posts -->

<div id="hero">
<img src="<?php echo get_template_directory_uri(); ?>/images/header-inner.webp" alt="inner">
</div>

<div id="wrapper">
<main>
<?php if(have_posts()) : ?>
<!-- Show the posts by using a while loop in the world of PHP  -->
<?php while(have_posts()) : the_post() ;  ?>
<article class="post">
<h2 class="title">
<a href="<?php the_permalink() ;?>">
<?php the_title() ; ?>
</a>
</h2>
<div class="meta">
<span><b>Posted By:</b> <?php the_author();?></span>
<span><b>Posted On:</b> <?php the_time('F j, Y g:i a')  ;?></span>
</div>
<!-- close meta -->

<div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
<a href="<?php the_permalink() ;?>">
<?php the_post_thumbnail(); ?>
</a>
<?php endif ?>
</div>
<!-- end thumbnail -->

<?php the_excerpt() ; ?>
<span class="block">
<a href="<?php the_permalink() ;?>"> Read More <?php the_title(); ?>  </a>
</span>



</article>
<?php endwhile; ?>
<?php else : ?>
<h2>
Search Results:
</h2>
<p>Sorry, we could not find anything regarding your search terms. Please search again using different keywords</p>
<?php get_search_form(); ?>
<?php endif; ?>
</main>

<?php get_sidebar(); ?>

</div>
<!-- close wrapper -->
<?php
get_footer();
?>
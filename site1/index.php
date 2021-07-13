<?php get_header(); ?>
<div id="wrapper">
<main>

<?php if(have_posts()):?>
<?php while(have_posts()): the_post() ;?>

<article class="post">



<h2> <a href="
<?php the_permalink() ; ?>"><?php the_title() ;?></a></h2>

<div class="meta">
<span>Posted by: <?php the_author(); ?> </span>
<span>Posted on: <?php the_time('F j, Y g:i a');?></span>

</div>
<!-- End of Meta -->
<div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
<a href ="<?php the_permalink(); ?>">
<?php the_post_thumbnail(); ?>
<?php endif;?>
</div>
<!-- end the thumbnail -->

<?php the_excerpt();?>
<span class="block">

<a href="<?php the_permalink(); ?>">Read More</a>
</span>
</article>
<?php endwhile; ?>  

<?php else: ?>
    
<?php echo wp_autop('Sorry, no posts were found'); ?>
<?php endif; ?>
</main>
<aside>

</aside>

</div>
<!-- end wrapper -->

<?php get_footer(); ?>

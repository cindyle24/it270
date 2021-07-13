<?php get_header(); ?>
<div id="wrapper">
<main>

<?php if(have_posts()):?>
<?php while(have_posts()): the_post() ;?>

<article class="post">



<h2> <a href="
<?php the_permalink() ; ?>"><?php the_title() ;?></a></h2>

<div class="meta">
<span><b>Posted by:</b> <?php the_author(); ?> </span>
<span><b>Posted on:</b> <?php the_time('F j, Y g:i a');?></span>

</div>
</article>

<?php the_content();?>
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

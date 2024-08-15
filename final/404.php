<?php get_header(); ?>

<div id="wrapper">
<!-- add wrong page image -->
<main>
<h2> Oops?</h2>
<p>We can't seem to find what you're looking for! Please try again</p>
<?php get_search_form(); ?>
<h3>Or, please feel free to browse our pages</h3>
<?php wp_list_pages() ;?>
</main>

<aside>
    This is my 404 page!
</aside>

</div>
<!-- close wrapper -->
<?php
get_footer();
?>
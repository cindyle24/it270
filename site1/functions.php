<?php 

function my_excerpt_length($length){
    return 35;    
}

add_filter('excerpt_length' , 'my_excerpt_length', 999);

set_post_thumbnail_size(150, 150);
add_theme_support('post-thumbnails');


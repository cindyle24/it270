<?php
// my functions page!



function my_excerpt_length() {
    return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');

set_post_thumbnail_size(200, 200);
add_theme_support('post-thumbnails');

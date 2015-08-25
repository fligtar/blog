<?php
add_filter('the_content_more_link', 'fligtar_more');
add_theme_support( 'post-thumbnails' ); 

function fligtar_more($text) {
  return '<p class="more-link">'.$text.'</p>';
}

?>
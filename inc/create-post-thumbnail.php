<?php
function add_thumbnail (){
  add_image_size( 'post-thumbnail', $width = 450, $height = 300, $crop = true );
}
add_action( "after_setup_theme", "add_thumbnail");

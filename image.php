<?php 
/**
 * This file stops the attachment image pages from being accessed.  If the image
 * is attached to a post then it will redirect to the page that it is attached
 * to.
 * 
 */
if($post->post_parent == 0){
    wp_redirect('/', 301);
}
wp_redirect(get_permalink($post->post_parent)); 
?>
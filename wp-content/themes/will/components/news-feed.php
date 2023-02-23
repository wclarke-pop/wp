<?php
$latest_posts = new WP_Query(
    [
        'post_type'=>'post',
        'posts_per_page'=>3,
        'post_status'=>'publish'
    ]
);
?>

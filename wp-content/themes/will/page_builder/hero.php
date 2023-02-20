<?php

$header    = get_sub_field('header');
$intro     = get_sub_field('intro');
$img       = get_sub_field('image');
$colours   = get_sub_field('colours');
$cta       = get_sub_field('cta');
?>

<div class="" 
    style=""
>  
    <?php if($header): ?>
        <h1><?php echo esc_html($header); ?>
    <?php else: ?>
        <h1><?php the_title(); ?>
    <?php endif; ?>
</div>
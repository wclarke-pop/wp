<?php

$header    = get_sub_field('header');
$intro     = get_sub_field('intro');
$img       = get_sub_field('image');
$colours   = get_sub_field('colours');
$cta       = get_sub_field('cta');
?>

<div class="hero" 
    style=""
>  
    <div class="hero-content">
        <?php if($header): ?>
            <h1><?php echo esc_html($header); ?></h1>
        <?php else: ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>

        <?php if($intro): ?>
            <span><?php echo esc_html($intro); ?></span>
        <?php endif; ?>

        <?php if($cta['link'] && $cta['text']): ?>
            <a class=""
            style=""
            href="<?php echo esc_url($cta['link']);?>">
                <?php echo esc_html($cta['text']);?>
            </a>
        <?php endif; ?>
    </div>
</div>
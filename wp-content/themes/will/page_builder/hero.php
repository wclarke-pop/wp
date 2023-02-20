<?php

$header    = get_sub_field('header');
$intro     = get_sub_field('intro');
$img       = get_sub_field('image');
$colours   = get_sub_field('colours');
$cta       = get_sub_field('cta');

var_dump($cta);
?>
<div class="hero" 
    style="
    <?php if($colours['background_colour']): ?>
        background:<?php echo $colours['background_colour'];?>;
    <?php else: ?>
        background: #c14f51;
    <?php endif; ?>
    "
>  
    <div class="hero-content">
        <?php if($header): ?>
            <h1 class=""
            style="
            <?php if ($colours['header_colour']): ?>
                color:<?php echo $colours['header_colour'];?>
            <?php endif;?>
            ">
                <?php echo esc_html($header); ?>
            </h1>
        <?php else: ?>
            <h1 class=""
            style="
            <?php if ($colours['header_colour']): ?>
                color:<?php echo $colours['header_colour'];?>
            <?php endif;?>
            ">
                <?php the_title(); ?>
            </h1>
        <?php endif; ?>

        <?php if($intro): ?>
            <span class=""
            style="
            <?php if ($colours['intro_colour']): ?>
                color:<?php echo $colours['intro_colour'];?>
            <?php endif; ?>
            ">
                <?php echo esc_html($intro); ?>
            </span>
        <?php endif; ?>

        <?php if($cta['link'] && $cta['text']): ?>
            <a class="cta"
            style="
            <?php if($colours['cta_colour']): ?>
                background:<?php echo $colours['cta_colour'];?>;
            <?php endif; ?>

            <?php if($colours['cta_text_colour']): ?>
                color:<?php echo $colours['cta_text_colour'];?>;
            <?php endif; ?>
            "
            href="<?php echo esc_url($cta['link']);?>">
                <?php echo esc_html($cta['text']);?>
            </a>
        <?php endif; ?>
    </div>
    <?php if ($img): ?>
        <div class="hero-image">
            <img src="<?php echo esc_url($img); ?>">
        </div>
    <?php endif; ?>
</div>
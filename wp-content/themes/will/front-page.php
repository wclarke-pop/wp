<?php
/**
 * Homepage
 * 
 */

$hero            = get_field('hero');
$banner          = get_field('banner');
$features_block  = get_field('features_block');
$features        = $features_block['features'];
$newsletter      = get_field('newsletter_block');

get_header();
?>
<div class="hero">

</div>

<?php if ($banner && $banner['text']): ?>
    <div class="banner" style="
    <?php if ($banner['background_colour']): ?>
        background:<?= $banner['background_colour']; ?> !important;
    <?php endif; ?>
    background:#3a3635;
    margin:-8px;
    color:#f5f5f5;
    padding:3% 20%;
    text-align:center;
    ">
        <h3 style="font-size:1.6rem"><?php echo $banner['text'];?>
    </div>
<?php endif; ?>

<div class=""></div>
<div class=""></div>
<?php
get_footer();
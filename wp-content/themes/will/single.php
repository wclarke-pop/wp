<?php
/**
 * Blog post
 * 
 */
$body = get_field('body');
$hero = get_field('hero');

get_header();
?>
<style>
    html {
        font-family:sans-serif;
    }
    .post-hero {
       margin: 0 -8px 2% -8px;
       padding:8% 25%;
       line-height:2.5em;
    }

    .post-body{
        margin:auto 25%;
        line-height:1.2rem;
    }
    .post-body ul li {
        margin:1.2rem 0;
    }
</style>
<div class="post-container">
    <div class="post-hero" 
        style="
        <?php if($hero['bg_image']):?> background: url(<?= esc_url($hero['bg_image']);?>);
        <?php else: ?> background: <?= $hero['background_colour'];?>;
        <?php endif;?>

        color: <?= $hero['heading_colour']; ?>;
        "
    >
        <h1><?php the_title(); ?></h1>
        <?php if ($hero['intro']): ?>
            <span><?php echo esc_html($hero['intro']); ?></span>
        <?php endif; ?>
    </div>
    <div class="post-body">
        <?php if($body){
            echo wp_kses_post($body);
        }?>
    </div>
</div>
<?php get_footer();?>
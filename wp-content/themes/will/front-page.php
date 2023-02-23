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
<div class="mx-auto bg-red-500 flex flex-col py-40">
    <div class="
    <?php if (!$hero['image']): ?> text-center <?php endif; ?>
    ">
        <?php if ($hero['header']): ?>
            <h1 class="font-semibold text-4xl text-white"><?= esc_html($hero['header']); ?></h1>
        <?php else: ?>
            <h1 class="font-semibold text-4xl text-white"><?php the_title(); ?></h1>
        <?php endif; ?>

        <?php if ($hero['cta'] && $hero['cta']['link'] && $hero['cta']['text']): ?>
            <a href="<?= esc_url($hero['cta']['link']); ?>">
                <?= esc_html($hero['cta']['text']); ?>
            </a>
        <?php endif; ?>
    </div>
    <?php if ($hero['image']): ?>
        <div class=""></div>
    <?php endif; ?>
</div>

<?php if ($features): ?>
    <div class="py-14">
        <?php if ($features_block['title']): ?>
            <h2 class="text-center text-3xl mb-5"><?= esc_html($features_block['title']); ?></h2>
        <?php endif; ?>
        <div class="pb-5">
            <?php foreach ($features as $feature): ?>
                <?php if ($feature['icon'] && $feature['name']): ?>
                    <div class="flex flex-col">
                        <i class="font-semibold text-2xl fa-solid fa-regular <?= esc_html($feature['icon']); ?>"></i>
                        <p class="font-semibold text-lg">
                            <?= esc_html($feature['name']); ?>
                        </p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($banner && $banner['text']): ?>
    <div class="bg-[#3a3635] px-[20%] text-center text-white py-10" 
    style="
        <?php if ($banner['background_colour']): ?>
            background:<?= $banner['background_colour']; ?> !important;
        <?php endif; ?>
    ">
        <h3 class="text-2xl font-semibold tracking-wide capitalize"><?php echo $banner['text'];?>
    </div>
<?php endif; ?>

<div class=""></div>
<div class=""></div>
<?php
get_footer();
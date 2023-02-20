<?php

$features  = get_sub_field('features_block');
$bg        = get_sub_field('background_colour');
var_dump($features);
?>

<?php if ($features): ?>
    <div class="feature-container"
    style="
    <?php if ($bg): ?>
        background:<?php echo esc_html($bg); ?>;
    <?php endif; ?>
    ">
        <?php foreach ($features as $feature): ?>
            <?php if ($feature['fa_icon'] && $feature['heading'] && $feature['icon_background_colour']): ?>
                <div class="feature">

                    <i class="fa-solid <?php echo esc_html($feature['fa_icon']); ?>"
                    style="
                    background:<?php echo esc_html($feature['icon_background_colour']); ?>;

                    <?php if ($feature['icon_colour']): ?>
                        color:<?php echo esc_html($feature['icon_colour']); ?>;
                    <?php else: ?>
                        color: #fff;
                    <?php endif; ?>
                    "></i>

                    <h3><?php echo esc_html($feature['heading']); ?></h3>

                    <?php if ($feature['text']): ?>
                        <span><?php echo esc_html($feature['text']); ?></span>
                    <?php endif; ?>

                </div>
            <?php endif;?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
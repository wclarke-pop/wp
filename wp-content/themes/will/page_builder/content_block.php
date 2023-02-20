<?php

$block = get_sub_field('block');
?>

<style></style>
<?php if ($block): ?>
    <div>
        <?php echo wp_kses_post($block); ?>
    </div>
<?php endif; ?>
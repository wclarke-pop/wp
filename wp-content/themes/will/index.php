<?php
// index file

get_header();
?>
<div class="">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
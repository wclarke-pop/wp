<?php
/**
 *  Template Name: Page Builder
 */

get_header();

if ( have_rows( 'page_builder' ) ) {
    while ( have_rows( 'page_builder' ) ) {
        the_row();

        $template_path = sprintf( 'page_builder/%s.php', get_row_layout() );

        if ( file_exists( __DIR__ . '/' . $template_path ) ) {
            include $template_path;
        }
    }
}

get_footer();

?>
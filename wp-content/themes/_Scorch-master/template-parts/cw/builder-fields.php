<?php
/**
 * Flexible template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _scorch
 */
//Layout name   => stub-{type}.php
$contentOptions = array(
    'left_header'         => 'left_header',
    'right_header'        => 'right_header',
    'content_block'       => 'content_block',
    'sub_page_header'     => 'sub_page_header',
);
// check if the flexible content field has rows of data
if( have_rows('cw_builder') ):
    // loop through the rows of data
    while ( have_rows('cw_builder') ) : the_row();
        // Identify the selected layout
        $rowLayout = get_row_layout();
        // If a layout is selected
        if ($rowLayout) :
            foreach ($contentOptions as $key => $value) :
                if ($rowLayout == $key):
                    get_template_part('template-parts/cw/content', $value);
                    break;
                endif;
            endforeach;
        else :
            // No layout selected
        endif;
    endwhile;
    the_content();
else :
    // no layouts found
endif;
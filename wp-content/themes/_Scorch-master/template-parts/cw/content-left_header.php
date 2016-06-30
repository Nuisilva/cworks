<?php

$header         = get_sub_field ('header');
$sub_header     = get_sub_field ('sub_header');
$content        = get_sub_field ('content');
$link           = get_sub_field ('cta_link');
$bg             = get_sub_field ('background_image');
$link           = get_sub_field ('button_text');


?>

<div class="full-heading" style=" background-image: url('<?=$bg['url']?>');">
    <div class="intro-<?php the_sub_field('alignment');?>">
        <header>
            <h1><?=$header?></h1>
            <h4><?=$sub_header?></h4>
        </header>
        <div>
            <?=$content?>
            <?php
                if( have_rows('bullet_points') ):
            // loop through the rows of data

            ?>
            <ul class="bullets"><h3><?=$title?></h3>
                <?php
                while ( have_rows('bullet_points') ) : the_row();
                    $title = get_sub_field('bullet_title');
                    $bullet_content = get_sub_field('bullet_content');
                ?>
                <li><?=$bullet_content?></li>
                    <?php
                endwhile;
                ?>
                <?php
                endif;
                ?>
            </ul>
        </div>
        <a href="<?php the_sub_field('cta_link'); ?>"><?=$link_text?></a>
    </div>
</div>


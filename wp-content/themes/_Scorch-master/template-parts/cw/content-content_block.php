<?php
/**
 * Created by PhpStorm.
 * User: nuisilva
 * Date: 6/29/16
 * Time: 4:53 PM
 */

$header         = get_sub_field ('content_header');
$content        = get_sub_field ('sub_content');
$link           = get_sub_field ('cta_link');
$form             = get_sub_field ('content_form');
$wizwig           = get_sub_field ('wiziwig_content');
?>

<?php

if ( get_sub_field('header')) { ?>

<h1><?=$header?></h1>

<?php } ?>



<?php

if ( get_sub_field('content')) { ?>

    <?=$content?>

<?php } ?>


<?php

if ( get_sub_field('form')) { ?>

    <?=$form?>

<?php } ?>


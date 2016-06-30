<?php

$heading = get_sub_field('header');
$sub = get_sub_field('sub_header');
$script = get_sub_field('header_script_font')
?>

<section class="sub-page-header">
   <div class="sub-header-holder">
       <h2> <?=$script?></h2>
   </div>
    <div class="sub-holder">
        <h3> <?=$sub?></h3>
        <h1> <?=$heading?> </h1>
    </div>
</section>


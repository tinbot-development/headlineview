<?php

$title          = get_field('title', 'option');

// Blocks
$block_one_title  = get_field('front_page_block_one_title', 'option');
$block_one_text   = get_field('front_page_block_one_text', 'option');
$block_one_img    = get_field('front_page_block_one', 'option');

$block_two_title  = get_field('front_page_block_two_title', 'option');
$block_two_text   = get_field('front_page_block_two_text', 'option');
$block_two_img    = get_field('front_page_block_two', 'option');


?>

<div class="row text-center fp-title">
  <h1><?php echo $title; ?></h1>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="fp-block-one text-center" style="background-image: url(<?php echo $block_one_img['url'] ; ?>)">

      <h2><?php echo $block_one_title; ?></h2>
      <p><?php echo $block_one_text; ?></p>

      <button type="button" class="btn btn-default">See our range</button>

    </div>
  </div>

  <div class="col-sm-6">
    <div class="fp-block-two text-center" style="background-image: url(<?php echo $block_two_img['url']; ?>)">

      <h2><?php echo $block_two_title; ?></h2>
      <p><?php echo $block_two_text; ?></p>

      <button type="button" class="btn btn-default">Learn More</button>

    </div>
  </div>
</div>



<div class="row reseller-block text-center">
  <h2><a href="/reseller"><i class="fa fa-exclamation-triangle"></i> Apply to become a Re-Seller</a></h2>
</div>

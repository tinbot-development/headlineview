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

<div class="row">
  <div class="col-sm-6 left">
    <div class="fp-block-one text-center">
      
      <a href="/products/"><button type="button" class="btn btn-default">See our range</button></a>
    </div>
  </div>

  <div class="col-sm-6 right">
    <div class="fp-block-two text-center">
      
      <a href="/customised-products/"><button type="button" class="btn btn-default">Custom Options</button></a>
    </div>
  </div>
</div>



<div class="row reseller-block text-center">
  <h2><a href="/reseller">Apply to become a Re-Seller</a></h2>
</div>

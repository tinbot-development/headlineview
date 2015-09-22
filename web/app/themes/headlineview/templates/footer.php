<footer class="content-info" role="contentinfo">
  <div class="row text-center bottomnav">
    <div class="col-sm-9">

      <?php
      if (has_nav_menu('footer_navigation')) :
        wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav',  'depth' => '1']);
      endif;
      ?>

    </diV>

    <div class="col-sm-3">
      <div class="platformb">
        <p><a href="http://www.platformb.com.au" target="_blank">Made with <i id="heart" class="fa fa-heart"></i> by PlatformB</a></p>
      </div>
    </div>
</footer>

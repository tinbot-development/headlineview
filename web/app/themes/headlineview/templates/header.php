<header class="banner" role="banner">
  <div class="container">

    <div class="account acc-mobile row visible-xs text-center">
         <?php
            if (has_nav_menu('secondary_navigation')) :
               wp_nav_menu(['theme_location' => 'secondary_navigation']);
            else:
          ?>

	<p>
          <span class="phone-number border-right">03 9746 6686</span>
          <a href="/my-account"><span class="border-right">My Account</span></a>
          <a href="/cart">
            <span class="fa-stack fa-lg">
              <i class="fa fa-shopping-cart cart-icon fa-stack-1x"></i>
            </span>
          </a>
        </p>
	<?php endif;?>
      </div>

  <div class="row">
    <div class="col-sm-6">
      <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
        <div class='brand text-center'>
          <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
            <img class="logo img-responsive" src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
          </a>
        </div>
      <?php else : ?>
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <?php endif; ?>
    </div>
    <div class="col-sm-6">

      <div class="account row hidden-xs">
        <p>
          <span class="phone-number border-right"><i class="fa fa-phone"></i> 03 9746 6686</span>
          <a href="/my-account"><span class="border-right"><i class="fa fa-user"></i> My Account</span></a>
          <a href="/checkout"><span class="delivery"><i class="fa fa-check"></i> Checkout</span></a>
          <a href="/cart">
            
          </a>
        </p>
      </div>

    <div class="row text-right hidden-xs">
      <div class="col-xs-11 nopadding">
        <form role="search" method="get" id="search-form" class="search-form form-inline" action="" style="display:none">
        <label class="sr-only">Search for:</label>
        <div class="input-group">
          <input type="search" value="" name="s" class="search-field form-control" placeholder="Search" required="">
          <span class="input-group-btn">
            <button type="submit" class="search-submit btn btn-default">Search</button>
          </span>
        </div>
      </form>
      </div>

      <div class="col-xs-1 nopadding">
        <p><i class="fa fa-search"></i></p>
      </div>

    </div>

    </div>
  </div>

    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation']);
      endif;
      ?>
    </nav>
  </div>
</header>

<?php

  //if not frontpage or the user is not logged in
  if(!is_user_logged_in() && !is_front_page()){ ?>

  <div class="top-block row text-center">
    <h2><a href="/my-account"><?php echo get_field('top_login_block_text', 'option'); ?></a></h2>
  </div>

<?php

  }

?>

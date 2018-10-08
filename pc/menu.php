    <nav id="site-navigation" class="main-navigation hide_u600" role="navigation">

      <span class="hide_o600 left"><a href="<?php echo esc_url( home_url( '/' ) );?>"><img class="header_logo" src="<?php get_stylesheet_directory_uri() ;?>/images/logo.gif"></a></span>

        <span class="sp_right">
          <button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
          <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </span><!-- .sp_right -->


    </nav><!-- #site-navigation -->
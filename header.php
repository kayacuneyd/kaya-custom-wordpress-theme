<!doctype html>
<html <?php language_attributes(); ?>>
        <head>
                <meta charset="<?php bloginfo( 'charset' ); ?>" />
                <link rel="profile" href="http://gmpg.org/xfn/11" />
                <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
                <?php 
                if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); 
                ?>
                <?php wp_head(); ?>
        </head>
        <body <?php body_class('bg-light pt-90'); ?> >
        <div class="header-spacer"></div>
<!-- Navbar -->

<nav class="page-header-fixed navbar navbar-expand-lg bg-light small custom-nav border-bottom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
        <img src="<?php echo get_template_directory_uri() . '/img/ck-svg-logo.svg' ?>" alt="logo">
    </a>
    <button 
      class="navbar-toggler" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" 
      aria-expanded="false" 
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
            ?>
      <form class="d-flex" role="search" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
        <div class="input-group">
            <input 
            type="search" 
            class="form-control form-control-sm" 
            placeholder="<?php echo esc_attr_x( 'Search for', 'placeholder' ) ?>"
			      value="<?php echo get_search_query() ?>" 
            name="s"
			      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" 
            >
            <button class="btn btn-sm btn-success" type="submit"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z"/>
            </svg>
            </button>
        </div>
      </form>
    </div>
  </div>
</nav>

<!-- Navbar -->

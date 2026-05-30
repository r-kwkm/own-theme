<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Custom Cursor -->
<div class="cursor" id="cursor" aria-hidden="true"></div>
<div class="cursor-ring" id="cursorRing" aria-hidden="true"></div>

<!-- NAV -->
<nav class="site-nav" role="navigation" aria-label="<?php esc_attr_e( 'メインナビゲーション', 'own' ); ?>">

  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?> ホーム">
    own<span class="logo-dot">.</span>
  </a>

  <?php
  wp_nav_menu( [
    'theme_location' => 'global',
    'container'      => false,
    'menu_class'     => 'nav-links',
    'fallback_cb'    => function () {
      echo '<ul class="nav-links">';
      echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">Service</a></li>';
      echo '<li><a href="' . esc_url( home_url( '/#process' ) ) . '">Process</a></li>';
      echo '<li><a href="' . esc_url( home_url( '/blog' ) ) . '">Blog</a></li>';
      echo '<li><a href="' . esc_url( home_url( '/#about' ) ) . '">About</a></li>';
      echo '</ul>';
    },
  ] );
  ?>

  <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="nav-cta">
    <?php esc_html_e( '無料相談', 'own' ); ?>
  </a>

  <button
    class="nav-toggle"
    aria-controls="mobile-nav"
    aria-expanded="false"
    aria-label="<?php esc_attr_e( 'メニューを開く', 'own' ); ?>"
  >
    <span></span>
    <span></span>
    <span></span>
  </button>

</nav>

<!-- Fullscreen Overlay Menu -->
<div class="mobile-nav" id="mobile-nav" aria-hidden="true">
  <?php
  wp_nav_menu( [
    'theme_location' => 'global',
    'container'      => false,
    'menu_class'     => 'mobile-nav__list',
    'fallback_cb'    => function () {
      echo '<ul class="mobile-nav__list">';
      foreach ( [ 'Service' => '/service', 'Price' => '/price', 'About' => '/about', 'Blog' => '/blog', 'Contact' => '/contact' ] as $label => $path ) {
        echo '<li><a href="' . esc_url( home_url( $path ) ) . '">' . esc_html( $label ) . '</a></li>';
      }
      echo '</ul>';
    },
  ] );
  ?>
  <div class="mobile-nav__contact">
    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">無料相談をする →</a>
  </div>
  <div class="mobile-nav__deco">
    <p>Web Design &amp; SEO</p>
    <p>Tottori, Japan</p>
    <p>own.</p>
  </div>
</div>

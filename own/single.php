<?php
/**
 * single.php — Own. Theme
 * Blog post detail page
 */
get_header();
the_post();
$cats  = get_the_category();
$tags  = get_the_tags();
$words = mb_strlen( strip_tags( get_the_content() ) );
$read  = max( 1, ceil( $words / 400 ) );
?>

<main id="main">

  <!-- Post Header -->
  <div class="post-header">
    <div style="max-width:1200px;margin-inline:auto;">
      <nav class="page-hero__breadcrumb" aria-label="パンくずリスト">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span>/</span>
        <a href="<?php echo esc_url( home_url('/blog') ); ?>">Blog</a>
        <span>/</span>
        <span><?php echo esc_html( wp_trim_words( get_the_title(), 6, '…' ) ); ?></span>
      </nav>

      <?php if ( $cats ) : ?>
        <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="post-header__cat">
          <?php echo esc_html( $cats[0]->name ); ?>
        </a>
      <?php endif; ?>

      <h1 class="post-header__title"><?php echo str_replace(
        [ 'ーー', '|', '？', 'まず見るべき3つの原因【鳥取の小さな会社向け】', '原因' ],
        [ 'ーー<br>', '<br>', '？<br>', '<span style="white-space:nowrap;">まず見るべき3つの原因【鳥取の小さな会社向け】</span>', '<span style="white-space:nowrap;">原因</span>' ],
        get_the_title()
      ); ?></h1>

      <div class="post-header__meta">
        <time datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
          <?php echo esc_html( get_the_date('Y.m.d') ); ?>
        </time>
        <span><?php echo esc_html( $read ); ?>分で読めます</span>
        <?php if ( $cats ) : ?>
          <span><?php echo esc_html( $cats[0]->name ); ?></span>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <!-- Featured Image -->
  <?php if ( has_post_thumbnail() ) : ?>
    <div style="max-width:800px;margin-inline:auto;padding:0 3rem;">
      <?php the_post_thumbnail( 'own-hero', [
        'style' => 'width:100%;aspect-ratio:1200/630;object-fit:cover;margin-top:3rem;',
        'alt'   => get_the_title(),
      ] ); ?>
    </div>
  <?php endif; ?>

  <!-- Post Body -->
  <div class="post-body">
    <div class="post-body__inner">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <!-- Post Footer: Tags + Nav -->
  <div class="post-footer">
    <div class="post-footer__inner">

      <?php if ( $tags ) : ?>
        <div class="post-tags">
          <?php foreach ( $tags as $tag ) : ?>
            <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="post-tag">
              #<?php echo esc_html( $tag->name ); ?>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- Post Navigation -->
      <div class="post-nav">
        <?php
        $prev = get_previous_post();
        $next = get_next_post();
        ?>
        <?php if ( $prev ) : ?>
          <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="post-nav__item">
            <p class="post-nav__label">← Prev</p>
            <p class="post-nav__title"><?php echo esc_html( get_the_title( $prev ) ); ?></p>
          </a>
        <?php else : ?>
          <div class="post-nav__item" style="opacity:0.3;pointer-events:none;">
            <p class="post-nav__label">← Prev</p>
            <p class="post-nav__title">—</p>
          </div>
        <?php endif; ?>

        <?php if ( $next ) : ?>
          <a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="post-nav__item" style="text-align:right;">
            <p class="post-nav__label">Next →</p>
            <p class="post-nav__title"><?php echo esc_html( get_the_title( $next ) ); ?></p>
          </a>
        <?php else : ?>
          <div class="post-nav__item" style="opacity:0.3;pointer-events:none;text-align:right;">
            <p class="post-nav__label">Next →</p>
            <p class="post-nav__title">—</p>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>

  <!-- Related Posts -->
  <?php
  $related = new WP_Query( [
      'post_type'      => 'post',
      'posts_per_page' => 3,
      'post__not_in'   => [ get_the_ID() ],
      'category__in'   => $cats ? [ $cats[0]->term_id ] : [],
      'orderby'        => 'rand',
      'post_status'    => 'publish',
  ] );
  if ( $related->have_posts() ) : ?>
    <section class="related-section">
      <div style="max-width:1200px;margin-inline:auto;">
        <p class="section-num" style="margin-bottom:0.75rem;">— Related</p>
        <p class="section-en" style="margin-bottom:2rem;">Related Posts</p>

        <div class="blog-grid">
          <?php
          $ri = 0;
          while ( $related->have_posts() ) :
            $related->the_post();
            $rcats = get_the_category();
          ?>
            <article class="blog-card reveal" style="transition-delay:<?php echo $ri * 0.1; ?>s">
              <a href="<?php the_permalink(); ?>">
                <div class="blog-thumb">
                  <?php if ( has_post_thumbnail() ) :
                    the_post_thumbnail( 'own-card', [ 'alt' => get_the_title() ] );
                  else : ?>
                    <span>No Image</span>
                  <?php endif; ?>
                </div>
              </a>
              <div class="blog-body">
                <?php if ( $rcats ) : ?>
                  <a href="<?php echo esc_url( get_category_link( $rcats[0]->term_id ) ); ?>" class="blog-cat">
                    <?php echo esc_html( $rcats[0]->name ); ?>
                  </a>
                <?php endif; ?>
                <p class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <p class="blog-date">
                  <time datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
                    <?php echo esc_html( get_the_date('Y.m.d') ); ?>
                  </time>
                </p>
              </div>
            </article>
          <?php $ri++; endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- CTA -->
  <section class="cta-banner">
    <div class="cta-banner__inner">
      <p class="cta-banner__eyebrow">Contact</p>
      <h2 class="cta-banner__title">Let's Work<br>Together.</h2>
      <p class="cta-banner__text">
        ホームページ制作・SEO対策のご相談はお気軽にどうぞ。<br>
        個人の方も大歓迎。初回相談は無料です。
      </p>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
        無料相談をする
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
      </a>
    </div>
  </section>

</main>
<?php get_footer(); ?>

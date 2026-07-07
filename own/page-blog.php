<?php
/**
 * Template Name: Blog List Page
 * page-blog.php — Own. Theme
 */
get_header();

$paged      = get_query_var( 'paged' ) ?: 1;
$blog_query = new WP_Query( [
    'post_type'      => 'post',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'post_status'    => 'publish',
] );
?>

<main id="main">

  <!-- Page Header -->
  <div class="page-hero">
    <div style="max-width:1200px;margin-inline:auto;">
      <nav class="page-hero__breadcrumb" aria-label="パンくずリスト">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span>/</span>
        <span>Blog</span>
      </nav>
      <p class="page-hero__num">— Blog</p>
      <p class="page-hero__en">Latest Insights.</p>
      <h1 class="page-hero__ja">鳥取のホームページ制作・SEO・MEOに関するコラム</h1>
      <p class="page-hero__lead">
        ホームページ制作・SEO・MEOに関する実践的なノウハウをお届けします。<br>
        own.が実際に取り組んだ事例も紹介していきます。
      </p>
    </div>
  </div>

  <!-- Blog List -->
  <section class="page-body">
    <div style="max-width:1200px;margin-inline:auto;">

      <?php if ( $blog_query->have_posts() ) : ?>

        <div class="blog-grid">
          <?php $bi = 0; while ( $blog_query->have_posts() ) : $blog_query->the_post();
            $bcats = get_the_category();
          ?>
            <article class="blog-card reveal" style="transition-delay:<?php echo ( $bi % 3 ) * 0.1; ?>s">
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
                <?php if ( $bcats ) : ?>
                  <a href="<?php echo esc_url( get_category_link( $bcats[0]->term_id ) ); ?>" class="blog-cat">
                    <?php echo esc_html( $bcats[0]->name ); ?>
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
          <?php $bi++; endwhile; ?>
        </div>

        <?php
        $pagination_links = paginate_links( [
          'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
          'current'   => $paged,
          'total'     => $blog_query->max_num_pages,
          'prev_text' => '← Prev',
          'next_text' => 'Next →',
          'type'      => 'plain',
        ] );
        if ( $pagination_links ) : ?>
          <nav class="pagination" aria-label="ページナビゲーション" style="margin-top:3rem;"><?php echo $pagination_links; ?></nav>
        <?php endif;

        wp_reset_postdata();

      else : ?>

        <div class="blog-coming-soon">
          <p class="blog-coming-soon__label">Coming Soon</p>
          <p class="blog-coming-soon__text">ホームページ制作・SEO・MEOに関するコンテンツを準備中です。<br>もうしばらくお待ちください。</p>
        </div>

      <?php endif; ?>

    </div>
  </section>

  <!-- CTA -->
  <section class="cta-banner">
    <div class="cta-banner__inner">
      <p class="cta-banner__eyebrow">Contact</p>
      <h2 class="cta-banner__title">Let's Work<br>Together.</h2>
      <p class="cta-banner__text">
        ホームページ制作・SEO対策のご相談はお気軽にどうぞ。<br>
        初回相談は無料です。
      </p>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
        無料相談をする
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
      </a>
    </div>
  </section>

</main>
<?php get_footer(); ?>

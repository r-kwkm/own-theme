<?php
/**
 * index.php — Own. Theme
 * Front page / blog index / fallback loop
 */
get_header();
?>

<main id="main">

<?php if ( is_front_page() ) : ?>

  <!-- ======================================================
       HERO
       ====================================================== -->
  <section class="hero">
    <div class="hero-left">
      <p class="hero-eyebrow">Web Design &amp; SEO — Tottori</p>

      <h1 class="hero-title">
        <?php echo nl2br( esc_html( get_theme_mod( 'own_hero_title', "あなたのビジネスを、\n必要な人に届ける。" ) ) ); ?>
      </h1>
      <span class="hero-title-en">own.</span>

      <p class="hero-subtitle">鳥取のホームページ制作・SEO対策</p>

      <p class="hero-desc">
        <?php echo nl2br( esc_html( get_theme_mod( 'own_hero_desc', "誰もが持っている、自分だけの価値がある。\nホームページ制作からSEO・MEO・保守まで、\nひとりが一貫してサポートします。" ) ) ); ?>
      </p>

      <div class="hero-actions">
        <a href="#contact" class="btn-primary">
          無料相談する
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </a>
        <a href="#services" class="btn-ghost">サービスを見る</a>
      </div>
    </div>

    <div class="hero-right" aria-hidden="true">
      <div class="grid-canvas" id="gridCanvas"></div>
      <div class="hero-right-content">
        <div class="hero-logo-big">own<span>.</span></div>
        <p class="hero-right-label">Web &amp; SEO — Tottori</p>
      </div>
    </div>

    <div class="scroll-indicator" aria-hidden="true">
      <div class="scroll-line"></div>
      Scroll
    </div>
  </section>

  <!-- ======================================================
       MARQUEE
       ====================================================== -->
  <div class="marquee-section" aria-hidden="true">
    <div class="marquee-track">
      <?php
      $marquee_items = [
        'ホームページ制作', 'SEO対策', 'MEO対策', 'サイト保守',
        'コンテンツ制作', '集客改善', 'WordPress', '鳥取・米子・倉吉',
        'ホームページ制作', 'SEO対策', 'MEO対策', 'サイト保守',
        'コンテンツ制作', '集客改善', 'WordPress', '鳥取・米子・倉吉',
      ];
      echo '<div class="marquee-item">';
      foreach ( $marquee_items as $item ) {
        echo '<span class="marquee-dot"></span><span>' . esc_html( $item ) . '</span>';
      }
      echo '</div>';
      // duplicate for seamless loop
      echo '<div class="marquee-item" aria-hidden="true">';
      foreach ( $marquee_items as $item ) {
        echo '<span class="marquee-dot"></span><span>' . esc_html( $item ) . '</span>';
      }
      echo '</div>';
      ?>
    </div>
  </div>

  <!-- ======================================================
       TROUBLE
       ====================================================== -->
  <section class="trouble">
    <p class="section-num">— 01 / Trouble</p>
    <p class="section-en">Any of these sound familiar?</p>
    <p class="section-ja">こんなお悩みありませんか？</p>

    <div class="trouble-grid">
      <?php
      $troubles = [
        '「Googleで自分のお店が出てこない」',
        '「ホームページはあるけど何をすればいいかわからない」',
        '「プロフィール文だけちょっと直したい」',
        '「Web周りの管理を誰かに任せたい」',
      ];
      foreach ( $troubles as $i => $text ) :
        $delay = $i * 0.1;
      ?>
        <div class="trouble-item reveal" style="transition-delay:<?php echo $delay; ?>s">
          <span class="trouble-num"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?></span>
          <p class="trouble-text"><?php echo esc_html( $text ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ======================================================
       SERVICES
       ====================================================== -->
  <section class="services" id="services">
    <div class="section-header-row">
      <div>
        <p class="section-num">— 02 / Services</p>
        <p class="section-en">What We Do</p>
        <p class="section-ja" style="margin-bottom:0;">提供サービス</p>
      </div>
      <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="section-link">
        すべて見る
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
          <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
      </a>
    </div>

    <div class="services-grid">

      <?php
      $services = [
        [
          'icon' => '<svg viewBox="0 0 40 40" fill="none"><rect x="4" y="8" width="32" height="22" rx="2" stroke="#1a1a1a" stroke-width="1.5"/><path d="M14 34h12M20 30v4" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
          'num'  => '01',
          'name' => 'ホームページ制作',
          'desc' => '集客できるWordPressサイトをSEO設計込みで制作。作って終わりじゃなく、育てるサイトを。',
          'price'=> '30万円〜',
        ],
        [
          'icon' => '<svg viewBox="0 0 40 40" fill="none"><circle cx="18" cy="18" r="11" stroke="#1a1a1a" stroke-width="1.5"/><path d="M26 26l6 6" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
          'num'  => '02',
          'name' => 'SEO対策',
          'desc' => 'サイト診断から月次レポート・改善提案まで。Googleで上位に出るための仕組みをつくる。',
          'price'=> '5万円〜 / 月',
        ],
        [
          'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M20 8C14 8 9 13 9 19c0 4 2 7.5 5 9.5V32h12v-3.5c3-2 5-5.5 5-9.5 0-6-5-11-11-11z" stroke="#1a1a1a" stroke-width="1.5"/><path d="M14 32h12" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
          'num'  => '03',
          'name' => 'MEO対策',
          'desc' => 'Googleマップで地域のお客さんに見つけてもらう。地元密着の集客をサポート。',
          'price'=> '5万円〜',
        ],
        [
          'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M20 6L8 12v10c0 7 5.5 13 12 14 6.5-1 12-7 12-14V12L20 6z" stroke="#1a1a1a" stroke-width="1.5" stroke-linejoin="round"/><path d="M14 20l4 4 8-8" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
          'num'  => '04',
          'name' => '保守・顧問',
          'desc' => 'サイトの管理・更新・セキュリティ対策まで。困ったときに頼れる存在として。',
          'price'=> '3万円 / 月',
        ],
        [
          'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M8 10h24M8 16h18M8 22h20M8 28h14" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
          'num'  => '05',
          'name' => 'コンテンツ制作',
          'desc' => 'SEOに強いブログ記事の構成から執筆まで。検索で見つけてもらえるコンテンツを。',
          'price'=> '3万円 / 本',
        ],
        [
          'icon' => '<svg viewBox="0 0 40 40" fill="none"><rect x="8" y="12" width="24" height="18" rx="2" stroke="#1a1a1a" stroke-width="1.5"/><path d="M14 20h12M14 25h8M20 8v4" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
          'num'  => '06',
          'name' => 'お気軽相談',
          'desc' => '「Googleで出てこない」「ちょっとだけ直したい」そんな小さなお悩みからどうぞ。',
          'price'=> 'まずは無料相談',
        ],
      ];

      foreach ( $services as $i => $svc ) :
        $delay = $i * 0.1;
      ?>
        <div class="service-card reveal" style="transition-delay:<?php echo $delay; ?>s">
          <div class="service-icon"><?php echo $svc['icon']; ?></div>
          <p class="service-num-label"><?php echo esc_html( $svc['num'] ); ?></p>
          <p class="service-name"><?php echo esc_html( $svc['name'] ); ?></p>
          <p class="service-desc"><?php echo esc_html( $svc['desc'] ); ?></p>
          <p class="service-price"><?php echo esc_html( $svc['price'] ); ?></p>
        </div>
      <?php endforeach; ?>

    </div>
  </section>

  <!-- ======================================================
       REASONS
       ====================================================== -->
  <section class="reasons" id="about">
    <p class="section-num" style="color:var(--accent);">— 03 / Why own.</p>
    <p class="section-en">Why Choose Us</p>
    <p class="section-ja" style="color:var(--white);margin-bottom:0;">選ばれる理由</p>

    <div class="reasons-grid">
      <?php
      $reasons = [
        [ '01', '鳥取在住だからすぐ会える', '地元在住だから話しかけやすく、対面での打ち合わせにも対応。顔の見える関係でサポートします。' ],
        [ '02', '作って終わりじゃない', '公開後もSEO・MEO・保守まで一貫してサポート。育てるサイトを一緒に作ります。' ],
        [ '03', '担当者がずっと同じ', '窓口はひとつ。担当者が変わらないから、毎回説明し直す必要がありません。' ],
        [ '04', '小さな悩みから大きな案件まで', '「ちょっと聞きたいだけ」でも大丈夫。どんな規模のご相談もお気軽にどうぞ。' ],
      ];
      foreach ( $reasons as $i => [$num, $title, $desc] ) :
        $delay = $i * 0.1;
      ?>
        <div class="reason-item reveal" style="transition-delay:<?php echo $delay; ?>s">
          <span class="reason-num"><?php echo esc_html( $num ); ?></span>
          <div>
            <p class="reason-title"><?php echo esc_html( $title ); ?></p>
            <p class="reason-desc"><?php echo esc_html( $desc ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ======================================================
       PROCESS
       ====================================================== -->
  <section class="process" id="process">
    <p class="section-num">— 04 / Process</p>
    <p class="section-en">How It Works</p>
    <p class="section-ja">進め方</p>

    <div class="process-steps">
      <?php
      $steps = [
        [ 'Step 01', "ヒアリング・\n現状確認",    '事業の課題・目標・現状をヒアリング。どんな些細な悩みでもお聞きします。' ],
        [ 'Step 02', "戦略策定・\n提案",           'サイト構成・キーワード・デザインの方向性をまとめてご提案します。' ],
        [ 'Step 03', "制作・\n実装",               'デザイン・開発・SEO施策を並行して進め、スピーディーに納品します。' ],
        [ 'Step 04', "公開後の\n継続サポート",     '公開後もデータを見ながら継続改善。成果が出るまでしっかり伴走します。' ],
      ];
      foreach ( $steps as $i => [$num, $title, $desc] ) :
        $delay = $i * 0.1;
      ?>
        <div class="process-step reveal" style="transition-delay:<?php echo $delay; ?>s">
          <p class="step-num"><?php echo esc_html( $num ); ?></p>
          <h3 class="step-title"><?php echo nl2br( esc_html( $title ) ); ?></h3>
          <p class="step-desc"><?php echo esc_html( $desc ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ======================================================
       BLOG
       ====================================================== -->
  <?php
  $blog_query = new WP_Query( [
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
  ] );

  if ( $blog_query->have_posts() ) :
  ?>
  <section class="blog" id="blog">
    <div class="section-header-row">
      <div>
        <p class="section-num">— 05 / Blog</p>
        <p class="section-en">Latest Insights</p>
        <p class="section-ja" style="margin-bottom:0;">最新のブログ記事</p>
      </div>
      <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog' ) ); ?>" class="section-link">
        すべて見る
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
          <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
      </a>
    </div>

    <div class="blog-grid">
      <?php
      $blog_index = 0;
      while ( $blog_query->have_posts() ) :
        $blog_query->the_post();
        $delay = $blog_index * 0.1;
        $cats  = get_the_category();
      ?>
        <article class="blog-card reveal" style="transition-delay:<?php echo $delay; ?>s">
          <a href="<?php the_permalink(); ?>">
            <div class="blog-thumb">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'own-card', [ 'alt' => get_the_title() ] ); ?>
              <?php else : ?>
                Thumbnail
              <?php endif; ?>
            </div>
          </a>
          <div class="blog-body">
            <?php if ( $cats ) : ?>
              <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="blog-cat">
                <?php echo esc_html( $cats[0]->name ); ?>
              </a>
            <?php endif; ?>
            <p class="blog-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </p>
            <p class="blog-date">
              <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                <?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?>
              </time>
            </p>
          </div>
        </article>
      <?php
        $blog_index++;
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
  </section>
  <?php endif; ?>

  <!-- ======================================================
       CTA
       ====================================================== -->
  <section class="cta-banner" id="contact">
    <div class="cta-banner__inner">
      <p class="cta-banner__eyebrow">Contact</p>
      <h2 class="cta-banner__title">Let's Work<br>Together.</h2>
      <p class="cta-banner__text">
        Webサイトのご相談、SEO改善のご依頼など、お気軽にお問い合わせください。<br>
        個人の方も大歓迎。初回相談は無料です。
      </p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: home_url( '/contact' ) ); ?>" class="btn btn--primary">
        無料相談をする
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
          <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </a>
    </div>
  </section>

<?php elseif ( is_home() && ! is_front_page() ) : ?>

  <!-- ======================================================
       BLOG INDEX
       ====================================================== -->
  <div style="padding: 6rem 3rem;">
    <p class="section-num">— Blog</p>
    <p class="section-en">Latest Insights</p>
    <p class="section-ja">最新のブログ記事</p>

    <?php if ( have_posts() ) : ?>
      <div class="blog-grid">
        <?php
        $idx = 0;
        while ( have_posts() ) :
          the_post();
          $cats = get_the_category();
        ?>
          <article class="blog-card reveal" style="transition-delay:<?php echo $idx * 0.1; ?>s">
            <a href="<?php the_permalink(); ?>">
              <div class="blog-thumb">
                <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'own-card', [ 'alt' => get_the_title() ] );
                else : ?>Thumbnail<?php endif; ?>
              </div>
            </a>
            <div class="blog-body">
              <?php if ( $cats ) : ?>
                <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="blog-cat">
                  <?php echo esc_html( $cats[0]->name ); ?>
                </a>
              <?php endif; ?>
              <p class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              <p class="blog-date">
                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                  <?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?>
                </time>
              </p>
            </div>
          </article>
        <?php
          $idx++;
        endwhile;
        ?>
      </div>
      <div style="margin-top:3rem;"><?php own_pagination(); ?></div>
    <?php else : ?>
      <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
  </div>

<?php else : ?>

  <!-- ======================================================
       DEFAULT LOOP (archive / search / etc.)
       ====================================================== -->
  <div style="padding: 6rem 3rem;">
    <?php if ( have_posts() ) : ?>
      <div class="blog-grid">
        <?php
        $idx = 0;
        while ( have_posts() ) :
          the_post();
          $cats = get_the_category();
        ?>
          <article class="blog-card reveal" style="transition-delay:<?php echo $idx * 0.1; ?>s">
            <a href="<?php the_permalink(); ?>">
              <div class="blog-thumb">
                <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'own-card', [ 'alt' => get_the_title() ] );
                else : ?>Thumbnail<?php endif; ?>
              </div>
            </a>
            <div class="blog-body">
              <?php if ( $cats ) : ?>
                <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="blog-cat">
                  <?php echo esc_html( $cats[0]->name ); ?>
                </a>
              <?php endif; ?>
              <p class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              <p class="blog-date">
                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                  <?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?>
                </time>
              </p>
            </div>
          </article>
        <?php
          $idx++;
        endwhile;
        ?>
      </div>
      <div style="margin-top:3rem;"><?php own_pagination(); ?></div>
    <?php else : ?>
      <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
  </div>

<?php endif; ?>

</main>

<?php get_footer(); ?>

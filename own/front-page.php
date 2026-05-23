<?php
/**
 * front-page.php — Own. Theme
 * Used automatically by WordPress when show_on_front = page
 */
get_header(); ?>

<main id="main">

  <!-- ======================================================
       HERO
       ====================================================== -->
  <section class="hero">
    <div class="hero-left">
      <p class="hero-eyebrow">鳥取のホームページ制作・SEO対策</p>

      <h1 class="hero-title">
        <?php echo nl2br( esc_html( get_theme_mod( 'own_hero_title', "鳥取の小さなお店に、\nWebのチカラを。" ) ) ); ?>
      </h1>

      <p class="hero-desc">
        <?php echo nl2br( esc_html( get_theme_mod( 'own_hero_desc', "Webのことがわからなくても大丈夫。\n一緒に考えながら、あなたのお店に合った方法を見つけます。" ) ) ); ?>
      </p>

      <div class="hero-actions">
        <a href="#contact" class="btn-primary">
          まず話だけ聞いてみる
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </a>
        <a href="[取得したURLをここに貼る]" class="btn-line" target="_blank" rel="noopener noreferrer">LINEで相談する</a>
      </div>

      <p class="hero-sub-note">初回相談は無料。Webのことが全くわからなくても大丈夫です。</p>

      <div class="hero-sub-links">
        <a href="#services" class="hero-sub-link">サービスを見る</a>
        <span class="hero-sub-links__divider" aria-hidden="true">|</span>
        <a href="<?php echo esc_url( home_url( '/price' ) ); ?>" class="hero-sub-link">料金を見る</a>
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

    <div class="pain-grid">
      <?php
      $pains = [
        [
          'voice' => '「Instagramだけで、ほんとに大丈夫かな…」',
          'solve' => 'SNSとwebの役割、一緒に整理しましょう',
        ],
        [
          'voice' => '「何年も更新してないサイト、どうにかしたい」',
          'solve' => '今あるものを活かして、小さく始めて大丈夫です',
        ],
        [
          'voice' => '「うちのお店、Googleで出てこないんだけど…」',
          'solve' => '地図にも検索にも、ちゃんと出るようにします',
        ],
        [
          'voice' => '「制作会社って、なんか話しかけにくくて」',
          'solve' => '同じ鳥取にいます。気軽に声かけてください',
        ],
        [
          'voice' => '「プロフィール文だけちょっと直したい」',
          'solve' => '小さな修正も、ご相談ください',
        ],
        [
          'voice' => '「作ってもらったあと、困っても誰に言えばいいの」',
          'solve' => '公開後もしっかりサポートします',
        ],
      ];
      foreach ( $pains as $i => $pain ) :
        $delay = $i * 0.08;
      ?>
        <div class="pain-card reveal" style="transition-delay:<?php echo $delay; ?>s">
          <p class="pain-voice"><?php echo esc_html( $pain['voice'] ); ?></p>
          <p class="pain-solve">→ <?php echo esc_html( $pain['solve'] ); ?></p>
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
      <a href="<?php echo esc_url( home_url( '/service' ) ); ?>" class="section-link">
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
          'name' => 'Web制作',
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

    <p class="services-note">お見積りは無料です。「いくらかかるか知りたいだけ」でもお気軽にどうぞ。</p>
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
        [ 'Step 01', "ヒアリング・現状確認",    '事業の課題・目標・現状をヒアリング。どんな些細な悩みでもお聞きします。' ],
        [ 'Step 02', "戦略策定・提案",           'サイト構成・キーワード・デザインの方向性をまとめてご提案します。' ],
        [ 'Step 03', "制作・実装",               'デザイン・開発・SEO施策を並行して進め、スピーディーに納品します。' ],
        [ 'Step 04', "公開後の継続サポート",     '公開後もデータを見ながら継続改善。成果が出るまでしっかり伴走します。' ],
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

  ?>
  <section class="blog" id="blog">
    <div class="section-header-row">
      <div>
        <p class="section-num">— 05 / Blog</p>
        <p class="section-en">Latest Insights</p>
        <p class="section-ja" style="margin-bottom:0;">最新のブログ記事</p>
      </div>
    </div>

    <div class="blog-coming-soon">
      <p class="blog-coming-soon__label">Coming Soon</p>
      <p class="blog-coming-soon__text">Web制作・SEO・MEOに関するコンテンツを準備中です。<br>もうしばらくお待ちください。</p>
    </div>
  </section>

  <!-- ======================================================
       FAQ (TOP)
       ====================================================== -->
  <section class="faq-top">
    <div class="section-header-row">
      <div>
        <p class="section-num">— 06 / FAQ</p>
        <p class="section-en">Quick Answers</p>
        <p class="section-ja" style="margin-bottom:0;">よくある質問</p>
      </div>
      <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="section-link">
        すべて見る
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
          <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
      </a>
    </div>

    <div class="faq-top-list">
      <?php
      $top_faqs = [
        [
          'q' => 'パソコンが苦手でも大丈夫ですか？',
          'a' => 'はい、大丈夫です。難しい言葉は使わずにわかりやすくご説明します。Webのことが全くわからない状態でのご相談が一番多いです。',
        ],
        [
          'q' => '何から相談すればいいかわからないのですが…',
          'a' => '「なんとなく気になった」で十分です。現状をお聞きしながら、何が必要かを一緒に整理するところから始めます。',
        ],
        [
          'q' => '予算が少ないのですが、相談できますか？',
          'a' => 'もちろんです。「〇〇万円でできることを教えてほしい」といったご相談も大歓迎です。お見積りは無料ですのでお気軽にどうぞ。',
        ],
        [
          'q' => 'まず話を聞くだけでも大丈夫ですか？',
          'a' => 'はい、もちろんです。初回相談は無料です。契約や費用は一切発生しませんので、気軽にお声がけください。',
        ],
      ];
      foreach ( $top_faqs as $i => $faq ) :
        $delay = $i * 0.08;
      ?>
        <div class="faq-item reveal" style="transition-delay:<?php echo $delay; ?>s">
          <div class="faq-q" role="button" tabindex="0" aria-expanded="false">
            <span class="faq-q__text"><?php echo esc_html( $faq['q'] ); ?></span>
            <span class="faq-q__icon" aria-hidden="true"></span>
          </div>
          <div class="faq-a">
            <p class="faq-a__text"><?php echo esc_html( $faq['a'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

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
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--primary">
        無料相談をする
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
          <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </a>
    </div>
  </section>

</main>
<?php get_footer(); ?>

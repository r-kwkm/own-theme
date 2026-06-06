<?php
/**
 * Template Name: Service - SEO対策
 * page-service-seo.php — Own. Theme
 */

add_filter( 'pre_get_document_title', function() {
	return 'SEO対策｜鳥取のSEO・Web制作はown.';
} );

add_action( 'wp_head', function() { ?>
<meta name="description" content="鳥取のSEO対策はown.。サイト診断・キーワード選定・内部対策・月次レポートまで一貫対応。5万円〜/月。まずは無料相談。">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "効果が出るまでどれくらいかかりますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "一般的に3〜6ヶ月が目安です。競合の強さやサイトの状態によって変わるため、最初の診断でお伝えします。"
      }
    },
    {
      "@type": "Question",
      "name": "今のサイトのままでも対応できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。既存サイトの診断から始めます。WordPressでなくても対応可能です。"
      }
    },
    {
      "@type": "Question",
      "name": "契約期間の縛りはありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "最低3ヶ月からお願いしています。SEOは継続が前提のため、短期での成果保証はしておりません。"
      }
    },
    {
      "@type": "Question",
      "name": "自社でブログを書いているのですが、それも見てもらえますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。既存記事の改善提案も対応します。"
      }
    }
  ]
}
</script>
<?php }, 1 );

get_header(); ?>

<main id="main">

  <!-- ① FV -->
  <section class="sv-fv">
    <div class="sv-fv__inner">

      <nav class="sv-fv__breadcrumb" aria-label="パンくずリスト">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span>/</span>
        <a href="<?php echo esc_url( home_url('/service') ); ?>">Services</a>
        <span>/</span>
        <span>SEO対策</span>
      </nav>

      <p class="sv-fv__eyebrow">— 02 / SEO</p>

      <h1 class="sv-fv__title">検索から毎月お客さんが来る仕組みを。</h1>

      <p class="sv-fv__sub">広告費をかけなくても、Googleで上位に表示され続けるSEOの仕組みを鳥取の事業者向けに構築します。</p>

      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
        まず無料で相談する
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
          <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </a>

    </div>
  </section>

  <!-- ② 課題提起 -->
  <section class="trouble">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— Trouble</p>
      <p class="section-en">Does this sound familiar?</p>
      <h2 class="section-ja">こんなお悩みはありませんか？</h2>

      <div class="trouble-grid">
        <?php
        $troubles = [
          '広告をやめたら、途端に問い合わせが来なくなった',
          'ホームページはあるのに、検索しても自分のサイトが出てこない',
          'SEO業者に頼んだけど、何をやってるか全然分からない',
          'ブログを書いてるのに、アクセスが一向に増えない',
        ];
        foreach ( $troubles as $i => $text ) : ?>
          <div class="trouble-item reveal" style="transition-delay:<?php echo $i * 0.08; ?>s">
            <span class="trouble-num"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?></span>
            <p class="trouble-text"><?php echo esc_html( $text ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ③ できること -->
  <section class="services" id="features">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— What We Do</p>
      <p class="section-en">What's Included</p>
      <h2 class="section-ja">できること</h2>

      <div class="services-grid services-grid--4col">
        <?php
        $features = [
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><circle cx="20" cy="20" r="12" stroke="#1a1a1a" stroke-width="1.5"/><path d="M14 20h12M20 14v12" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/><circle cx="20" cy="20" r="3" fill="#1a1a1a"/></svg>',
            'num'  => '01',
            'name' => 'サイト診断',
            'desc' => '現状のサイトの問題点を洗い出し、優先度をつけて整理。何から手をつければいいかを明確にします。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><circle cx="18" cy="18" r="11" stroke="#1a1a1a" stroke-width="1.5"/><path d="M26 26l6 6" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/><path d="M14 18h8M18 14v8" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'  => '02',
            'name' => 'キーワード選定',
            'desc' => '勝てるキーワードを競合・検索ボリュームをもとに選定。地域性を踏まえた現実的な提案をします。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><rect x="6" y="6" width="28" height="28" rx="2" stroke="#1a1a1a" stroke-width="1.5"/><path d="M12 14h16M12 20h10M12 26h13" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'  => '03',
            'name' => '内部対策',
            'desc' => 'タイトル・見出し・構造・表示速度など技術面を改善。Googleが評価しやすい状態に整えます。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M8 30V20M16 30V14M24 30V18M32 30V10" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'  => '04',
            'name' => '月次レポート',
            'desc' => '順位・流入・改善施策を毎月レポートで共有。「何をやったか」「結果はどうか」を毎月明示します。',
          ],
        ];
        foreach ( $features as $i => $f ) : ?>
          <div class="service-card reveal" style="transition-delay:<?php echo $i * 0.1; ?>s">
            <div class="service-icon"><?php echo $f['icon']; ?></div>
            <p class="service-num-label"><?php echo esc_html( $f['num'] ); ?></p>
            <p class="service-name"><?php echo esc_html( $f['name'] ); ?></p>
            <p class="service-desc"><?php echo esc_html( $f['desc'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ④ 選ばれる理由 -->
  <section class="reasons">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num" style="color:var(--accent);">— Why Us</p>
      <p class="section-en">Why Choose own.</p>
      <h2 class="section-ja" style="color:var(--white);margin-bottom:0;">選ばれる理由</h2>

      <div class="reasons-grid reasons-grid--3col">
        <?php
        $reasons = [
          [
            'num'   => '01',
            'title' => '鳥取の競合を知っている',
            'desc'  => '地域の検索市場・競合サイトの強さを把握した上で、現実的に上位が狙えるキーワードを提案できる。',
          ],
          [
            'num'   => '02',
            'title' => '制作とSEOが一体',
            'desc'  => 'SEO担当と制作担当が別々だと対応が遅くなりがち。own.は診断から修正まで一人で完結するので動きが速い。',
          ],
          [
            'num'   => '03',
            'title' => '何をやっているか、ちゃんと説明できる',
            'desc'  => '毎月のレポートで施策・結果・次のアクションを明示。「お任せ」ではなく、一緒に理解しながら進めます。',
          ],
        ];
        foreach ( $reasons as $i => $r ) : ?>
          <div class="reason-item reveal" style="transition-delay:<?php echo $i * 0.1; ?>s">
            <span class="reason-num"><?php echo esc_html( $r['num'] ); ?></span>
            <div>
              <p class="reason-title"><?php echo esc_html( $r['title'] ); ?></p>
              <p class="reason-desc"><?php echo esc_html( $r['desc'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ⑤ 料金 -->
  <section class="page-body">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— Pricing</p>
      <p class="section-en">Plans &amp; Pricing</p>
      <h2 class="section-ja">料金</h2>

      <div class="sv-price-single reveal">
        <div class="price-card price-card--featured sv-price-single__card">
          <h3 class="price-card__name">SEO対策</h3>
          <p class="price-card__price">5<span style="font-size:1.2rem;font-weight:500;">万円〜</span><span style="font-size:1rem;font-weight:400;opacity:.7;"> / 月</span></p>
          <p class="price-card__unit">税込 5.5万円〜 / 月</p>
          <div class="price-card__divider"></div>
          <ul class="price-card__list">
            <li>サイト診断レポート</li>
            <li>キーワード選定・管理</li>
            <li>内部対策</li>
            <li>コンテンツ改善提案</li>
            <li>月次レポート</li>
          </ul>
          <p class="price-card__note">※ サイトの規模・対策範囲によって変動します。まずは無料相談でお見積もりします。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ⑥ 進め方 -->
  <section class="process">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— Process</p>
      <p class="section-en">How It Works</p>
      <h2 class="section-ja">進め方</h2>

      <div class="process-steps">
        <?php
        $steps = [
          [ 'STEP 1', '無料相談・現状確認', '現在のサイト・順位・目標をヒアリング。' ],
          [ 'STEP 2', '診断・提案',          'サイト診断レポートをもとに施策を提案。' ],
          [ 'STEP 3', '対策開始',            '優先度の高い内部対策から着手、毎月改善を積み上げ。' ],
          [ 'STEP 4', '月次レポート・振り返り', '結果を共有しながら次の施策を決定。' ],
        ];
        foreach ( $steps as $i => [$num, $title, $desc] ) : ?>
          <div class="process-step reveal" style="transition-delay:<?php echo $i * 0.1; ?>s">
            <p class="step-num"><?php echo esc_html( $num ); ?></p>
            <h3 class="step-title"><?php echo esc_html( $title ); ?></h3>
            <p class="step-desc"><?php echo esc_html( $desc ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ⑦ FAQ -->
  <section class="page-body page-body--surface">
    <div style="max-width:860px;margin-inline:auto;">
      <p class="section-num">— FAQ</p>
      <p class="section-en">FAQ</p>
      <h2 class="section-ja">よくある質問</h2>

      <div class="faq-list">
        <?php
        $faqs = [
          [
            '効果が出るまでどれくらいかかりますか？',
            '一般的に3〜6ヶ月が目安です。競合の強さやサイトの状態によって変わるため、最初の診断でお伝えします。',
          ],
          [
            '今のサイトのままでも対応できますか？',
            'はい。既存サイトの診断から始めます。WordPressでなくても対応可能です。',
          ],
          [
            '契約期間の縛りはありますか？',
            '最低3ヶ月からお願いしています。SEOは継続が前提のため、短期での成果保証はしておりません。',
          ],
          [
            '自社でブログを書いているのですが、それも見てもらえますか？',
            'はい。既存記事の改善提案も対応します。',
          ],
        ];
        foreach ( $faqs as $i => [$q, $a] ) : ?>
          <div class="faq-item">
            <div class="faq-q" role="button" tabindex="0" aria-expanded="false">
              <span class="faq-q__text"><?php echo esc_html( $q ); ?></span>
              <span class="faq-q__icon" aria-hidden="true"></span>
            </div>
            <div class="faq-a">
              <p class="faq-a__text"><?php echo esc_html( $a ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 他サービスへの内部リンク -->
  <section class="page-body">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— Other Services</p>
      <p class="section-en">Related Services</p>
      <h2 class="section-ja">他のサービス</h2>

      <div class="sv-related-grid">
        <a href="<?php echo esc_url( home_url('/service/web') ); ?>" class="sv-related-card reveal" style="transition-delay:0s">
          <p class="sv-related-card__num">01</p>
          <p class="sv-related-card__name">Web制作</p>
          <p class="sv-related-card__desc">集客できるWordPressサイトをSEO設計込みで制作します。</p>
          <span class="sv-related-card__link">詳しく見る →</span>
        </a>
        <a href="<?php echo esc_url( home_url('/service/meo') ); ?>" class="sv-related-card reveal" style="transition-delay:0.1s">
          <p class="sv-related-card__num">03</p>
          <p class="sv-related-card__name">MEO対策</p>
          <p class="sv-related-card__desc">Googleマップで地域のお客さんに見つけてもらう仕組みを作ります。</p>
          <span class="sv-related-card__link">詳しく見る →</span>
        </a>
        <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sv-related-card reveal" style="transition-delay:0.2s">
          <p class="sv-related-card__num">06</p>
          <p class="sv-related-card__name">お気軽相談</p>
          <p class="sv-related-card__desc">まず話を聞いてほしい。小さな悩みでも、初回相談は無料です。</p>
          <span class="sv-related-card__link">相談してみる →</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ⑧ ページ末尾CTA -->
  <section class="cta-banner">
    <div class="cta-banner__inner">
      <p class="cta-banner__eyebrow">SEO</p>
      <h2 class="cta-banner__title cta-banner__title--ja">まずは今のサイトを分析してみませんか。</h2>
      <p class="cta-banner__text">
        何が問題で、何から手をつければいいか。<br>無料相談でざっくりお伝えします。
      </p>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
        無料相談をする
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
          <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </a>
    </div>
  </section>

</main>
<?php get_footer(); ?>

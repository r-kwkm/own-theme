<?php
/**
 * Template Name: Service - 保守・顧問
 * page-service-maintenance.php — Own. Theme
 */

add_filter( 'pre_get_document_title', function() {
	return '保守・顧問｜鳥取のSEO・Web制作はown.';
} );

add_action( 'wp_head', function() { ?>
<meta name="description" content="鳥取のWordPress保守・運用サポートはown.。更新・バックアップ・セキュリティ・修正対応まで月3万円で丸ごとお任せ。まずは無料相談。">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "他社で作ったサイトでも対応できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。WordPressであれば基本的に対応可能です。まず現状を確認させてください。"
      }
    },
    {
      "@type": "Question",
      "name": "どんなサイトでも対応できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "WordPress製のサイトであれば基本対応可能です。大規模なECサイトや独自システムが絡む場合はご相談ください。"
      }
    },
    {
      "@type": "Question",
      "name": "月5回を超えた修正はどうなりますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "超過分は1件3,000円〜で対応します。大規模な変更は別途お見積もりします。"
      }
    },
    {
      "@type": "Question",
      "name": "契約期間の縛りはありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "最低3ヶ月からお願いしています。月途中の解約は翌月末での対応となります。"
      }
    },
    {
      "@type": "Question",
      "name": "トラブルが起きたときはどれくらいで対応してもらえますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "基本的に当日〜翌営業日での対応を目安にしています。"
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
        <span>保守・顧問</span>
      </nav>

      <p class="sv-fv__eyebrow">— 04 / Maintenance</p>

      <h1 class="sv-fv__title">サイトの運用、全部お任せください。</h1>

      <p class="sv-fv__sub">更新・セキュリティ・トラブル対応まで、あなたのサイトをずっと安全に動かし続けます。</p>

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
          'WordPressの更新通知が来るけど、触るのが怖くて放置している',
          'サイトがいつの間にか改ざんされていた、ということが不安',
          'ちょっとした文章修正を頼める人がいない',
          '制作会社に頼んだら対応が遅くて、いつも待たされる',
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
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M20 6L8 12v10c0 7 5.5 13 12 14 6.5-1 12-7 12-14V12L20 6z" stroke="#1a1a1a" stroke-width="1.5" stroke-linejoin="round"/><path d="M14 20l4 4 8-8" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'num'  => '01',
            'name' => 'WordPress・プラグイン更新',
            'desc' => '定期的に更新し、古いバージョンによるセキュリティリスクを最小化します。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M12 20v10h16V20" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 20h24" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/><path d="M20 20V10M16 14l4-4 4 4" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'num'  => '02',
            'name' => 'バックアップ管理',
            'desc' => '万が一のときに即復旧できる体制を維持。データを失うリスクをゼロに近づけます。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><rect x="10" y="16" width="20" height="16" rx="2" stroke="#1a1a1a" stroke-width="1.5"/><path d="M14 16v-4a6 6 0 0 1 12 0v4" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/><circle cx="20" cy="24" r="2" fill="#1a1a1a"/></svg>',
            'num'  => '03',
            'name' => 'セキュリティ対策',
            'desc' => '不正アクセス・改ざんを検知・防止する設定を維持。安全な状態をキープします。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M10 12h20M10 18h14M10 24h16M10 30h10" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/><path d="M30 26l4 4-4 4" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'num'  => '04',
            'name' => '文章・画像の修正対応',
            'desc' => '「ここ直したい」をすぐ対応。月5回までLINEまたはメールで気軽に依頼できます。',
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
            'title' => '連絡してすぐ動ける',
            'desc'  => '大手制作会社と違い、担当が固定で窓口がひとつ。LINEやメールで連絡すればその日中に対応します。',
          ],
          [
            'num'   => '02',
            'title' => 'SEO・MEOもまとめて相談できる',
            'desc'  => '保守だけでなく「アクセスが減った」「順位が落ちた」といった相談にも同じ窓口で対応できます。',
          ],
          [
            'num'   => '03',
            'title' => 'サイトを作った人間が管理する安心感',
            'desc'  => '構造を把握しているから、トラブル時の対応が速い。「作った人と違う人が管理している」問題が起きません。',
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
          <h3 class="price-card__name">保守・顧問</h3>
          <p class="price-card__price">3<span style="font-size:1rem;font-weight:500;">万円</span><span style="font-size:0.9rem;font-weight:400;opacity:.7;"> / 月</span></p>
          <p class="price-card__unit">税込 3.3万円 / 月</p>
          <div class="price-card__divider"></div>
          <ul class="price-card__list">
            <li>WordPress・プラグイン定期更新</li>
            <li>バックアップ管理</li>
            <li>セキュリティ監視・対策</li>
            <li>文章・画像の修正対応（月5回まで）</li>
            <li>LINEまたはメールでの随時相談対応</li>
          </ul>
          <p class="price-card__note">※ 大幅なページ追加・新機能実装は別途お見積もりします。</p>
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
          [ 'STEP 1', '現状確認',       '現在のサイト環境・使用プラグイン・懸念点をヒアリング。' ],
          [ 'STEP 2', '初期設定',       'バックアップ・セキュリティ設定を整えて契約開始。' ],
          [ 'STEP 3', '定期メンテナンス', '月次で更新・バックアップ・状態確認を実施。' ],
          [ 'STEP 4', '随時対応',       '修正依頼・相談はLINE or メールでいつでもOK。' ],
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
            '他社で作ったサイトでも対応できますか？',
            'はい。WordPressであれば基本的に対応可能です。まず現状を確認させてください。',
          ],
          [
            'どんなサイトでも対応できますか？',
            'WordPress製のサイトであれば基本対応可能です。大規模なECサイトや独自システムが絡む場合はご相談ください。',
          ],
          [
            '月5回を超えた修正はどうなりますか？',
            '超過分は1件3,000円〜で対応します。大規模な変更は別途お見積もりします。',
          ],
          [
            '契約期間の縛りはありますか？',
            '最低3ヶ月からお願いしています。月途中の解約は翌月末での対応となります。',
          ],
          [
            'トラブルが起きたときはどれくらいで対応してもらえますか？',
            '基本的に当日〜翌営業日での対応を目安にしています。',
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
        <a href="<?php echo esc_url( home_url('/service/seo') ); ?>" class="sv-related-card reveal" style="transition-delay:0.1s">
          <p class="sv-related-card__num">02</p>
          <p class="sv-related-card__name">SEO対策</p>
          <p class="sv-related-card__desc">作ったサイトをGoogleで上位に。継続的な集客の仕組みを構築します。</p>
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
      <p class="cta-banner__eyebrow">Maintenance</p>
      <h2 class="cta-banner__title cta-banner__title--ja">サイトのこと<br class="sp-br">気軽に相談してください。</h2>
      <p class="cta-banner__text">
        「これ聞いていいのかな」くらいの話でも大丈夫です。まず話すだけでOK。
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

<?php
/**
 * Template Name: Service - コンテンツ制作
 * page-service-content.php — Own. Theme
 */

add_filter( 'pre_get_document_title', function() {
	return 'コンテンツ制作｜鳥取のSEO・Web制作はown.';
} );

add_action( 'wp_head', function() { ?>
<meta name="description" content="鳥取のSEOコンテンツ制作はown.。キーワード選定・構成・執筆・入稿まで一貫対応。3万円〜／本。まずは無料相談。">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "どんなジャンルでも書けますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "基本的にどんなジャンルでも対応します。医療・法律・金融など専門性の高い分野は、お客様に内容を監修いただく形で進めます。"
      }
    },
    {
      "@type": "Question",
      "name": "修正は何回できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "1本につき2回まで無料で対応します。"
      }
    },
    {
      "@type": "Question",
      "name": "月に何本まで対応できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "1社あたり月3〜5本程度を目安にしています。まとめてご依頼の場合はご相談ください。"
      }
    },
    {
      "@type": "Question",
      "name": "記事の効果はどれくらいで出ますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "公開後3〜6ヶ月で順位変動が出始めるケースが多いです。継続的に本数を積み上げることで効果が安定します。"
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
        <span>コンテンツ制作</span>
      </nav>

      <p class="sv-fv__eyebrow">— 05 / Content</p>

      <h1 class="sv-fv__title">ブログで問い合わせを増やします。</h1>

      <p class="sv-fv__sub">検索意図を踏まえた構成・執筆・入稿まで一貫対応。SEOに効くコンテンツ資産を、一緒に積み上げます。</p>

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
          'ブログを書く時間がない、後回しにしてしまう',
          '何を書けばいいか分からず、記事が全然増えない',
          '書いてはいるけど、アクセスにつながっていない',
          '外注したら薄い記事が上がってきて、使えなかった',
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
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><circle cx="18" cy="18" r="11" stroke="#1a1a1a" stroke-width="1.5"/><path d="M26 26l6 6" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/><path d="M14 18h8M18 14v8" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'  => '01',
            'name' => 'キーワード選定・構成設計',
            'desc' => '狙うキーワードを選定し、検索意図に沿った構成を設計。方向性を固めてから執筆に入ります。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M10 10h20M10 16h20M10 22h14" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/><path d="M24 28l4-4 4 4M28 24v8" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'num'  => '02',
            'name' => '執筆',
            'desc' => '読まれて、行動につながる記事を執筆。文字数より「疑問を解決できるか」を優先します。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><rect x="6" y="8" width="28" height="22" rx="2" stroke="#1a1a1a" stroke-width="1.5"/><path d="M12 34h16M20 30v4" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/><path d="M12 16h16M12 21h10" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'  => '03',
            'name' => '入稿・公開設定',
            'desc' => 'WordPress入稿・画像設定・メタ情報の設定まで対応。公開できる状態で納品します。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M8 28l8-8 6 6 10-12" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="32" cy="12" r="4" stroke="#1a1a1a" stroke-width="1.5"/><path d="M30 12l1.5 1.5L34 10" stroke="#1a1a1a" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'num'  => '04',
            'name' => '既存記事のリライト',
            'desc' => 'アクセスが伸び悩んでいる記事を診断・改善。眠っているコンテンツ資産を活かします。',
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
            'title' => 'SEOの知識を持って書ける',
            'desc'  => 'ライティングだけでなく、キーワード選定・検索意図の理解・内部リンク設計までSEO視点で一貫して対応できる。',
          ],
          [
            'num'   => '02',
            'title' => '薄い記事は作らない',
            'desc'  => '文字数より「検索ユーザーの疑問を解決できるか」を優先。長期的に資産になる記事を作ります。',
          ],
          [
            'num'   => '03',
            'title' => '入稿まで丸ごと対応',
            'desc'  => '原稿だけ渡して終わりではなく、WordPress入稿・画像・メタ情報まで公開できる状態で納品。',
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
          <h3 class="price-card__name">コンテンツ制作</h3>
          <p class="price-card__price">3<span style="font-size:1rem;font-weight:500;">万円〜</span><span style="font-size:0.9rem;font-weight:400;opacity:.7;"> / 本</span></p>
          <p class="price-card__unit">税込 3.3万円〜 / 本</p>
          <div class="price-card__divider"></div>
          <ul class="price-card__list">
            <li>キーワード選定</li>
            <li>構成設計</li>
            <li>執筆（3,000〜5,000字程度）</li>
            <li>WordPress入稿・メタ情報設定</li>
            <li>アイキャッチ画像設定</li>
          </ul>
          <p class="price-card__note">※ 文字数・テーマの難易度によって変動します。<br>※ 月複数本のご依頼はまとめてご相談ください。</p>
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
          [ 'STEP 1', 'ヒアリング',          'サイトのテーマ・ターゲット・狙いたいキーワードを確認。' ],
          [ 'STEP 2', 'キーワード選定・構成提案', '勝てるキーワードと記事構成をご提案・すり合わせ。' ],
          [ 'STEP 3', '執筆・確認',           '初稿を提出、フィードバックをもとに修正。' ],
          [ 'STEP 4', '入稿・納品',           'WordPress入稿・メタ情報設定まで完了して納品。' ],
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
            'どんなジャンルでも書けますか？',
            '基本的にどんなジャンルでも対応します。医療・法律・金融など専門性の高い分野は、お客様に内容を監修いただく形で進めます。',
          ],
          [
            '修正は何回できますか？',
            '1本につき2回まで無料で対応します。',
          ],
          [
            '月に何本まで対応できますか？',
            '1社あたり月3〜5本程度を目安にしています。まとめてご依頼の場合はご相談ください。',
          ],
          [
            '記事の効果はどれくらいで出ますか？',
            '公開後3〜6ヶ月で順位変動が出始めるケースが多いです。継続的に本数を積み上げることで効果が安定します。',
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
      <p class="cta-banner__eyebrow">Content</p>
      <h2 class="cta-banner__title cta-banner__title--ja">まず、どんな記事が<br class="sp-br">必要か話しませんか。</h2>
      <p class="cta-banner__text">
        キーワードが決まっていなくても大丈夫です。<br>一緒に考えます。
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

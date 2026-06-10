<?php
/**
 * Template Name: Service - お気軽相談
 * page-service-contact.php — Own. Theme
 */

add_filter( 'pre_get_document_title', function() {
	return 'お気軽相談（無料）｜鳥取のSEO・Web制作はown.';
} );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Web制作・SEO・MEOのことで迷ったら、まずown.に相談してください。初回相談無料。オンライン・対面どちらも対応。鳥取。">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "相談だけで終わっても大丈夫ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "もちろんです。相談後に無理な営業は一切しません。"
      }
    },
    {
      "@type": "Question",
      "name": "オンラインでも相談できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。ZoomまたはGoogle Meetで対応します。"
      }
    },
    {
      "@type": "Question",
      "name": "相談時間はどれくらいですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "30〜60分程度を目安にしています。"
      }
    },
    {
      "@type": "Question",
      "name": "相談後にすぐ契約しないといけませんか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "いいえ。ご検討いただく時間は十分にあります。"
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
        <span>お気軽相談</span>
      </nav>

      <p class="sv-fv__eyebrow">— 06 / Consultation</p>

      <h1 class="sv-fv__title">小さなお悩みでもお気軽にご相談してください。</h1>

      <p class="sv-fv__sub">「何から始めればいいか分からない」そのくらいの段階でも、全然大丈夫です。</p>

      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
        無料で相談してみる
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
          <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </a>

    </div>
  </section>

  <!-- ② こんな相談、よくあります -->
  <section class="page-body">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— Examples</p>
      <p class="section-en">Common Questions</p>
      <h2 class="section-ja">こんな相談、よくあります</h2>

      <ul class="sc-examples reveal">
        <?php
        $examples = [
          'Googleで自分のお店が出てこない',
          'ホームページを作りたいけど、何から始めればいいか分からない',
          '今のサイト、なんか古い気がするけど直した方がいい？',
          'ちょっとだけ文章を直したい',
          'SEOって何？うちのお店に必要？',
          '他の業者に断られた・返事が来なかった',
        ];
        foreach ( $examples as $ex ) : ?>
          <li class="sc-examples__item">
            <span class="sc-examples__icon" aria-hidden="true">—</span>
            <span><?php echo esc_html( $ex ); ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- ③ 相談できること -->
  <section class="page-body page-body--surface">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— Topics</p>
      <p class="section-en">What We Can Talk About</p>
      <h2 class="section-ja">相談できること</h2>

      <ul class="sc-topics reveal">
        <?php
        $topics = [
          'Webサイトのこと全般',
          'SEO・MEO・集客のこと',
          '「これどうしたらいい？」という漠然とした悩み',
          'ちょっとした修正・診断',
          '他サービスへの繋ぎ相談',
        ];
        foreach ( $topics as $topic ) : ?>
          <li class="sc-topics__item"><?php echo esc_html( $topic ); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- ④ 相談の流れ -->
  <section class="process">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— Process</p>
      <p class="section-en">How It Works</p>
      <h2 class="section-ja">相談の流れ</h2>

      <div class="process-steps process-steps--3col">
        <?php
        $steps = [
          [ 'STEP 1', 'フォームから連絡', 'お名前・連絡先・相談内容をざっくり入力するだけ。' ],
          [ 'STEP 2', '日程調整',         'メールまたはLINEで日程をご連絡します。' ],
          [ 'STEP 3', 'オンラインまたは対面で相談', 'Zoom・Google Meet・対面（鳥取市内）に対応。相談後に無理な営業はしません。' ],
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

  <!-- ⑤ FAQ -->
  <section class="page-body page-body--surface">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— FAQ</p>
      <p class="section-en">FAQ</p>
      <h2 class="section-ja">よくある質問</h2>

      <div class="faq-list">
        <?php
        $faqs = [
          [ '相談だけで終わっても大丈夫ですか？',       'もちろんです。相談後に無理な営業は一切しません。' ],
          [ 'オンラインでも相談できますか？',            'はい。ZoomまたはGoogle Meetで対応します。' ],
          [ '相談時間はどれくらいですか？',              '30〜60分程度を目安にしています。' ],
          [ '相談後にすぐ契約しないといけませんか？',    'いいえ。ご検討いただく時間は十分にあります。' ],
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
        <a href="<?php echo esc_url( home_url('/service/meo') ); ?>" class="sv-related-card reveal" style="transition-delay:0.2s">
          <p class="sv-related-card__num">03</p>
          <p class="sv-related-card__name">MEO対策</p>
          <p class="sv-related-card__desc">Googleマップで地域のお客さんに見つけてもらう仕組みを作ります。</p>
          <span class="sv-related-card__link">詳しく見る →</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ⑥ ページ末尾CTA -->
  <section class="cta-banner">
    <div class="cta-banner__inner">
      <p class="cta-banner__eyebrow">Free Consultation</p>
      <h2 class="cta-banner__title cta-banner__title--ja">「これ聞いていいのかな」<br class="sp-br">そのくらいの話でも大丈夫です。</h2>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
        無料で相談してみる
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
          <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </a>
    </div>
  </section>

</main>
<?php get_footer(); ?>

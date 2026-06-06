<?php
/**
 * Template Name: Service - MEO対策
 * page-service-meo.php — Own. Theme
 */

add_filter( 'pre_get_document_title', function() {
	return 'MEO対策｜鳥取のSEO・Web制作はown.';
} );

add_action( 'wp_head', function() { ?>
<meta name="description" content="鳥取のMEO対策はown.。Googleビジネスプロフィールの最適化から継続運用まで一貫対応。初期5万円〜、継続2〜3万円／月。まずは無料相談。">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Googleビジネスプロフィールの登録がまだですが大丈夫ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。登録・申請から対応します。"
      }
    },
    {
      "@type": "Question",
      "name": "飲食店以外でも効果はありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。美容室・整骨院・工務店・士業など、地域集客が必要な業種すべてに有効です。"
      }
    },
    {
      "@type": "Question",
      "name": "口コミを増やすことはできますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "口コミの代行投稿はGoogleの規約上NGです。自然に口コミが集まる仕組みと対応方法をアドバイスします。"
      }
    },
    {
      "@type": "Question",
      "name": "効果が出るまでどれくらいかかりますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "最適化後1〜2ヶ月で表示回数の変化が出始めるケースが多いです。競合状況によって異なります。"
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
        <span>MEO対策</span>
      </nav>

      <p class="sv-fv__eyebrow">— 03 / MEO</p>

      <h1 class="sv-fv__title">あなたのお店、Googleマップに出ていますか？</h1>

      <p class="sv-fv__sub">Googleマップ・ビジネスプロフィールを最適化して、地域のお客さんに見つけてもらえる仕組みをつくります。</p>

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
          'Googleマップで競合店は出るのに、自分のお店が出てこない',
          'Googleビジネスプロフィールを登録したけど、放置したまま',
          '口コミが少なくて、新規のお客さんに信頼してもらえない',
          '来店のきっかけがいつも「知人の紹介」だけになっている',
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
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><rect x="6" y="6" width="28" height="28" rx="3" stroke="#1a1a1a" stroke-width="1.5"/><path d="M13 20l5 5 9-10" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'num'  => '01',
            'name' => 'GBPの最適化',
            'desc' => '営業時間・写真・カテゴリ・説明文を正しく整備。Googleに正確な情報を伝える状態をつくります。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><circle cx="18" cy="18" r="11" stroke="#1a1a1a" stroke-width="1.5"/><path d="M26 26l6 6" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/><path d="M14 18h8M18 14v8" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'  => '02',
            'name' => 'キーワード設計',
            'desc' => '「地域名＋業種」で上位表示されるよう、狙うキーワードを競合と検索量をもとに設計します。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M20 8c-5 0-9 4-9 9 0 3 1.5 5.5 4 7.5V28h10v-3.5c2.5-2 4-4.5 4-7.5 0-5-4-9-9-9z" stroke="#1a1a1a" stroke-width="1.5"/><path d="M16 28h8" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/><path d="M18 34h4" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'  => '03',
            'name' => '口コミ獲得の仕組み',
            'desc' => '自然に口コミが増える導線づくりと、もらったときの返信方法をアドバイス。信頼を積み上げます。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M8 30V20M16 30V14M24 30V18M32 30V10" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'  => '04',
            'name' => '月次レポート',
            'desc' => '表示回数・クリック数・経路検索数を毎月確認・共有。数字を見ながら次の改善につなげます。',
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
            'title' => 'SEOと組み合わせて相乗効果を出せる',
            'desc'  => 'MEO単体より、サイトのSEOと合わせることでGoogleからの信頼が高まり、上位表示が安定しやすくなる。',
          ],
          [
            'num'   => '02',
            'title' => '鳥取の地域特性を知っている',
            'desc'  => '都市部と違い、鳥取は競合が少ない分、正しく対策すれば比較的早く効果が出やすい。',
          ],
          [
            'num'   => '03',
            'title' => '初期設定から運用まで一貫対応',
            'desc'  => '「登録はしたけど放置」が一番もったいない。設定・投稿・レポートまでまるごとサポートします。',
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

      <div class="price-grid price-grid--2col reveal">

        <div class="price-card">
          <h3 class="price-card__name">初期設定</h3>
          <p class="price-card__concept">まず、正しく見つけてもらえる状態に。</p>
          <p class="price-card__price">5<span style="font-size:1rem;font-weight:500;">万円〜</span></p>
          <p class="price-card__unit">税込 5.5万円〜 / 一括</p>
          <div class="price-card__divider"></div>
          <ul class="price-card__list">
            <li>Googleビジネスプロフィール診断・最適化</li>
            <li>キーワード設計</li>
            <li>写真・説明文の整備</li>
            <li>口コミ獲得アドバイス</li>
            <li>初月レポート</li>
          </ul>
        </div>

        <div class="price-card price-card--featured">
          <h3 class="price-card__name">継続運用</h3>
          <p class="price-card__concept" style="color:rgba(255,255,255,0.6);">育てながら、上位を維持する。</p>
          <p class="price-card__price">2<span style="font-size:1rem;font-weight:500;">万円 / 月</span></p>
          <p class="price-card__unit">税込 2.2万円 / 月</p>
          <div class="price-card__divider"></div>
          <ul class="price-card__list">
            <li>定期投稿（月2〜4回）</li>
            <li>口コミ返信サポート</li>
            <li>月次レポート（表示回数・クリック数・経路検索数）</li>
            <li>改善提案</li>
          </ul>
        </div>

      </div>

      <div class="price-note reveal">
        <p>※ 内容・規模によって変動します。まずはご相談ください。</p>
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
          [ 'STEP 1', '無料相談・現状確認',   '現在のGBP状況・目標・競合をヒアリング。' ],
          [ 'STEP 2', '診断・提案',            '現状のプロフィールを診断し、改善箇所を提案。' ],
          [ 'STEP 3', '最適化・設定',          'プロフィール・写真・テキストを整備して公開。' ],
          [ 'STEP 4', 'レポート・継続改善',    '表示回数・クリック数を確認しながら継続改善。' ],
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
            'Googleビジネスプロフィールの登録がまだですが大丈夫ですか？',
            'はい。登録・申請から対応します。',
          ],
          [
            '飲食店以外でも効果はありますか？',
            'はい。美容室・整骨院・工務店・士業など、地域集客が必要な業種すべてに有効です。',
          ],
          [
            '口コミを増やすことはできますか？',
            '口コミの代行投稿はGoogleの規約上NGです。自然に口コミが集まる仕組みと対応方法をアドバイスします。',
          ],
          [
            '効果が出るまでどれくらいかかりますか？',
            '最適化後1〜2ヶ月で表示回数の変化が出始めるケースが多いです。競合状況によって異なります。',
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
      <p class="cta-banner__eyebrow">MEO</p>
      <h2 class="cta-banner__title cta-banner__title--ja">まずはあなたのGoogleマップを一緒に見てみませんか。</h2>
      <p class="cta-banner__text">
        現状のGoogleビジネスプロフィールをざっと確認してお伝えします。<br>初回相談は無料です。
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

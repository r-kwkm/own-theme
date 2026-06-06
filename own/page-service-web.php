<?php
/**
 * Template Name: Service - Web制作
 * page-service-web.php — Own. Theme
 */

add_filter( 'pre_get_document_title', function() {
	return 'Web制作｜鳥取のSEO・Web制作はown.';
} );

add_action( 'wp_head', function() { ?>
<meta name="description" content="鳥取でSEO設計込みのWordPressサイト制作ならown.。ターゲット設計から構築・公開後サポートまで一貫対応。まずは無料相談。">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "制作期間はどれくらいですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ミニマムで2〜3週間、スモールで3〜5週間、スタンダードで5〜8週間が目安です。内容によって変わるためまずご相談ください。"
      }
    },
    {
      "@type": "Question",
      "name": "WordPressの操作が不安なのですが。",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "公開後に操作方法のレクチャーを行います。慣れるまでの更新サポートも別途対応可能です。"
      }
    },
    {
      "@type": "Question",
      "name": "写真や文章は自分で用意が必要ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "基本はご用意いただきますが、文章制作はオプションで対応可能です。写真はフリー素材での代替もご提案できます。"
      }
    },
    {
      "@type": "Question",
      "name": "既存サイトのリニューアルも対応できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。現状サイトの診断から入り、改善提案を含めてご対応します。"
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
        <span>Web制作</span>
      </nav>

      <p class="sv-fv__eyebrow">— 01 / Web Design</p>

      <h1 class="sv-fv__title">集客まで設計されたWebサイトを鳥取で。</h1>

      <p class="sv-fv__sub">デザインだけじゃなく、作った後に検索で見つけてもらえるサイトをまるごと制作します。</p>

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
          'ホームページを作ったけど、問い合わせが来ない',
          '業者に頼んだら高かった割に、検索で全然出てこない',
          '自分で作ろうとしたが、何から手をつければいいか分からない',
          '今のサイト、スマホで見るとぐちゃぐちゃになっている',
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
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><circle cx="20" cy="15" r="6" stroke="#1a1a1a" stroke-width="1.5"/><path d="M8 34c0-6.627 5.373-12 12-12s12 5.373 12 12" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'  => '01',
            'name' => 'ターゲット・キーワードの整理',
            'desc' => '「誰に」「何を伝えたいか」を言語化。集客につながるキーワードを一緒に選定します。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><rect x="6" y="6" width="28" height="28" rx="2" stroke="#1a1a1a" stroke-width="1.5"/><path d="M12 14h16M12 20h10M12 26h12" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'  => '02',
            'name' => 'SEO設計込みのサイト構成',
            'desc' => '検索エンジンに評価される構成・内部リンク・メタ設定まで、最初から設計に組み込みます。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><rect x="4" y="8" width="32" height="22" rx="2" stroke="#1a1a1a" stroke-width="1.5"/><path d="M14 34h12M20 30v4" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'  => '03',
            'name' => 'WordPressでのデザイン・構築',
            'desc' => 'スマホ完全対応・お問い合わせフォーム設置・GA/Search Console設定まで一貫対応。',
          ],
          [
            'icon' => '<svg viewBox="0 0 40 40" fill="none"><path d="M20 6L8 12v10c0 7 5.5 13 12 14 6.5-1 12-7 12-14V12L20 6z" stroke="#1a1a1a" stroke-width="1.5" stroke-linejoin="round"/><path d="M14 20l4 4 8-8" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'num'  => '04',
            'name' => '公開後のサポート',
            'desc' => '操作レクチャー・更新サポート・データ確認まで。公開で終わりじゃなく、育てる伴走をします。',
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
            'title' => 'SEOとWeb制作を同一人物が担当',
            'desc'  => 'デザインと集客の両方を理解した上でサイトを設計。「作ったけど誰にも見てもらえない」を防ぎます。',
          ],
          [
            'num'   => '02',
            'title' => '鳥取の地域事情を知っている',
            'desc'  => '地元在住だから、地域のキーワード・競合・ユーザー行動の肌感があります。遠くの制作会社とは違う提案ができます。',
          ],
          [
            'num'   => '03',
            'title' => '制作後も動ける体制',
            'desc'  => '公開後の保守・更新・SEO改善まで一貫して対応。担当者が変わらないので、毎回説明し直す必要がありません。',
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

  <!-- ⑤ 料金プラン -->
  <section class="page-body">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— Pricing</p>
      <p class="section-en">Plans &amp; Pricing</p>
      <h2 class="section-ja">料金プラン</h2>

      <div class="price-grid reveal">

        <div class="price-card">
          <h3 class="price-card__name">ミニマムサイト</h3>
          <p class="price-card__concept">まず、URLを持つところから。</p>
          <p class="price-card__price">15<span style="font-size:1rem;font-weight:500;">万円〜</span></p>
          <p class="price-card__unit">税込 16.5万円〜 / 一括</p>
          <div class="price-card__divider"></div>
          <ul class="price-card__list">
            <li>ヒアリング：現状と目的を簡単に確認</li>
            <li>ページ数：3〜4ページ（トップ・サービス・プロフィール・問い合わせ）</li>
            <li>WordPress構築</li>
            <li>レスポンシブ対応</li>
            <li>お問い合わせフォーム設置</li>
            <li class="price-card__list-note">※ SEO設定・GA設定・公開後サポートなし</li>
          </ul>
          <p style="font-size:0.8rem;color:var(--muted);">「とりあえず名刺代わりのサイトが欲しい」方向け</p>
        </div>

        <div class="price-card">
          <h3 class="price-card__name">スモールサイト</h3>
          <p class="price-card__concept">まず、ちゃんと存在するサイトを。</p>
          <p class="price-card__price">30<span style="font-size:1rem;font-weight:500;">万円〜</span></p>
          <p class="price-card__unit">税込 33万円〜 / 一括</p>
          <div class="price-card__divider"></div>
          <ul class="price-card__list">
            <li>ヒアリング：現状・要望をシンプルに確認</li>
            <li>ページ数：5〜8ページ程度</li>
            <li>WordPress構築</li>
            <li>レスポンシブ対応</li>
            <li>基本SEO設定（検索に拾われる状態で納品）</li>
            <li>お問い合わせフォーム設置</li>
            <li>Googleアナリティクス＋サーチコンソール設定</li>
            <li class="price-card__list-note">※ ブログ機能・公開後サポートなし</li>
          </ul>
          <p style="font-size:0.8rem;color:var(--muted);">個人事業主・小規模店舗向け</p>
        </div>

        <div class="price-card price-card--featured">
          <p class="price-card__badge">Most Popular</p>
          <h3 class="price-card__name">スタンダードサイト</h3>
          <p class="price-card__concept" style="color:rgba(255,255,255,0.6);">狙ったキーワードで、上位を取りにいく。</p>
          <p class="price-card__price">50<span style="font-size:1rem;font-weight:500;">万円〜</span></p>
          <p class="price-card__unit">税込 55万円〜 / 一括</p>
          <div class="price-card__divider"></div>
          <ul class="price-card__list">
            <li>ヒアリング：事業目標・ターゲット設計から一緒に考える</li>
            <li>ページ数：10〜15ページ程度</li>
            <li>WordPress構築</li>
            <li>レスポンシブ対応</li>
            <li>キーワード選定・競合分析・SEO設計込み</li>
            <li>ブログ機能実装（継続SEOの仕組みづくり）</li>
            <li>Googleアナリティクス＋サーチコンソール設定</li>
            <li>公開後1ヶ月サポート</li>
          </ul>
          <p style="font-size:0.8rem;color:rgba(255,255,255,0.35);">中小企業・法人向け</p>
        </div>

      </div>

      <div class="price-note reveal">
        <p><strong>※ 表示価格はすべて税抜きの目安価格です。</strong>サイト規模・機能・ページ数・デザインの複雑さによって変動します。</p>
        <p>※ ご予算に応じた柔軟なご提案が可能です。まずはお気軽にご相談ください。</p>
        <p>※ お支払いは銀行振込。制作費は着手時50%、納品時50%のご請求となります。</p>
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
          [ 'STEP 1', '無料相談（オンライン or 対面）', '現状・課題・ご要望をヒアリング。方向性をすり合わせます。' ],
          [ 'STEP 2', '提案・お見積もり',                '構成案とお見積もりをご提示。納得いただいてから進めます。' ],
          [ 'STEP 3', '制作',                            'デザイン確認→修正→構築の流れで進行。都度共有します。' ],
          [ 'STEP 4', '公開・引き渡し',                  'テスト確認後に公開。操作レクチャーも対応します。' ],
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
            '制作期間はどれくらいですか？',
            'ミニマムで2〜3週間、スモールで3〜5週間、スタンダードで5〜8週間が目安です。内容によって変わるためまずご相談ください。',
          ],
          [
            'WordPressの操作が不安なのですが。',
            '公開後に操作方法のレクチャーを行います。慣れるまでの更新サポートも別途対応可能です。',
          ],
          [
            '写真や文章は自分で用意が必要ですか？',
            '基本はご用意いただきますが、文章制作はオプションで対応可能です。写真はフリー素材での代替もご提案できます。',
          ],
          [
            '既存サイトのリニューアルも対応できますか？',
            'はい。現状サイトの診断から入り、改善提案を含めてご対応します。',
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
        <a href="<?php echo esc_url( home_url('/service/seo') ); ?>" class="sv-related-card reveal" style="transition-delay:0s">
          <p class="sv-related-card__num">02</p>
          <p class="sv-related-card__name">SEO対策</p>
          <p class="sv-related-card__desc">作ったサイトをGoogleで上位に。継続的な集客の仕組みを構築します。</p>
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
      <p class="cta-banner__eyebrow">Web Design</p>
      <h2 class="cta-banner__title cta-banner__title--ja">あなたのお店に合ったサイトを一緒に考えます。</h2>
      <p class="cta-banner__text">
        どんなイメージでも大丈夫です。<br>ふんわりした段階から一緒に整理します。初回相談は無料。
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

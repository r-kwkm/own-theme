<?php
/**
 * Template Name: FAQ Page
 * page-faq.php — Own. Theme
 */
get_header(); ?>

<main id="main">

  <!-- Page Header -->
  <div class="page-hero">
    <div style="max-width:1200px;margin-inline:auto;">
      <nav class="page-hero__breadcrumb" aria-label="パンくずリスト">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span>/</span>
        <span>FAQ</span>
      </nav>
      <p class="page-hero__num">— FAQ</p>
      <h1 class="page-hero__en">Frequently Asked.</h1>
      <p class="page-hero__ja">よくある質問</p>
      <p class="page-hero__lead">
        鳥取でWeb制作・SEO対策をご検討の方からよくいただく質問をまとめました。<br>
        解決しない場合はお気軽にお問い合わせください。
      </p>
    </div>
  </div>

  <!-- FAQ Categories -->
  <section class="page-body">
    <div style="max-width:860px;margin-inline:auto;">

      <?php
      $faq_categories = [
        [
          'label' => '01 / Pricing',
          'title' => '料金について',
          'items' => [
            ['鳥取でホームページ制作を依頼すると費用はどのくらいかかりますか？',
             'スモールサイト（5〜8ページ）で30万円〜が目安です。ページ数・デザインの複雑さ・機能によって変動します。まずはご要望をお聞きして無料でお見積りします。'],
            ['予算が少ないのですが、相談できますか？',
             'もちろんです。「〇〇万円でできることを教えてほしい」といったご相談も大歓迎です。予算内で最大の効果を出せるプランをご提案します。'],
            ['月額費用はかかりますか？',
             'Web制作のみであれば制作費のみです。保守プラン（月3万円〜）・SEO対策（月5万円〜）は任意のオプションです。'],
            ['分割払いはできますか？',
             '基本は着手時50%・納品時50%の2回払いです。それ以外のご要望もお気軽にご相談ください。'],
            ['見積もりだけお願いすることはできますか？',
             'できます。お見積りは無料です。お問い合わせフォームよりご連絡ください。'],
          ],
        ],
        [
          'label' => '02 / Production',
          'title' => '制作・SEOについて',
          'items' => [
            ['鳥取の小さな会社・個人事業主でもホームページは必要ですか？',
             '必要です。鳥取・米子・倉吉エリアでも「地名＋業種」での検索は日常的に行われています。Googleマップ（MEO）と合わせて整備することで、地域のお客さんに見つけてもらいやすくなります。'],
            ['WordPressでサイトを作ってもらえますか？',
             'はい。own.ではWordPressを基本として制作しています。公開後にご自身で更新・投稿できる環境を整えます。'],
            ['制作期間はどのくらいかかりますか？',
             '基本的に1〜2ヶ月が目安です。ご要望・ヒアリング内容・修正回数によって前後します。なお、案件が重なった場合は受注順にて対応いたします。お申し込みのタイミングによってはお待ちいただく場合がございますので、お早めにご相談ください。'],
            ['SEO対策をお願いすると、すぐに検索上位に表示されますか？',
             'SEO対策の効果が出るまでには一般的に3〜6ヶ月かかります。地道な改善を継続することで、安定した集客が実現できます。'],
            ['MEO対策とSEO対策はどう違いますか？',
             'SEOはGoogleの検索結果（通常の検索）で上位表示を狙う施策です。MEOはGoogleマップ上での表示順位を上げる施策です。地域密着型ビジネスには両方の対策が有効です。'],
            ['鳥取・米子・倉吉エリア以外の会社でもお願いできますか？',
             'もちろんです。リモートで全国対応しています。オンラインミーティング・メール・チャットで進めることができます。'],
          ],
        ],
        [
          'label' => '04 / Getting Started',
          'title' => 'はじめての方へ',
          'items' => [
            ['パソコンが苦手でも大丈夫ですか？',
             'はい、大丈夫です。難しい言葉は使わずにわかりやすくご説明します。'],
            ['何から相談すればいいかわからなくても大丈夫ですか？',
             'もちろんです。「なんとなく気になった」で十分です。'],
            ['まず話を聞くだけでも大丈夫ですか？',
             'はい、もちろんです。初回相談は無料です。お気軽にどうぞ。'],
          ],
        ],
        [
          'label' => '03 / Support',
          'title' => 'サポート・その他について',
          'items' => [
            ['公開後のサポートはありますか？',
             'スタンダードプランには公開後1ヶ月のサポートが含まれます。継続的なサポートには保守プラン（月3万円〜）をご利用いただけます。'],
            ['自分でサイトを更新できるようになりますか？',
             'WordPressの基本操作はお伝えします。記事投稿・画像差し替えなど日常的な更新は自分で行えるようになります。'],
            ['飲食店・美容室・整骨院など業種に合わせた制作はできますか？',
             'できます。現在は保護猫団体のWebサイト制作・SEO設計の実績があります。飲食店・美容室・整骨院など、業種に合わせたキーワード選定・コンテンツ設計にも対応しています。'],
            ['相談は何度でも無料ですか？',
             'お問い合わせ後の初回ヒアリングは無料です。プロジェクトが進んでからのご相談は都度対応します。'],
            ['個人の方（フリーランス・副業）でも依頼できますか？',
             'もちろんです。個人の方も大歓迎です。規模に合わせた柔軟なプランをご提案します。'],
          ],
        ],
      ];

      foreach ( $faq_categories as $cat ) : ?>
        <div class="faq-category reveal">
          <p class="faq-category__label"><?php echo esc_html( $cat['label'] ); ?></p>
          <p style="font-family:var(--font-ja);font-size:1.1rem;font-weight:500;margin-bottom:1.5rem;color:var(--ink);"><?php echo esc_html( $cat['title'] ); ?></p>

          <div class="faq-list">
            <?php foreach ( $cat['items'] as $faq ) : ?>
              <div class="faq-item">
                <div class="faq-q" role="button" tabindex="0" aria-expanded="false">
                  <span class="faq-q__text"><?php echo esc_html( $faq[0] ); ?></span>
                  <span class="faq-q__icon" aria-hidden="true"></span>
                </div>
                <div class="faq-a">
                  <p class="faq-a__text"><?php echo esc_html( $faq[1] ); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </section>

  <!-- CTA -->
  <section class="cta-banner">
    <div class="cta-banner__inner">
      <p class="cta-banner__eyebrow">Contact</p>
      <h2 class="cta-banner__title">Let's Work<br>Together.</h2>
      <p class="cta-banner__text">
        解決しない疑問はお気軽にどうぞ。<br>
        鳥取のWeb制作・SEO対策、初回相談は無料です。
      </p>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
        無料相談をする
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
      </a>
    </div>
  </section>

</main>
<?php get_footer(); ?>

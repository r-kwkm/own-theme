<?php
/**
 * Template Name: Services Page
 * page-service.php — Own. Theme
 */
get_header(); ?>

<main id="main">

  <!-- Page Header -->
  <div class="page-hero">
    <div style="max-width:1200px;margin-inline:auto;">
      <nav class="page-hero__breadcrumb" aria-label="パンくずリスト">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span>/</span>
        <span>Services</span>
      </nav>
      <p class="page-hero__num">— 02 / Services</p>
      <h1 class="page-hero__en">What We Do.</h1>
      <p class="page-hero__ja">提供サービス</p>
      <p class="page-hero__lead">
        Web制作からSEO・MEO・保守まで、ビジネスのオンライン展開を一貫してサポート。<br>
        鳥取在住だから、対面相談もリモートも対応可能です。
      </p>
    </div>
  </div>

  <!-- Services Detail -->
  <section class="page-body">
    <div style="max-width:1200px;margin-inline:auto;">

      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--border);border:1px solid var(--border);">

        <?php
        $services = [
          [
            'icon'  => '<svg viewBox="0 0 40 40" fill="none"><rect x="4" y="8" width="32" height="22" rx="2" stroke="#1a1a1a" stroke-width="1.5"/><path d="M14 34h12M20 30v4" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'   => '01',
            'name'  => 'Web制作',
            'desc'  => '集客できるWordPressサイトをSEO設計込みで制作。ターゲット・目的・キーワードを整理した上でデザイン・構築。公開後の運用まで見据えたサイト設計を行います。',
            'for'   => ['新規でホームページを作りたい方', 'リニューアルを検討している方', '自分で更新できるサイトが欲しい方'],
            'price' => '30万円〜',
          ],
          [
            'icon'  => '<svg viewBox="0 0 40 40" fill="none"><circle cx="18" cy="18" r="11" stroke="#1a1a1a" stroke-width="1.5"/><path d="M26 26l6 6" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'   => '02',
            'name'  => 'SEO対策',
            'desc'  => 'サイト診断・キーワード選定・内部対策・コンテンツ改善・月次レポートまで。Googleで上位に出るための仕組みを、地道に・確実に構築します。',
            'for'   => ['Googleからの流入を増やしたい方', '既存サイトを活かして集客したい方', 'ブログ・コンテンツを強化したい方'],
            'price' => '5万円〜 / 月',
          ],
          [
            'icon'  => '<svg viewBox="0 0 40 40" fill="none"><path d="M20 8C14 8 9 13 9 19c0 4 2 7.5 5 9.5V32h12v-3.5c3-2 5-5.5 5-9.5 0-6-5-11-11-11z" stroke="#1a1a1a" stroke-width="1.5"/><path d="M14 32h12" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'   => '03',
            'name'  => 'MEO対策',
            'desc'  => 'Googleマップ・Googleビジネスプロフィールの最適化で、地域のお客さんに見つけてもらう仕組みを作ります。',
            'for'   => ['飲食店・美容室など地域密着の店舗', '「地名＋業種」で検索上位を狙いたい方', 'Googleマップの口コミを増やしたい方'],
            'price' => '5万円〜',
          ],
          [
            'icon'  => '<svg viewBox="0 0 40 40" fill="none"><path d="M20 6L8 12v10c0 7 5.5 13 12 14 6.5-1 12-7 12-14V12L20 6z" stroke="#1a1a1a" stroke-width="1.5" stroke-linejoin="round"/><path d="M14 20l4 4 8-8" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'num'   => '04',
            'name'  => '保守・顧問',
            'desc'  => 'サイトのプラグイン更新・バックアップ・セキュリティ対策・文章修正など、運用まわりを丸ごとお任せいただけます。',
            'for'   => ['サイトの管理が手間に感じている方', '定期的な更新をお願いしたい方', 'トラブル時にすぐ相談できる人が欲しい方'],
            'price' => '3万円 / 月',
          ],
          [
            'icon'  => '<svg viewBox="0 0 40 40" fill="none"><path d="M8 10h24M8 16h18M8 22h20M8 28h14" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'   => '05',
            'name'  => 'コンテンツ制作',
            'desc'  => '検索意図を踏まえた構成・執筆・入稿まで一貫対応。SEOに効くブログ記事で、長期的に集客できるコンテンツ資産を積み上げます。',
            'for'   => ['ブログを書く時間がない方', 'どんな記事を書けばいいかわからない方', 'コンテンツSEOで流入を増やしたい方'],
            'price' => '3万円 / 本',
          ],
          [
            'icon'  => '<svg viewBox="0 0 40 40" fill="none"><rect x="8" y="12" width="24" height="18" rx="2" stroke="#1a1a1a" stroke-width="1.5"/><path d="M14 20h12M14 25h8M20 8v4" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round"/></svg>',
            'num'   => '06',
            'name'  => 'お気軽相談',
            'desc'  => '「Googleで出てこない」「ちょっとだけ文章を直したい」「何から始めればいいかわからない」—— そんな小さな悩みでも、まずお気軽にどうぞ。',
            'for'   => ['何をすればいいか迷っている方', 'ちょっとした修正をお願いしたい方', 'まず話を聞いてほしい方'],
            'price' => '初回相談 無料',
          ],
        ];

        foreach ( $services as $i => $svc ) :
          $delay = $i * 0.1;
        ?>
          <div class="service-detail-card reveal" style="transition-delay:<?php echo $delay; ?>s">
            <div class="service-detail-card__icon"><?php echo $svc['icon']; ?></div>
            <p class="service-detail-card__num"><?php echo esc_html( $svc['num'] ); ?></p>
            <p class="service-detail-card__name"><?php echo esc_html( $svc['name'] ); ?></p>
            <p class="service-detail-card__desc"><?php echo esc_html( $svc['desc'] ); ?></p>

            <div class="service-detail-card__for">
              <p class="service-detail-card__for-label">こんな方におすすめ</p>
              <ul class="service-detail-card__for-list">
                <?php foreach ( $svc['for'] as $item ) : ?>
                  <li><?php echo esc_html( $item ); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>

            <p class="service-detail-card__price"><?php echo esc_html( $svc['price'] ); ?></p>
          </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section>

  <!-- Process (same as index) -->
  <section class="process">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— Process</p>
      <p class="section-en">How It Works</p>
      <p class="section-ja">進め方</p>
      <div class="process-steps">
        <?php
        $steps = [
          ['Step 01', "ヒアリング・現状確認",    '事業の課題・目標・現状をヒアリング。どんな些細な悩みでもお聞きします。'],
          ['Step 02', "戦略策定・提案",           'サイト構成・キーワード・デザインの方向性をまとめてご提案します。'],
          ['Step 03', "制作・実装",               'デザイン・開発・SEO施策を並行して進め、スピーディーに納品します。'],
          ['Step 04', "公開後の継続サポート",     '公開後もデータを見ながら継続改善。成果が出るまでしっかり伴走します。'],
        ];
        foreach ( $steps as $i => [$num, $title, $desc] ) : ?>
          <div class="process-step reveal" style="transition-delay:<?php echo $i * 0.1; ?>s">
            <p class="step-num"><?php echo esc_html( $num ); ?></p>
            <h3 class="step-title"><?php echo nl2br( esc_html( $title ) ); ?></h3>
            <p class="step-desc"><?php echo esc_html( $desc ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-banner">
    <div class="cta-banner__inner">
      <p class="cta-banner__eyebrow">Contact</p>
      <h2 class="cta-banner__title">Let's Work<br>Together.</h2>
      <p class="cta-banner__text">
        まずはお気軽にご相談ください。<br>初回相談は無料です。
      </p>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
        無料相談をする
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
      </a>
    </div>
  </section>

</main>
<?php get_footer(); ?>

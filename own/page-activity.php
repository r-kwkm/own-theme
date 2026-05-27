<?php
/**
 * Template Name: Activity Page
 * page-activity.php — Own. Theme
 */
get_header(); ?>

<main id="main">

  <!-- Page Header -->
  <div class="page-hero">
    <div style="max-width:1200px;margin-inline:auto;">
      <nav class="page-hero__breadcrumb" aria-label="パンくずリスト">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span>/</span>
        <span>Activity</span>
      </nav>
      <p class="page-hero__num">— Activity</p>
      <p class="page-hero__en">Social Activity.</p>
      <h1 class="page-hero__ja">社会への取り組み｜鳥取の保護猫活動サポート</h1>
      <p class="page-hero__lead">
        own. は事業活動を通じて、地域社会・動物福祉に貢献することを大切にしています。<br>
        小さな行動でも、続けることで社会は変えられると信じています。
      </p>
    </div>
  </div>

  <!-- Activity Main -->
  <section class="page-body">
    <div style="max-width:1200px;margin-inline:auto;">

      <!-- 保護猫活動 -->
      <div class="activity-section reveal" style="margin-bottom:1.5rem;">

        <div class="activity-card">
          <span class="activity-card__tag">Animal Welfare</span>
          <h2 class="activity-card__title">保護猫活動のサポート</h2>
          <p class="activity-card__text">
            own. は、鳥取県内で保護猫の譲渡活動・TNR活動を行う「ohana」を支援しています。<br>
            Webサイトの制作・SEO設計を通じて、一頭でも多くの猫が家族のもとへ届くよう、Webの力で活動を後押ししています。
          </p>
          <a href="https://ohana-hogoneko.jp/" class="activity-card__link" target="_blank" rel="noopener noreferrer">
            保護猫サイトを見る
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
              <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
            </svg>
          </a>
        </div>

        <div class="activity-img" style="min-height:320px;">
          <img src="https://ownweb.jp/wp-content/uploads/2026/05/FireShot-Capture-030-保護猫Ohana-ohana-hogoneko.jp_-scaled.png" alt="保護猫活動の様子" style="width:100%;height:100%;object-fit:cover;">
        </div>

      </div>

      <!-- 地域貢献 -->
      <div class="activity-card reveal" style="border:1px solid var(--border);">
        <span class="activity-card__tag">Local Community</span>
        <h3 class="activity-card__title">地域の価値を、Webで可視化する</h3>
        <p class="activity-card__text">
          鳥取には、まだ誰にも知られていない価値がある。<br>
          own. はWebの力で、地域に埋もれた事業者の魅力を引き出し、必要な人に届ける仕組みを作ります。
        </p>
      </div>

    </div>
  </section>

  <!-- Message Section (dark) -->
  <section class="about-concept">
    <div style="max-width:1200px;margin-inline:auto;">
      <div class="reveal">
        <p class="section-num" style="color:var(--accent);">— Message</p>
        <h2 class="about-concept__title" style="font-size:clamp(1.75rem,3.5vw,3rem);">
          ビジネスの力で、<br>
          <span>小さな命を守る。</span>
        </h2>
        <div class="about-concept__text">
          <p>own. という名前には「自分のものにする」という意味があります。</p>
          <p>自分のビジネスを、自分の生き方を、そして社会をーー少しずつ自分たちのものにしていきたい。</p>
          <p>Webの仕事を通じて得た収益の一部を、保護猫活動への支援に充てています。売上が上がれば、それだけ多くの猫を助けられる。そんな循環を作ることが、own.の目標のひとつです。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-banner">
    <div class="cta-banner__inner">
      <p class="cta-banner__eyebrow">Contact</p>
      <h2 class="cta-banner__title">Let's Work<br>Together.</h2>
      <p class="cta-banner__text">
        own. と一緒に、地域とWebの可能性を広げませんか。<br>
        初回相談は無料です。
      </p>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
        無料相談をする
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
      </a>
    </div>
  </section>

</main>
<?php get_footer(); ?>

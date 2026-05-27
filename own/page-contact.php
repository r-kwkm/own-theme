<?php
/**
 * Template Name: Contact Page
 * page-contact.php — Own. Theme
 */
get_header(); ?>

<main id="main">

  <!-- Page Header -->
  <div class="page-hero">
    <div style="max-width:1200px;margin-inline:auto;">
      <nav class="page-hero__breadcrumb" aria-label="パンくずリスト">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span>/</span>
        <span>Contact</span>
      </nav>
      <p class="page-hero__num">— Contact</p>
      <h1 class="page-hero__en">Get in Touch.</h1>
      <p class="page-hero__ja">お問い合わせ</p>
      <p class="page-hero__lead">
        お気軽にご相談ください。個人の方も大歓迎です。<br>
        初回相談は無料。通常1〜2営業日以内にご返信します。
      </p>
    </div>
  </div>

  <!-- Contact Grid -->
  <section class="page-body">
    <div style="max-width:1200px;margin-inline:auto;">
      <div class="contact-grid">

        <!-- Info -->
        <div class="reveal">
          <p class="section-num" style="margin-bottom:2rem;">— Info</p>

          <div class="contact-info__item">
            <div class="contact-info__icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-dark)" stroke-width="1.5" aria-hidden="true">
                <rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7" stroke-linecap="round"/>
              </svg>
            </div>
            <div>
              <p class="contact-info__label">Response Time</p>
              <p class="contact-info__value">通常1〜2営業日以内にご返信</p>
            </div>
          </div>

          <div class="contact-info__item" style="margin-top:1px;">
            <div class="contact-info__icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-dark)" stroke-width="1.5" aria-hidden="true">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/>
              </svg>
            </div>
            <div>
              <p class="contact-info__label">Location</p>
              <p class="contact-info__value">鳥取県（全国リモート対応可）</p>
            </div>
          </div>

          <div class="contact-info__item" style="margin-top:1px;">
            <div class="contact-info__icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-dark)" stroke-width="1.5" aria-hidden="true">
                <circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2" stroke-linecap="round"/>
              </svg>
            </div>
            <div>
              <p class="contact-info__label">Consultation</p>
              <p class="contact-info__value">初回相談 無料</p>
            </div>
          </div>

          <div class="contact-info__item" style="margin-top:1px;">
            <div class="contact-info__icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-dark)" stroke-width="1.5" aria-hidden="true">
                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
              </svg>
            </div>
            <div>
              <p class="contact-info__label">Who can apply</p>
              <p class="contact-info__value">法人・個人事業主・個人、どなたでも</p>
            </div>
          </div>

          <div style="margin-top:2.5rem;padding:1.5rem;background:var(--surface);border:1px solid var(--border);">
            <p style="font-family:var(--font-en);font-size:0.65rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--accent-dark);margin-bottom:0.75rem;">Note</p>
            <p style="font-size:0.83rem;color:var(--muted);line-height:1.85;">「ちょっと聞きたいだけ」「まだ発注は決めていない」といったご相談でも構いません。気軽にどうぞ。</p>
          </div>
        </div>

        <!-- Form -->
        <div class="reveal" style="transition-delay:0.15s">
          <div class="cf7-wrapper">
            <?php echo do_shortcode('[contact-form-7 id="524a678" title="コンタクトフォーム 1"]'); ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Trouble reminder -->
  <section class="trouble" style="padding:6rem 3rem;">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num">— こんなお悩みも</p>
      <p class="section-en">Any of these?</p>
      <p class="section-ja">こんな相談でも大丈夫</p>
      <div class="pain-grid">
        <?php
        $troubles = [
          [ 'voice' => '「Googleでお店が出てこない」',          'solve' => '地図にも検索にも、ちゃんと出るようにします' ],
          [ 'voice' => '「ホームページあるけど何もわからない」', 'solve' => '今あるものを活かして、小さく始めて大丈夫です' ],
          [ 'voice' => '「文章をちょっとだけ直したい」',        'solve' => '小さな修正も、お気軽にご相談ください' ],
          [ 'voice' => '「Web周りを誰かに任せたい」',           'solve' => '窓口ひとつで、まるっとお任せください' ],
        ];
        foreach ( $troubles as $i => $t ) : ?>
          <div class="pain-card reveal" style="transition-delay:<?php echo $i * 0.08; ?>s">
            <p class="pain-voice"><?php echo esc_html( $t['voice'] ); ?></p>
            <p class="pain-solve">→ <?php echo esc_html( $t['solve'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>

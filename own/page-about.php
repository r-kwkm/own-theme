<?php
/**
 * Template Name: About Page
 * page-about.php — Own. Theme
 */
get_header(); ?>

<main id="main">

  <!-- Page Header -->
  <div class="page-hero">
    <div style="max-width:1200px;margin-inline:auto;">
      <nav class="page-hero__breadcrumb" aria-label="パンくずリスト">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span>/</span>
        <span>About</span>
      </nav>
      <p class="page-hero__num">— About</p>
      <p class="page-hero__en">About Own.</p>
      <h1 class="page-hero__ja">鳥取在住のWeb制作者 川上凌について</h1>
      <p class="page-hero__lead">
        鳥取を拠点に、中小企業・個人事業主のWebを一貫サポート。<br>
        「作って終わり」じゃなく、育てるサイトをつくります。
      </p>
    </div>
  </div>

  <!-- Profile -->
  <section class="page-body">
    <div style="max-width:1200px;margin-inline:auto;">
      <div class="about-profile reveal">

        <div class="about-profile__img">
          <img src="https://ownweb.jp/wp-content/uploads/2026/05/ChatGPT-Image-2026年5月10日-19_51_39.png" alt="プロフィール写真" style="width:100%;height:100%;object-fit:cover;">
        </div>

        <div>
          <p class="about-profile__tag">Founder</p>
          <h2 class="about-profile__name">川上 凌</h2>
          <p class="about-profile__name-ja">Own. / 鳥取のWeb制作・SEO事業</p>
          <div class="about-profile__bio">
            <?php
            if ( have_posts() ) :
              while ( have_posts() ) : the_post();
                $content = get_the_content();
                if ( trim( $content ) ) :
                  the_content();
                else : ?>
                  <p>2000年生まれ、26歳。</p>
                  <p>東京の大手マーケティング会社にて、3年半にわたりSEO・コンテンツ制作・アクセス解析の実務を経験。2年前、鳥取の空気を吸いたくなり地元へ。</p>
                  <p>鳥取に戻ったあとも会社に属しながらWebマーケの仕事を続けるなか、保護猫活動に取り組む母の姿を見て「小さくても、確かに動いている人を応援したい」と感じ、Webサイト制作を手伝ったことがown.を始めたきっかけです。</p>
                  <p>「いいもの」が埋もれてしまう時代を終わりにしたい。Webが苦手な方でも、その情熱が正しく届く仕組みを一緒に作りたい。——そんな思いでWeb制作・SEO対策・MEO対策・サイト保守を一貫して提供しています。</p>
                  <p>得意なのは「集客につながるサイト作り」。デザインだけでなく、キーワード・構成・コンテンツまで含めた戦略的なWebサイトを提案します。会社やチームではなく、ひとりが担当することで窓口を一本化。打ち合わせから公開・運用まで、顔の見える関係でサポートします。</p>
                  <p>穏やかな性格なので、打ち合わせはリラックスした雰囲気で進めます。難しい言葉は使わず、一緒に考えながら進めるスタイルです。</p>
                  <p>Web制作にとどまらず、アパレルやカフェ、鳥取特化のメディアなど、own.をひとつの大きなブランドに育てていくことが目標です。</p>
                <?php
                endif;
              endwhile;
            endif; ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Concept (dark) -->
  <section class="about-concept">
    <div style="max-width:1200px;margin-inline:auto;">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;">

        <div class="reveal">
          <p class="section-num" style="color:var(--accent);">— Concept</p>
          <h2 class="about-concept__title">
            Own Your<br>
            <span>Digital</span><br>
            Future.
          </h2>
        </div>

        <div class="reveal" style="transition-delay:0.15s">
          <div class="about-concept__text">
            <p>「own」には「自分のものにする」という意味があります。</p>
            <p>Web・SEO・MEO——デジタルの力を、あなた自身のものにしてほしい。そんな思いをブランド名に込めました。</p>
            <p>鳥取の中小企業・個人事業主が、自分らしいオンライン集客を実現できるよう、伴走型でサポートします。</p>
            <p>制作して終わりではなく、「育てるサイト」を一緒につくりましょう。</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Why Own. (reasons reuse) -->
  <section class="reasons" style="padding:4rem 3rem;">
    <div style="max-width:1200px;margin-inline:auto;">
      <p class="section-num" style="color:var(--accent);">— Why own.</p>
      <p class="section-en" style="color:var(--muted);">Why Choose Us</p>
      <p class="section-ja" style="color:var(--white);">選ばれる理由</p>

      <div class="reasons-grid">
        <?php
        $reasons = [
          ['01', '鳥取在住だからすぐ会える', '地元在住だから話しかけやすく、対面での打ち合わせにも対応。鳥取・米子・倉吉、どのエリアでもご相談ください。'],
          ['02', '作って終わりじゃない', '公開後もSEO・MEO・保守まで一貫してサポート。データを見ながら継続的に改善します。'],
          ['03', '担当者がずっと同じ', '窓口はひとつ。担当者が変わらないから、毎回説明し直す必要がなく、信頼関係を築きやすい。'],
          ['04', '小さな悩みから大きな案件まで', '「ちょっと聞きたいだけ」でも大丈夫。個人の方もお気軽にどうぞ。'],
        ];
        foreach ( $reasons as $i => [$num, $title, $desc] ) : ?>
          <div class="reason-item reveal" style="transition-delay:<?php echo $i * 0.1; ?>s">
            <span class="reason-num"><?php echo esc_html( $num ); ?></span>
            <div>
              <p class="reason-title"><?php echo esc_html( $title ); ?></p>
              <p class="reason-desc"><?php echo esc_html( $desc ); ?></p>
            </div>
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
        Webのこと、SEOのこと、なんでもお気軽にご相談ください。<br>
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

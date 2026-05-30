<?php
/**
 * Template Name: Price Page
 * page-price.php — Own. Theme
 */
get_header(); ?>

<main id="main">

  <!-- Page Header -->
  <div class="page-hero">
    <div style="max-width:1200px;margin-inline:auto;">
      <nav class="page-hero__breadcrumb" aria-label="パンくずリスト">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span>/</span>
        <span>Price</span>
      </nav>
      <p class="page-hero__num">— Price</p>
      <p class="page-hero__en">Pricing.</p>
      <h1 class="page-hero__ja">鳥取のホームページ制作 料金・プラン</h1>
      <p class="page-hero__lead">
        わかりやすい料金体系を心がけています。<br>
        まずは無料相談で、ご予算・目的に合ったプランをご提案します。
      </p>
    </div>
  </div>

  <!-- Web制作 -->
  <section class="page-body">
    <div style="max-width:1200px;margin-inline:auto;">

      <div style="margin-bottom:4rem;">
        <p class="section-num">— 01</p>
        <p class="section-en">Web Design</p>
        <p class="section-ja" style="margin-bottom:2rem;">Webサイト制作</p>

        <div class="price-grid reveal">
          <div class="price-card">
            <p class="price-card__name">ミニマムサイト</p>
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
            <p class="price-card__name">スモールサイト</p>
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
            <p class="price-card__name">スタンダードサイト</p>
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
      </div>

      <!-- SEO / MEO -->
      <div style="margin-bottom:4rem;">
        <p class="section-num">— 02</p>
        <p class="section-en">SEO / MEO</p>
        <p class="section-ja" style="margin-bottom:2rem;">SEO・MEO対策</p>

        <div class="price-grid price-grid--2col reveal">
          <div class="price-card">
            <p class="price-card__name">SEO対策（月次）</p>
            <p class="price-card__price">5<span style="font-size:1rem;font-weight:500;">万円〜</span></p>
            <p class="price-card__unit">税込 5.5万円〜 / 月</p>
            <div class="price-card__divider"></div>
            <ul class="price-card__list">
              <li>サイト診断・現状レポート</li>
              <li>キーワード戦略策定</li>
              <li>内部SEO改善</li>
              <li>コンテンツ改善提案</li>
              <li>月次レポート提出</li>
              <li>最低契約期間：3ヶ月</li>
            </ul>
          </div>

          <div class="price-card">
            <p class="price-card__name">MEO対策（初期設定）</p>
            <p class="price-card__price">5<span style="font-size:1rem;font-weight:500;">万円〜</span></p>
            <p class="price-card__unit">税込 5.5万円〜 / 一括</p>
            <div class="price-card__divider"></div>
            <ul class="price-card__list">
              <li>Googleビジネスプロフィール最適化</li>
              <li>写真・情報の整備</li>
              <li>カテゴリ・属性の設定</li>
              <li>投稿・Q&A活用提案</li>
              <li>月次レポート（月額1万円〜）</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 保守・その他 -->
      <div style="margin-bottom:4rem;">
        <p class="section-num">— 03</p>
        <p class="section-en">Maintenance / Others</p>
        <p class="section-ja" style="margin-bottom:2rem;">保守・その他</p>

        <div class="price-grid reveal">
          <div class="price-card">
            <p class="price-card__name">保守・顧問プラン</p>
            <p class="price-card__price">3<span style="font-size:1rem;font-weight:500;">万円</span></p>
            <p class="price-card__unit">税込 3.3万円 / 月</p>
            <div class="price-card__divider"></div>
            <ul class="price-card__list">
              <li>プラグイン・テーマ更新</li>
              <li>定期バックアップ</li>
              <li>軽微な文章修正（月2回まで）</li>
              <li>セキュリティ監視</li>
            </ul>
          </div>

          <div class="price-card">
            <p class="price-card__name">コンテンツ制作</p>
            <p class="price-card__price">3<span style="font-size:1rem;font-weight:500;">万円〜</span></p>
            <p class="price-card__unit">税込 3.3万円〜 / 本</p>
            <div class="price-card__divider"></div>
            <ul class="price-card__list">
              <li>キーワード・構成提案</li>
              <li>SEOライティング</li>
              <li>WordPress入稿</li>
              <li>アイキャッチ画像設定</li>
              <li>文字数：2,000〜3,000字目安</li>
            </ul>
          </div>

          <div class="price-card">
            <p class="price-card__name">スポット相談・修正</p>
            <p class="price-card__price" style="font-size:1.5rem;">要相談</p>
            <p class="price-card__unit">お気軽にどうぞ</p>
            <div class="price-card__divider"></div>
            <ul class="price-card__list">
              <li>ちょっとした文章修正</li>
              <li>画像差し替え</li>
              <li>簡単な機能追加</li>
              <li>サイト診断のみ</li>
              <li>初回相談は無料</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Notes -->
      <div class="price-note reveal">
        <p><strong>※ 表示価格はすべて税抜きの目安価格です。</strong>サイト規模・機能・ページ数・デザインの複雑さによって変動します。</p>
        <p>※ ご予算に応じた柔軟なご提案が可能です。まずはお気軽にご相談ください。</p>
        <p>※ お支払いは銀行振込。制作費は着手時50%、納品時50%のご請求となります。</p>
      </div>

    </div>
  </section>

  <!-- FAQ（料金版） -->
  <section class="page-body page-body--surface">
    <div style="max-width:860px;margin-inline:auto;">
      <p class="section-num">— FAQ</p>
      <p class="section-en">Price FAQ</p>
      <p class="section-ja">料金についてのよくある質問</p>

      <div class="faq-list">
        <?php
        $faqs = [
          ['予算が少ないのですが相談できますか？', 'はい、もちろんです。予算に応じた最適なプランをご提案します。「まず○○万円で何ができるか知りたい」といったご相談も大歓迎です。'],
          ['見積もりをお願いしたい場合はどうすればいいですか？', 'お問い合わせフォームよりご連絡ください。ご要望・規模感をヒアリングした上で、無料でお見積りいたします。'],
          ['分割払いはできますか？', '基本的には着手時50%・納品時50%の2回払いです。それ以外のご希望がある場合はご相談ください。'],
          ['契約後にページ数が増えた場合はどうなりますか？', '追加ページ分は別途お見積りとなります。制作前にご要望をしっかりヒアリングしますので、想定外の追加費用が発生しにくい体制を整えています。'],
          ['月額費用を支払い続ければ、何でもしてもらえますか？', '保守プランでカバーできる範囲は限られています。大規模な改修や新機能追加は別途お見積りとなります。対応範囲は契約時に明確にお伝えします。'],
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

  <!-- CTA -->
  <section class="cta-banner">
    <div class="cta-banner__inner">
      <p class="cta-banner__eyebrow">Contact</p>
      <h2 class="cta-banner__title">Let's Work<br>Together.</h2>
      <p class="cta-banner__text">
        まずは無料相談から。<br>ご予算・ご要望をお聞かせください。
      </p>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
        無料相談をする
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
      </a>
    </div>
  </section>

</main>
<?php get_footer(); ?>

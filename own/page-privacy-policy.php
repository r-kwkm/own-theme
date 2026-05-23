<?php
/**
 * Template Name: Privacy Policy Page
 * page-privacy-policy.php — Own. Theme
 */
get_header(); ?>

<main id="main">

  <!-- Page Header -->
  <div class="page-hero">
    <div style="max-width:1200px;margin-inline:auto;">
      <nav class="page-hero__breadcrumb" aria-label="パンくずリスト">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span>/</span>
        <span>プライバシーポリシー</span>
      </nav>
      <p class="page-hero__num">— Privacy Policy</p>
      <h1 class="page-hero__en">Privacy Policy.</h1>
      <p class="page-hero__ja">プライバシーポリシー</p>
      <p class="page-hero__lead">
        own.（以下「当サイト」）は、お客様の個人情報の保護を重要な責務と考え、<br>
        以下のとおりプライバシーポリシーを定めます。
      </p>
    </div>
  </div>

  <!-- Body -->
  <section class="page-body">
    <div class="privacy-body">

      <div class="privacy-section">
        <h2 class="privacy-heading">1. 収集する情報</h2>
        <p>当サイトでは、お問い合わせフォームをご利用いただいた際に、以下の情報をご提供いただく場合があります。</p>
        <ul>
          <li>お名前・会社名・屋号</li>
          <li>メールアドレス</li>
          <li>ご相談内容・メッセージ</li>
        </ul>
        <p>また、Googleアナリティクスを使用しており、Cookieを通じてサイトの利用状況に関する情報（アクセス数・閲覧ページ・滞在時間など）を取得しています。これらの情報に個人を特定できる情報は含まれません。</p>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading">2. 情報の利用目的</h2>
        <p>収集した個人情報は、以下の目的のみに使用します。</p>
        <ul>
          <li>お問い合わせへの返信・ご相談への対応</li>
          <li>サービスのご提案・お見積りの送付</li>
          <li>サービス向上のための分析</li>
        </ul>
        <p>いただいた個人情報を、上記目的以外に使用することはありません。</p>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading">3. 第三者への提供</h2>
        <p>当サイトは、以下の場合を除き、お客様の個人情報を第三者に提供・開示することはありません。</p>
        <ul>
          <li>ご本人の同意がある場合</li>
          <li>法令に基づき開示が必要な場合</li>
        </ul>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading">4. Cookieについて</h2>
        <p>当サイトでは、Googleアナリティクスによるアクセス解析のためにCookieを使用しています。Cookieはブラウザの設定により無効にすることが可能です。Googleアナリティクスのデータ収集を無効にしたい場合は、<a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener noreferrer">Googleアナリティクス オプトアウトアドオン</a>をご利用ください。</p>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading">5. 情報の管理・セキュリティ</h2>
        <p>当サイトは、お客様からいただいた個人情報を適切に管理し、紛失・漏洩・改ざん等が起こらないよう、合理的な安全対策を講じます。</p>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading">6. 個人情報の開示・訂正・削除</h2>
        <p>ご本人から個人情報の開示・訂正・削除のご要望があった場合は、お問い合わせフォームよりご連絡ください。内容を確認のうえ、合理的な範囲で速やかに対応いたします。</p>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading">7. 免責事項</h2>
        <p>当サイトのコンテンツ・情報については、正確な情報を提供するよう努めておりますが、内容の正確性・完全性を保証するものではありません。当サイトの利用によって生じたいかなる損害についても、責任を負いかねますのであらかじめご了承ください。</p>
        <p>また、当サイトからリンクされた外部サイトのコンテンツについては、当サイトの管理外となり、責任を負いかねます。</p>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading">8. ポリシーの変更</h2>
        <p>本プライバシーポリシーは、必要に応じて予告なく変更する場合があります。変更後のポリシーは当ページに掲載した時点で効力を生じるものとします。</p>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading">9. お問い合わせ</h2>
        <p>本ポリシーに関するご質問・個人情報の取り扱いに関するお問い合わせは、以下よりご連絡ください。</p>
        <p><a href="<?php echo esc_url( home_url('/contact') ); ?>" style="color:var(--accent-dark);text-decoration:underline;">お問い合わせフォームはこちら</a></p>
      </div>

      <p class="privacy-updated">最終更新日：<?php echo esc_html( date('Y年n月j日') ); ?></p>

    </div>
  </section>

</main>
<?php get_footer(); ?>

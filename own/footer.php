<!-- FOOTER -->
<footer class="site-footer" role="contentinfo">

  <div class="footer-inner">

    <!-- Brand -->
    <div class="footer-brand">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="footer-logo">own<span>.</span></a>
      <p class="footer-tagline">鳥取のホームページ制作・SEO対策</p>
      <p class="footer-desc">Webのことが全くわからなくても大丈夫です。<br>小さなお悩みからお気軽にどうぞ。</p>
      <ul class="footer-contact">
        <li>
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <a href="tel:08062421110">080-6242-1110</a>
        </li>
        <li>
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M3 7l9 6 9-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          <a href="mailto:ryo.kawakami.biz@gmail.com">ryo.kawakami.biz@gmail.com</a>
        </li>
      </ul>
    </div>

    <!-- Nav -->
    <nav class="footer-nav" aria-label="フッターナビゲーション">
      <div class="footer-nav__col">
        <p class="footer-nav__heading">Menu</p>
        <ul class="footer-nav__list">
          <li><a href="<?php echo esc_url( home_url('/service') ); ?>">サービス</a></li>
          <li><a href="<?php echo esc_url( home_url('/price') ); ?>">料金・プラン</a></li>
          <li><a href="<?php echo esc_url( home_url('/about') ); ?>">own.について</a></li>
          <li><a href="<?php echo esc_url( home_url('/blog') ); ?>">コラム</a></li>
          <li><a href="<?php echo esc_url( home_url('/activity') ); ?>">社会への取り組み</a></li>
        </ul>
      </div>
      <div class="footer-nav__col">
        <p class="footer-nav__heading">Info</p>
        <ul class="footer-nav__list">
          <li><a href="<?php echo esc_url( home_url('/faq') ); ?>">よくある質問</a></li>
          <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">お問い合わせ</a></li>
          <li><a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>">プライバシーポリシー</a></li>
          <li><a href="<?php echo esc_url( home_url('/tokusho') ); ?>">特定商取引法に基づく表示</a></li>
        </ul>
      </div>
    </nav>

    <!-- CTA -->
    <div class="footer-cta">
      <p class="footer-cta__label">まずはお気軽に</p>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="footer-cta__btn">
        無料相談する
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none" aria-hidden="true">
          <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </a>
      <p class="footer-cta__note">初回相談無料 / 全国リモート対応</p>
    </div>

  </div>

  <!-- Bottom bar -->
  <div class="footer-bottom">
    <p class="footer-copy">&copy; <?php echo esc_html( date('Y') ); ?> Own. All rights reserved.</p>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>

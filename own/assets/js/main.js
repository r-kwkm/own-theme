/**
 * main.js — Own. Theme
 */
(function () {
  'use strict';

  /* ===== Custom Cursor ===== */
  const cursor = document.getElementById('cursor');
  const ring   = document.getElementById('cursorRing');

  if (cursor && ring) {
    let mx = 0, my = 0, rx = 0, ry = 0;

    document.addEventListener('mousemove', e => {
      mx = e.clientX; my = e.clientY;
      cursor.style.left = mx + 'px';
      cursor.style.top  = my + 'px';
    });

    (function animateRing() {
      rx += (mx - rx) * 0.12;
      ry += (my - ry) * 0.12;
      ring.style.left = rx + 'px';
      ring.style.top  = ry + 'px';
      requestAnimationFrame(animateRing);
    })();
  }

  /* ===== Hero Grid Canvas ===== */
  const gridCanvas = document.getElementById('gridCanvas');
  if (gridCanvas) {
    const cells = [];
    for (let i = 0; i < 48; i++) {
      const cell = document.createElement('div');
      cell.className = 'grid-cell';
      gridCanvas.appendChild(cell);
      cells.push(cell);
    }

    function flashCell() {
      const idx   = Math.floor(Math.random() * cells.length);
      const shade = Math.random() > 0.7
        ? '#3DD68C'
        : `rgba(61,214,140,${Math.random() * 0.08})`;
      cells[idx].style.background = shade;
      setTimeout(() => { cells[idx].style.background = '#1a1a1a'; }, 400 + Math.random() * 600);
      setTimeout(flashCell, 80 + Math.random() * 200);
    }
    flashCell();
  }

  /* ===== Scroll Reveal ===== */
  const revealEls = document.querySelectorAll('.reveal');
  if (revealEls.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          observer.unobserve(e.target);
        }
      });
    }, { threshold: 0.1 });
    revealEls.forEach(el => observer.observe(el));
  }

  /* ===== Mobile Menu ===== */
  const toggle    = document.querySelector('.nav-toggle');
  const mobileNav = document.querySelector('.mobile-nav');

  if (toggle && mobileNav) {
    // サブメニュートグルボタンを動的に挿入
    mobileNav.querySelectorAll('.menu-item-has-children').forEach(item => {
      const link = item.querySelector('a');
      const sub  = item.querySelector('.sub-menu');
      if (!sub) return;

      const btn = document.createElement('button');
      btn.className = 'sub-menu-toggle';
      btn.setAttribute('aria-expanded', 'false');
      btn.setAttribute('aria-label', 'サブメニューを開く');
      link.after(btn);

      btn.addEventListener('click', e => {
        e.stopPropagation();
        const isOpen = btn.classList.contains('is-open');
        btn.classList.toggle('is-open', !isOpen);
        sub.classList.toggle('is-open', !isOpen);
        btn.setAttribute('aria-expanded', String(!isOpen));
      });
    });

    // メニュー全体の開閉
    const closeMenu = () => {
      toggle.classList.remove('is-open');
      mobileNav.classList.remove('is-open');
      toggle.setAttribute('aria-expanded', 'false');
      mobileNav.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    };

    toggle.addEventListener('click', () => {
      const isOpen = toggle.classList.contains('is-open');
      toggle.classList.toggle('is-open', !isOpen);
      mobileNav.classList.toggle('is-open', !isOpen);
      toggle.setAttribute('aria-expanded', String(!isOpen));
      mobileNav.setAttribute('aria-hidden', String(isOpen));
      document.body.style.overflow = isOpen ? '' : 'hidden';
    });

    // リンククリックでメニューを閉じる
    mobileNav.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        if (!a.closest('.menu-item-has-children') || a.closest('.sub-menu')) {
          closeMenu();
        }
      });
    });

    document.addEventListener('keydown', e => {
      if (e.key === 'Escape' && mobileNav.classList.contains('is-open')) closeMenu();
    });
  }

  /* ===== FAQ Accordion ===== */
  document.querySelectorAll('.faq-q').forEach(btn => {
    const handler = () => {
      const item = btn.closest('.faq-item');
      const ans  = item.querySelector('.faq-a');
      const isOpen = item.classList.contains('is-open');

      // Close all
      document.querySelectorAll('.faq-item.is-open').forEach(el => {
        el.classList.remove('is-open');
        el.querySelector('.faq-a').classList.remove('is-open');
        el.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
      });

      // Open clicked (unless it was already open)
      if ( !isOpen ) {
        item.classList.add('is-open');
        ans.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
      }
    };
    btn.addEventListener('click', handler);
    btn.addEventListener('keydown', e => { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); handler(); } });
  });

  /* ===== Smooth anchor scroll ===== */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href');
      if (id === '#') return;
      const target = document.querySelector(id);
      if (!target) return;
      e.preventDefault();
      const navH = document.querySelector('.site-nav')?.offsetHeight || 72;
      const top  = target.getBoundingClientRect().top + window.scrollY - navH;
      window.scrollTo({ top, behavior: 'smooth' });
    });
  });

  /* ===== CF7 → GA4 ===== */
  document.addEventListener('wpcf7mailsent', function (e) {
    if (typeof gtag !== 'function') return;
    gtag('event', 'generate_lead', {
      event_category: 'contact',
      event_label:    'cf7_contact_form',
      form_id:        e.detail.contactFormId,
    });
  }, false);

})();

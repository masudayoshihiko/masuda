document.addEventListener('DOMContentLoaded', function() {
    // モバイルメニュー
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-navigation');
    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            mobileToggle.classList.toggle('active');
        });
    }

    // ページトップボタン
    const pageTopBtn = document.getElementById('page-top');
    if (pageTopBtn) {
        const onScroll = function() {
            if (window.pageYOffset > 300) {
                pageTopBtn.style.display = 'block';
            } else {
                pageTopBtn.style.display = 'none';
            }
        };
        window.addEventListener('scroll', onScroll);
        onScroll();
        pageTopBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // スムーススクロール（ページ内リンク）
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (!href || href === '#') return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});



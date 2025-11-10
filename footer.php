<!-- フッター -->
<footer class="site-footer">
    <div class="footer-content">
        
        <!-- ソーシャルメディアリンク -->
        <div class="footer-social">
            <h3>公式SNS</h3>
            <div class="social-links">
                <?php if (get_theme_mod('youtube_url')) : ?>
                    <a href="<?php echo esc_url(get_theme_mod('youtube_url')); ?>" target="_blank" title="YouTube公式チャンネル">
                        <i class="fab fa-youtube"></i>
                    </a>
                <?php endif; ?>
                <?php if (get_theme_mod('twitter_url')) : ?>
                    <a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" target="_blank" title="X公式アカウント">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                <?php endif; ?>
                <?php if (get_theme_mod('instagram_url')) : ?>
                    <a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>" target="_blank" title="Instagram公式アカウント">
                        <i class="fab fa-instagram"></i>
                    </a>
                <?php endif; ?>
                <?php if (get_theme_mod('facebook_url')) : ?>
                    <a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" target="_blank" title="Facebook公式ページ">
                        <i class="fab fa-facebook"></i>
                    </a>
                <?php endif; ?>
                <?php if (!get_theme_mod('youtube_url') && !get_theme_mod('twitter_url') && !get_theme_mod('instagram_url') && !get_theme_mod('facebook_url')) : ?>
                    <a href="#" title="YouTube公式チャンネル"><i class="fab fa-youtube"></i></a>
                    <a href="#" title="X公式アカウント"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" title="Instagram公式アカウント"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="Facebook公式ページ"><i class="fab fa-facebook"></i></a>
                <?php endif; ?>
            </div>
        </div>

        <!-- フッターナビゲーション -->
        <nav class="footer-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_class' => 'footer-menu',
                'container' => false,
                'fallback_cb' => 'footer_default_menu'
            ));
            ?>
        </nav>

        <!-- サイト情報 -->
        <div class="footer-info">
            <div class="contact-info">
                <h4><?php bloginfo('name'); ?></h4>
                <p>
                    〒100-0000 東京都千代田区○○○○<br>
                    ○○○ビル○○○号室<br>
                    TEL: 03-0000-0000
                </p>
            </div>
            
            <div class="footer-links">
                <a href="<?php echo home_url('/privacy-policy'); ?>">個人情報保護方針</a>
                <a href="<?php echo home_url('/site-policy'); ?>">サイトポリシー</a>
            </div>
            
            <p class="copyright">
                Copyright(C) <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.
            </p>
        </div>
    </div>
</footer>

<!-- ページトップボタン -->
<button id="page-top" class="page-top-btn" aria-label="ページの先頭へ">↑</button>

<?php wp_footer(); ?>

</body>
</html>

<?php
// フッターデフォルトメニューのフォールバック
function footer_default_menu() {
    echo '<ul class="footer-menu">';
    echo '<li><a href="' . home_url('/policy') . '">主要政策</a></li>';
    echo '<li><a href="' . home_url('/profile') . '">プロフィール</a></li>';
    echo '<li><a href="' . home_url('/downloads') . '">ダウンロード</a></li>';
    echo '<li><a href="' . home_url('/contact') . '">お問い合わせ</a></li>';
    echo '</ul>';
}
?>


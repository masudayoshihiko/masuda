<?php
/**
 * Template Name: Meeting
 */
get_header();
?>

<main class="main-content">
    <section class="content-section">
        <h2>暮らしの再生会議</h2>
        <p class="section-description">地域の皆さまとの対話を重視し、定期的に「暮らしの再生会議」を開催しています。</p>
        
        <div class="photo-gallery">
            <div class="photo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/picture/DSC_2330.jpg" alt="会議の様子1">
                <p class="photo-caption">地域住民との意見交換会</p>
            </div>
            <div class="photo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/picture/DSC_2331.jpg" alt="会議の様子2">
                <p class="photo-caption">子育て支援についての議論</p>
            </div>
            <div class="photo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/picture/BABA2025_04_12%20162153.jpg" alt="会議の様子3">
                <p class="photo-caption">高齢者福祉に関する話し合い</p>
            </div>
            <div class="photo-item">
                <img src="<?php echo get_template_directory_uri(); ?>/picture/BABA2025_04_12%20164613.JPG" alt="会議の様子4">
                <p class="photo-caption">若者との政策対話</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>



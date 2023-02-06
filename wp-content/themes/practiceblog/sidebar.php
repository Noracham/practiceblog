<aside id="sidebar">
    <section class="author">
        <img decoding="async" class="author-img" src="<?php echo esc_url(get_theme_file_uri('img/sidebar/author.jpg')) ?>" alt="author">
        <h3 class="side-title">My Name</h3>
        <p class="profile">
            プロフィールテキストプロフィールテキストプロフィールテキストプロフィールテキストプロフィールテキストプロフィールテキスト
            プロフィールテキストプロフィールテキストプロフィールテキストプロフィールテキストプロフィールテキスト
        </p>
    </section>
    <?php get_search_form(); ?>

    <section class="archive">
        <?php dynamic_sidebar('sidebar'); ?>
    </section>
</aside>
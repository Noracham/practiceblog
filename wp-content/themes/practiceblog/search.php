<?php get_header(); ?>

<div class="wrapper" id="container">
    <main>
        <?php if (have_posts()) : ?>
            <?php if (!$_GET['s']) { ?>
                <p>検索キーワードが未入力です。</p>
            <?php } else { ?>
                <h1 class="page-title">
                    「<?php echo $_GET['s']; ?>」の検索結果:<?php echo $wp_query->found_posts; ?>件
                </h1>
                <?php
                get_template_part('loop');

                if (function_exists("pagination")) {
                    pagination($wp_query->max_num_pages);
                }
                ?> <?php } ?>
        <?php else : ?>
            <p>検索キーワードに一致する記事がありませんでした。</p>
        <?php endif; ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
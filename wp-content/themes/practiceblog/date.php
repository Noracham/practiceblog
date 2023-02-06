<?php get_header(); ?>

<div class="wrapper" id="container">
    <main>
        <h1 class="page-title">
            <?php echo get_query_var('year') . '年' . get_query_var('monthnum') . '月'; ?>
        </h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php $cat = get_the_category();
                $catname = $cat[0]->cat_name;
                ?>
                <article>
                    <h2 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <ul class="meta">
                        <li><?php the_time('Y/m/d'); ?></li>
                        <li><?php echo $catname; ?></li>
                    </ul>
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                    <div class="text">
                        <?php if (mb_strlen(strip_tags(get_the_content()), 'utf-8') > 80) {
                            $content = mb_substr(strip_tags(get_the_content()), 0, 80, 'utf-8');
                            echo $content . "...";
                        } else {
                            echo strip_tags(get_the_content());
                        }; ?>
                    </div>
                    <div class="readmore"><a href="<?php the_permalink() ?>">READ MORE</a></div>
                </article>
            <?php endwhile; ?>
            <?php if (function_exists('pagination')) {
                pagination($wp_query->max_num_pages);
            }; ?>
        <?php endif; ?>

    </main>
    <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
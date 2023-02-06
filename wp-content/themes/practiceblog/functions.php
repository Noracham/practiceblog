<?php
function pagination($pages = '', $range = 2)
{
    $showitems = $range * 2 + 1;

    //現在ページ数を取得
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo '<div class="pagination">';
        echo  '<ul>';

        if ($paged > 1) {
            echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">前のぺージ</a></li>';
        }

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                if ($paged == $i) {
                    echo '<li class="active">' . $i . '</li>';
                } else {
                    echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a></li>';
                }
            }
        }

        if ($paged < $pages) {
            echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">次のページ</a>';
            echo '</ul>';
            echo '</div>';
        }
    }
}

function my_enqueue_styles()
{
    wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}


add_action('wp_enqueue_scripts', 'my_enqueue_styles');
add_theme_support('post-thumbnails');

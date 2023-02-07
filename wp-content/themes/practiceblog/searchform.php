<form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>">
    <input type="text" name="s" id="s" placeholder="キーワードで検索する">
    <button type="submit">
        <img src="<?php esc_url(get_theme_file_uri('img/search.png')) ?>" alt="" decoding="async">
    </button>
</form>
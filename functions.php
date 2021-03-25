<?php

register_nav_menus([
    'place_global' => 'グローバル',
    'place_footer' => 'フッターナビ'
]);

add_post_type_support('page', 'excerpt');

function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');


/* 記事を取得 */
function get_specific_posts($post_type, $taxonomy = null, $term = null, $number = -1)
{
    $args = array(
        'posts_type' => $post_type,
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $term
            ),
        ),
        'posts_per_page' => $number,
    );
    $specific_posts = new WP_Query($args);
    return $specific_posts;
}

/* 指定の長さの抜粋分を作成 */
function get_flexible_excerpt($number)
{
    $value = get_the_excerpt();
    $value = wp_trim_words($value, $number, '...');
    return $value;
}

function apply_excerpt_br($value)
{
    return nl2br($value);
}
add_filter('get_the_excerpt', 'apply_excerpt_br');

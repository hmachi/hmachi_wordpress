<?php
get_header();
?>

<main id="front">
    <?php
    $front_page_id = get_option('page_on_front');
    $frontPage = get_page($front_page_id);
    ?>
    <div class="top-content">
        <img alt="<?php bloginfo('name'); ?>" src="<?php echo get_the_post_thumbnail_url($front_page_id); ?>" />
        <div class="top-label-wrap">
            <?php echo $frontPage->post_excerpt; ?>
        </div>

    </div>

    <div class="front-page-content-wrap">
        <div class="content-wrap">
            <?php
            $programmingPage = get_page_by_path("programming");
            ?>
            <div class="image-content">
                <img alt="<?php echo $programmingPage->post_title; ?>" src="<?php echo get_the_post_thumbnail_url($programmingPage->ID); ?>" />
            </div>
            <div class="explain-content">
                <div class="title">
                    <span><?php echo $programmingPage->post_title; ?></span>
                </div>

                <div class="explain">
                    <div>
                        <?php echo $programmingPage->post_excerpt; ?>
                    </div>
                </div>

                <div class="move-more-btn-row">
                    <div class="move-more-btn">
                        <a href="<?php echo get_home_url(); ?>/programming">MORE</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrap flex-reverse">
            <?php $classPage = get_page_by_path("class"); ?>
            <div class="image-content">
                <img alt="<?php echo $classPage->post_title; ?>" src="<?php echo get_the_post_thumbnail_url($classPage->ID); ?>" />
            </div>
            <div class="explain-content">
                <div class="title">
                    <span><?php echo $classPage->post_title; ?></span>
                </div>
                <div class="explain">
                    <div><?php echo $classPage->post_excerpt; ?></div>
                </div>
                <div class="move-more-btn-row">
                    <div class="move-more-btn">
                        <a href="<?php echo get_home_url(); ?>/class">MORE</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrap">
            <?php $trackandfieldPage = get_page_by_path("trackandfield"); ?>
            <div class="image-content">
                <img alt="<?php echo $trackandfieldPage->post_title; ?>" src="<?php echo get_the_post_thumbnail_url($trackandfieldPage->ID); ?>" />
            </div>
            <div class="explain-content">
                <div class="title">
                    <span><?php echo $trackandfieldPage->post_title; ?></span>
                </div>
                <div class="explain">
                    <div><?php echo $trackandfieldPage->post_excerpt; ?></div>
                </div>
                <div class="move-more-btn-row">
                    <div class="move-more-btn">
                        <a href="<?php echo get_home_url(); ?>/trackandfield">MORE</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-content">
            <div class="news-wrap">
                <?php $news_obj = get_term_by('slug', 'news', 'category'); ?>
                <div class="title"><?php echo $news_obj->name; ?></div>

                <?php
                $news_posts = get_specific_posts('post', 'category', 'news', 4);
                if ($news_posts->have_posts()) :
                    while ($news_posts->have_posts()) : $news_posts->the_post();
                ?>
                        <div class="news-row">
                            <a class="news-link" href="<?php the_permalink(); ?>">
                                <div class="news-title"><?php the_time('Y.m.d'); ?> / <?php the_title(); ?></div>
                                <div class="news-body">
                                    <?php echo get_flexible_excerpt(110); ?>
                                </div>
                            </a>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
                <div class="news-all-button-wrap">
                    <button type="button" onclick="javascript:location.href = '<?php echo esc_url(get_term_link($news_obj)); ?>';">
                        MORE
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>
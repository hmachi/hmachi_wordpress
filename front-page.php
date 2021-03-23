<?php
get_header();
?>

<main id="front">
    <div class="top-image">
        <img alt="<?php bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/assets/images/ocean.jpg" />
    </div>

    <div id="front-page-content-wrap">
        <div class="content-wrap">
            <div class="image-content">
                <img alt="プログラミング教室" src="<?php echo get_template_directory_uri(); ?>/assets/images/ocean.jpg" />
            </div>
            <div class="explain-content background-color-orange">
                <div class="title">
                    <span>プログラミング教室</span>
                </div>

                <div class="explain">
                    <div>
                        プログラミング教室についての説明などを記載
                    </div>


                    <div class="move-more-btn-row">
                        <div class="move-more-btn">
                            <a href="<?php echo get_home_url(); ?>/programming">MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrap flex-reverse">
            <div class="image-content">
                <img alt="出前授業" src="<?php echo get_template_directory_uri(); ?>/assets/images/ocean.jpg" />
            </div>
            <div class="explain-content background-color-blue">
                <div class="title">
                    <span>出前授業</span>
                </div>
                <div class="explain">
                    <div>出前授業についての説明などを記載</div>

                    <div class="move-more-btn-row">
                        <div class="move-more-btn">
                            <a href="<?php echo get_home_url(); ?>/class">MORE</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="content-wrap">
            <div class="image-content">
                <img alt="陸上教室" src="<?php echo get_template_directory_uri(); ?>/assets/images/ocean.jpg" />
            </div>
            <div class="explain-content background-color-red">
                <div class="title">
                    <span>陸上教室</span>
                </div>
                <div class="explain">
                    <div>陸上教室についての説明などを記載</div>

                    <div class="move-more-btn-row">
                        <div class="move-more-btn">
                            <a href="<?php echo get_home_url(); ?>/trackandfield">MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                            <div class="news-content">
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
</main>

<?php
get_footer();
?>
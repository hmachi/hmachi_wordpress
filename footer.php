<footer id="footer">
    <div class="footer-contents">
        <div class="footer-contents-contact">
            <div class="enterprise-detail">
                <p class="name">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" alt="アイコン">
                        <span><?php bloginfo('name'); ?></span>
                    </a>
                </p>
            </div>
        </div>
        <div class="footer-contents-sitemap">
            <nav class="footer-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'place_footer',
                    'container' => false
                ])
                ?>
            </nav>
        </div>
    </div>
    <p class="copyright">
        <small class="copyright-text">&#169; 2021 yashiroyachi.</small>
    </p>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/front-page.js"></script>
</body>

</html>
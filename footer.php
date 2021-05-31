<!-- footer -->
<footer>
    <div class="inner">
        <div class="footer-body">
            <div class="footer-about">
                <p class="footer-title">About</p>
                <div class="about-text">
                    <p>テキストテキストテキストテキストテキストテキストテ キストテキストテキストテキスト テキストテキストテ キストテキストテキストテキストテキストテキストテキ ストテキスト テキストテキストテキストテキストテキ ストテキストテキストテキストテキストテキスト
                    </p>
                </div>
                <div class="about-link">
                    <ul>
                        <li>
                            <a href="#">プロフィール詳細</a>
                        </li>
                        <li>
                            <a href="#">お仕事の依頼</a>
                        </li>
                        <li>
                            <a href="#">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-menu">
                <p class="footer-title">Menu</p>
                <div class="menu-link">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'place_global',
                            'container' => false,
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="footer-twitter">
                <p class="footer-title">Twitter</p>
                <a class="twitter-timeline" data-lang="ja" data-width="349" data-height="312" href="https://twitter.com/SBeXwxMu5Fhyczy?ref_src=twsrc%5Etfw">Tweets by SBeXwxMu5Fhyczy</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="footer-copy">
            <p>© Travel & Blog</p>
        </div>
    </div>
</footer>
<!-- /footer -->

<?php wp_footer(); ?>
</body>

</html>
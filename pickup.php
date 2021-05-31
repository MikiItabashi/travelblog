<!-- pickup -->
<section class="pickup">
    <div class="inner">
        <div class="pickup-items">
            <?php
            $pickup_posts = get_posts(array(
                'post_type' => 'post', // 投稿タイプ
                'posts_per_page' => '3', // 3件取得
                'tag' => 'pickup', // pickupタグがついたものを
                'orderby' => 'DESC', // 新しい順に
            ));
            foreach ($pickup_posts as $post) : setup_postdata($post);
            ?>
                <article class="pickup-item">
                    <div class="pickup-img">
                    <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large');
                        } else {
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/main1.jpg" alt="thumbnail">';
                        }
                        ?>

                    </div>
                    <div class="pickup-title">
                        <p><?php the_title(); ?></p>
                    </div>
                    <div class="pickup-more">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="more">READ MORE</a>
                    </div>
                </article>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!-- /pickup -->
<!-- side -->

<div class="side">
    <!-- profile -->
    <div class="profile">
        <div class="profile-img">
            <img src="<?php echo get_template_directory_uri() ?>/img/21.0420.icon01 (1).PNG" alt="">
        </div>
        <div class="profile-name side-title">
            <p>さらさ</p>
        </div>
        <div class="profile-text">
            <p>一人旅が好きなOLの旅行ブログです。</p>
            <p>世界遺産を中心に、旅先の出来事や写真を発信しています。</p>
        </div>
    </div>
    <!-- /profile -->

    <!-- ranking -->
    <div class="ranking">
        <div class="side-title">
            <p>Ranking</p>
        </div>
        <div class="ranking-items">
            <?php
            // views post metaで記事のPV情報を取得する
            setPostViews(get_the_ID());

            $args = array(
                'meta_key' => 'post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'posts_per_page' => 3 // ← 3件取得
            );


            // WP_Queryによるループ
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <a class="ranking-item" href="<?php the_permalink(); ?>">
                        <div class="ranking-img">
                            <?php
                            if (has_post_thumbnail()) {
                                // アイキャッチ画像が設定されてれば大サイズで表示
                                the_post_thumbnail('large');
                            } else {
                                // なければnoimage画像をデフォルトで表示
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/main1.jpg" alt="thumbnail">';
                            }
                            ?>
                        </div>
                        <div class="ranking-text">
                            <p><?php the_title(); ?></p>
                        </div>
                    </a>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <!-- /ranking -->

    <!-- archive -->
    <div class="archive">
        <?php if (is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
    </div>
    <!-- /archive -->
</div>
<!-- /side -->
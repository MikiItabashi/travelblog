<?php get_header(); ?>


<div class="inner">
    <section class="body">
        <!-- main -->
        <div class="main">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="main-item">
                        <div class="main-title">
                            <h2><?php the_title(); ?></h2>
                            <div class="main-info">
                                <p class="main-date"><?php the_time('Y/m/d'); ?></p>
                                <?php
                                $category = get_the_category();
                                if ($category[0]) {
                                    echo '<p class="main-category">' . $category[0]->cat_name . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="main-img">
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
                        <div class="main-text">
                            <p><?php the_content(); ?></p>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>記事が見つかりませんでした</p>
            <?php endif; ?>
        </div>
        <!-- /main -->

        <?php get_sidebar(); ?>

    </section>
</div>

<?php get_footer(); ?>
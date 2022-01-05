<?php get_header() ?>

<div class="sub-page js-judge-page">
    <div class="js-mv mv--sub">
        <div class="mv__title--sub">
            <h2><img src="<?php echo get_template_directory_uri() ?>/assets/img/news.png" alt="news"></h2>
        </div>
    </div>
</div>
<main class="article">
    <article>
        <div class="gen-inner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php 
            endwhile;
            endif; ?>
            <div class="article__content">
                <div class="article__title">
                    <h2><?php the_title() ?></h2>
                    <span class="date"><?php the_time('Y-m-d') ?></span>
                </div>
                <div class="article__main">
                    <?php the_content() ?>
                </div>
                <div class="article__sns">
                    <a href="" class="banner banner--line">
                        公式ラインはこちら
                    </a>
                    <a href="" class="banner banner--insta">
                        インスタグラムはこちら
                    </a>
                    <a href="" class="banner banner--twitter">
                        Twitterはこちら
                    </a>
                </div>
            </div>
        </div>
    </article>
</main>
<?php get_footer() ?>
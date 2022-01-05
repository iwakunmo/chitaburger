<?php get_header(); ?>

<div class="sub-page js-judge-page">
    <div class="js-mv mv--sub">
        <div class="mv__title--sub">
            <h2><img src="<?php echo get_template_directory_uri() ?>/assets/img/news.png" alt="news"></h2>
        </div>
    </div>
    <main class="news--sub">
        <section id="archive--sub" class="archive--sub">
            <div class="gen-inner">
                <div class="section__title">
                    <h2>ARCHIVE</h2>
                </div>
                <div class="section__content">
                    <div class="archive__list--sub">
                        <?php
                            $wp_query = new WP_Query();
                            $query_post = array(
                                'post_type' => 'post',
                                'post_per_page' => 10,
                            );
                            $wp_query->query($query_post);
                            if($wp_query -> have_posts()):
                                while($wp_query -> have_posts()):
                                $wp_query -> the_post();
                        ?>
                        <a href="<?php the_permalink()?>">
                            <dl class="archive__item--sub">
                                <dt class="date"><?php the_time('Y-m-d'); ?></dt>
                                <dd class="cat"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></dd>
                                <dd class="detail"><?php the_title(); ?></dd>
                            </dl>
                        </a>
                        <?php 
                            endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>
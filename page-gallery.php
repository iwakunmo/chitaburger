<?php get_header(); ?>

<div class="sub-page js-judge-page">
    <div class="js-mv mv--sub">
        <div class="mv__title--sub">
            <h2><img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery.png" alt="gallery"></h2>
        </div>
    </div>
    <main class="gallery--sub">
        <section id="insta--sub" class="insta--sub">
            <div class="gen-inner">
                <div class="section__title">
                    <h2>INSTAGRAM</h2>
                </div>
                <div class="section__content">
                    <?php echo do_shortcode('[instagram-feed]') ?>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
	<?php get_header(); ?>

	<div class="top-page js-judge-page">
		<!-- mv -->
		<div class="js-mv mv">
			<div class="mv__slick">
				<ul class="slick-slider">
					<li><img src="<?php echo get_template_directory_uri() ?>/assets/img/mv1.jpg" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri() ?>/assets/img/mv2.jpg" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri() ?>/assets/img/mv3.jpg" alt=""></li>
				</ul>
			</div>
			<div class="logo">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo2.png" alt="chitaburger">
			</div>
		</div>
		<!-- /mv -->

		<!-- main -->
		<main>

			<!-- news -->
			<section id="news" class="news">
				<div class="gen-inner">
					<div class="section__title">
						<h2><img src="<?php echo get_template_directory_uri() ?>/assets/img/news.png" alt="NEWS"></h2>
					</div>
					<div class="section__content">
						<div class="news__wrap">
							<div class="news-board--img"></div>
							<div class="news-paper--img"></div>
							<div class="news__list">
								<?php
								if (have_posts()) :
									while (have_posts()) :
										the_post();
								?>
										<a href="<?php the_permalink() ?>">
											<dl class="news__item">
												<dt class="date"><?php the_time('Y-m-d') ?></dt>
												<dd class="cat"><?php $cat = get_the_category();
																$cat = $cat[0]; {
																	echo $cat->cat_name;
																} ?></dd>
												<dd class="detail"><?php the_title() ?></dd>
											</dl>
										</a>
								<?php
									endwhile;
								endif;
								?>
							</div>
						</div>
						<div class="btn-wrap">
							<a class="btn" href="<?php echo esc_url(home_url('/news/')) ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/btn.png" alt="MORE"></a>
						</div>
					</div>
				</div>
			</section>
			<!-- /news -->

			<!-- concept -->
			<section id="concept" class="concept">
				<div class="gen-inner">
					<div class="section__title">
						<h2><img src="<?php echo get_template_directory_uri() ?>/assets/img/concept.png" alt="CONCEPT"></h2>
					</div>
					<div class="section__content">
						<div class="concept__wrap">
							<div class="concept__heading">
								<h3>
									<span class="concept__heading--left">知多牛</span>
									<span class="concept__heading--center">×</span>
									<span class="concept__heading--right">アメリカン</span>
								</h3>
							</div>
							<div class="concept__text">
								<p>
									ここにコンセプトが入ります。ここにコンセプトが入ります。ここにコンセプトが入ります。
									ここにコンセプトが入ります。ここにコンセプトが入ります。ここにコンセプトが入ります。
									ここにコンセプトが入ります。
									ここにコンセプトが入ります。ここにコンセプトが入ります。ここにコンセプトが入ります。ここにコンセプトが入ります。
									ここにコンセプトが入ります。ここにコンセプトが入ります。ここにコンセプトが入ります。
									ここにコンセプトが入ります。ここにコンセプトが入ります。
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /concept -->

			<!-- menu -->
			<section id="menu" class="menu">
				<div class="gen-inner">
					<div class="section__title">
						<h2><img src="<?php echo get_template_directory_uri() ?>/assets/img/menu.png" alt="MENU"></h2>
					</div>
					<div class="section__content">
						<div class="menu__wrap">
							<div class="menu__link__wrap">
								<a class="menu__link menu__link--food" href="">
									<p>FOOD</p>
								</a>
								<div class="img-box menu__img img--burger">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/burger-3.png" alt="">
								</div>
							</div>
							<div class="menu__link__wrap">
								<a class="menu__link menu__link--drink" href="">
									<p>DRINK</p>
								</a>
								<div class="img-box menu__img">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/drink.png" alt="">
								</div>
							</div>
							<div class="img-box tac img--paper">
								<button class="mdl__btn js-mdl__btn">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/paper.png" alt="">
								</button>
								<div class="mdl js-mdl">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/paper.png" alt="">
								</div>
							</div>
							<p class="sp-only">タップで拡大</p>
						</div>
					</div>
				</div>
			</section>
			<!-- /menu -->

			<!-- gallery -->
			<section id="gallery" class="gallery">
				<div class="gen-inner">
					<div class="section__title">
						<h2><img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery.png" alt="GALLERY"></h2>
					</div>
					<div class="section__content">
						<div class="gallery__wrap">
							<div class="gallery__slider">
								<?php echo do_shortcode('[instagram-feed]'); ?>
							</div>
							<div class="btn-wrap">
								<a class="btn" href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/btn.png" alt="MORE"></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /gallery -->

			<!-- sns -->
			<section id="sns" class="sns">
				<div class="gen-inner">
					<div class="section__title">
						<h2><img src="<?php echo get_template_directory_uri() ?>/assets/img/sns.png" alt="SNS"></h2>
					</div>
					<div class="section__content">
						<div class="sns__wrap">
							<div class="sns__timeline">
								<div class="sns__twitter">
									<a class="twitter-timeline" data-height="500px" href="https://twitter.com/chita_burger?ref_src=twsrc%5Etfw">Tweets by chita_burger</a>
									<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
								</div>
								<div class="sns__insta">
									<?php echo do_shortcode('[instagram-feed col=1 num=1]'); ?>
								</div>
							</div>
							<div class="sns__line">
								<a href="">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/line-banner.png" alt="ラインお友達登録でお得なクーポン券GET">
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /sns -->

			<!-- location -->
			<section id="location" class="location">
				<div class="gen-inner">
					<div class="section__title">
						<h2><img src="<?php echo get_template_directory_uri() ?>/assets/img/location.png" alt="LOCATION"></h2>
					</div>
					<div class="section__content">
						<div class="location__wrap">
							<div class="location__map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104396.0474505352!2d136.856271222154!3d35.14723036603699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003709e107b2365%3A0x2a9622d4e8ceb352!2z5oSb55-l55yM5ZCN5Y-k5bGL5biC!5e0!3m2!1sja!2sjp!4v1637675064873!5m2!1sja!2sjp" width="540" height="420" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
							<div class="location__data">
								<div class="logo location__logo">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo2.png" alt="chitaburger ロゴ">
								</div>
								<div class="location__info">
									<dl>
										<dt>店名</dt>
										<dd>CHITA BURGER</dd>
									</dl>
									<dl>
										<dt>電話番号</dt>
										<dd>000-0000-0000</dd>
									</dl>
									<dl>
										<dt>メールアドレス</dt>
										<dd>chitaburger@sample.com</dd>
									</dl>
									<dl>
										<dt>代表者名</dt>
										<dd>岩田隼輝</dd>
									</dl>
									<dl>
										<dt>住所</dt>
										<dd>愛知県知多郡1-1-1</dd>
									</dl>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /location -->

		</main>
		<!-- /main -->
	</div>

	<?php get_footer() ?>
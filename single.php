<?php
get_header();
$category = wp_get_post_categories(get_the_ID());
?>

    <section class="page-intro single-news-intro" style="background-image: url('<?php echo carbon_get_term_meta($category[0], 'crb_intro_single_bg'); ?>')">
        <div class="section__title-wrap">
            <h1 class="section__title"><?php the_title(); ?></h1>
            <div class="section__title--after"></div>
        </div>
    </section>
    <div class="news__item single">
        <div class="news__block">
<!--            <header class="news__item-header">-->
<!--                <img class="news__small-logo" src="--><?php //echo get_template_directory_uri() ?><!--/site/assets/i/icons/small-logo.png" alt="">-->
<!--                <div class="news__item-data">-->
<!--                    <h6 class="news__item-title">Prodinfo ONG</h6>-->
<!--                    <img class="news__crown"-->
<!--                         src="--><?php //echo get_template_directory_uri() ?><!--/site/assets/i/icons/crown.svg" alt=""-->
<!--                         title="admin">-->
<!--                    <div class="news__item-time"><span-->
<!--                                class="news__item-date">--><?php //echo get_the_date('d M Y'); ?><!--</span> <span>2 min</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </header>-->

			<?php if (have_posts()): ?>
				<?php the_post(); ?>
                <div class="news__item-text">
					<?php the_content(); ?>
                </div>
				<?php

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

				?>


			<?php else: ?>
			<?php endif; ?>

<!--            <div class="socials">-->
<!--                <div class="socials__links"><a-->
<!--                            href="--><?php //echo carbon_get_theme_option('crb_facebook'); ?><!--"><i-->
<!--                                class="fab fa-facebook-f"></i></a><a-->
<!--                            href="--><?php //echo carbon_get_theme_option('crb_twitter'); ?><!--"><i-->
<!--                                class="fab fa-twitter"></i></a><a-->
<!--                            href="--><?php //echo carbon_get_theme_option('crb_linkedin'); ?><!--"><i-->
<!--                                class="fab fa-linkedin-in"></i></a><a id="js-show-address-string" href="#"><i-->
<!--                                class="fas fa-link"></i></a></div>-->
<!--                <div class="socials__category">--><?php //echo esc_html__('News', 'bs-prodinfo')
//					?><!--</div>-->
<!--            </div>-->

            <div class="modal-link" id="js-modal-link">
                <header class="modal-link__header"><i
                            class="fas fa-link"></i><span><?php echo esc_html__('Keep link', 'bs-prodinfo')
						?></span></header>
                <textarea class="modal-link__content"></textarea>
                <div class="modal-link__buttons">
                    <button class="modal-link-close"><?php echo esc_html__('Clear', 'bs-prodinfo')
						?></button>
                    <button class="modal-link-copy"><?php echo esc_html__('Copy link', 'bs-prodinfo')
						?></button>
                </div>
            </div>
            <footer class="news__item-footer">
                <span class="news__show"><?php do_action('pageviews'); ?> <?php echo carbon_get_theme_option('crb_afisare'.get_lang());?></span>
                <span class="news__like">
                    <?php echo do_shortcode('[wp_ulike]'); ?>
                </span>
            </footer>
        </div>
    </div>
    <section class="last-posts" id="js-last-posts">
        <header class="last-posts__header">
            <h4 class="last-posts__title"><?php echo esc_html__('Last Posts', 'bs-prodinfo')
				?></h4><a class="last-posts__link" href="#"><?php echo esc_html__('Show all', 'bs-prodinfo')
				?></a>
        </header>
        <div class="last-posts-content">
			<?php
			$last_posts = new WP_Query([
				'posts_per_page' => 3,
				'category_name' => 'news'
			]);
			?>
			<?php if ($last_posts->have_posts()): ?>
				<?php while ($last_posts->have_posts()): ?>
					<?php $last_posts->the_post(); ?>
                    <div class="last-posts__item">
						<?php the_post_thumbnail('full'); ?>
                        <div class="last-posts__text">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <footer class="news__item-footer">
                                <span class="news__show"><i class="fas fa-eye"></i> <?php do_action('pageviews'); ?></span>
                                <a class="news__comment-link" href="<?php the_permalink(); ?>">
									<?php echo esc_html__('Write a comment', 'bs-prodinfo') ?>
                                </a>
                                <span class="news__like">
                                    <?php echo do_shortcode('[wp_ulike]'); ?>
                                </span>
                            </footer>
                        </div>
                    </div>

				<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>

        </div>
    </section>
    <!--    <div class="register">-->
    <!--        <p><a href="#">--><?php //echo esc_html__('Connect', 'bs-prodinfo')
	//				?><!-- </a> --><?php //echo esc_html__('To show a comment', 'bs-prodinfo')
	//			?><!--</p>-->
    <!--    </div>-->

<?php
get_footer();

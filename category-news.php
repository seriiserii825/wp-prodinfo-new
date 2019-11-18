<?php get_header();

$category = get_queried_object();

$site_title = carbon_get_theme_option('crb_site_title');
$intro_title = carbon_get_term_meta($category->term_id, 'crb_intro_title' . get_lang());
$intro_bg = carbon_get_term_meta($category->term_id, 'crb_intro_bg');
?>

<section class="page-intro" style="background-image: url('<?php echo $intro_bg; ?>')">
    <h1 class="section__title"><?php echo $intro_title; ?></h1>
</section>
<div class="news-content">
	<?php if (have_posts()): ?>
		<?php while (have_posts()): ?>
			<?php the_post(); ?>
			<?php
			$time_to_read = carbon_get_the_post_meta('crb_news_time');
			?>

            <div class="news__item">
                <div class="news__img" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></div>
                <div class="news__block">
                    <header class="news__item-header"><img class="news__small-logo"
                                                           src="<?php echo get_template_directory_uri() ?>/site/assets/i/icons/small-logo.png"
                                                           alt="">
                        <div class="news__item-data">
                            <h6 class="news__item-title">Prodinfo ONG</h6>
                            <img class="news__crown"
                                 src="<?php echo get_template_directory_uri() ?>/site/assets/i/icons/crown.svg" alt=""
                                 title="admin">
                            <div class="news__item-time">
                                <span class="news__item-date"><?php echo get_the_date('d M Y'); ?></span>
                                <span><?php echo $time_to_read . 'min'; ?></span>
                            </div>
                        </div>
                    </header>
                    <div class="news__item-text">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php
						$content = get_the_content();
						$trimmed_content = wp_trim_words($content, 18, '...');
						?>
                        <p><?php echo $trimmed_content; ?></p>
                    </div>
                    <footer class="news__item-footer">
                        <span class="news__show"><?php do_action('pageviews'); ?> <?php echo carbon_get_theme_option('crb_afisare'.get_lang());?></span>
                        <a class="news__comment-link" href="<?php the_permalink(); ?>">
                            <?php echo esc_html__( 'Write a comment', 'bs-prodinfo' ) ?>
                        </a>
                        <div class="news__like">
                            <?php echo do_shortcode('[wp_ulike]'); ?>
                        </div>
                    </footer>
                </div>
            </div>

		<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>

</div>
<?php require __DIR__ . '/template-parts/benefice.php'; ?>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Участники
 */
get_header();

$post_id = 19;
$site_title = carbon_get_theme_option('crb_site_title');
$intro_title = carbon_get_post_meta($post_id, 'crb_intro_title'.get_lang());
$intro_bg = carbon_get_post_meta($post_id, 'crb_intro_bg');
?>


<section class="page-intro" style="background-image: url('<?php echo $intro_bg; ?>')">
	<h1 class="section__title"><?php echo $intro_title; ?></h1>
</section>

<section class="our-members-content">
    <?php
        $members = new WP_Query([
			'post_type' => 'members',
            'posts_per_page' => -1
        ]);
    ?>
    <?php if($members->have_posts()): ?>
        <?php while($members->have_posts()): ?>
            <?php $members->the_post(); ?>
            <div class="our-members__item">
                <div class="our-members__img">
				    <?php the_post_thumbnail('full'); ?>
                </div>

                <div class="our-members__data">
				    <?php the_content(); ?>
                </div>
            </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
    <?php endif; ?>

</section>
<?php require __DIR__.'/template-parts/benefice.php'; ?>

<?php get_footer(); ?>

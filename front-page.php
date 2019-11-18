<?php
/**
 * Template Name: Главная
 */
get_header(); ?>
<div class="hidden">
    <svg width="0" height="0" class="hidden">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" id="left-arrow">
            <path d="M88.6 121.3c.8.8 1.8 1.2 2.9 1.2s2.1-.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8 0l-54 53.9c-1.6 1.6-1.6 4.2 0 5.8l54 53.9z"></path>
        </symbol>
    </svg>
    <svg width="0" height="0" class="hidden">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" id="right-arrow">
            <path d="M40.4 121.3c-.8.8-1.8 1.2-2.9 1.2s-2.1-.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8 0l53.9 53.9c1.6 1.6 1.6 4.2 0 5.8l-53.9 53.9z"></path>
        </symbol>
    </svg>
</div>
<div class="main-slider__wrap">
    <div class="main-slider__content">
        <h2><?php echo carbon_get_theme_option('crb_slider_title' . get_lang()); ?></h2>
        <h4><?php echo carbon_get_theme_option('crb_site_title'); ?></h4>
        <p><?php echo carbon_get_theme_option('crb_slider_text' . get_lang()); ?></p>
    </div>
    <div class="main-slider-arrows">
        <div class="slider-arrow slider-arrow--left">
            <svg class="left-arrow">
                <use xlink:href="#left-arrow"></use>
            </svg>
        </div>
        <div class="slider-arrow slider-arrow--right">
            <svg class="right-arrow">
                <use xlink:href="#right-arrow"></use>
            </svg>
        </div>
    </div>
    <div class="main-slider" id="js-main-slider">
		<?php $slider_images_id = carbon_get_theme_option('crb_slider'); ?>
		<?php foreach ($slider_images_id as $slide_id): ?>
			<?php $id = $slide_id['crb_slider_photo']; ?>
            <div class="main-slider__item"
                 style="background-image: url('<?php echo kama_thumb_src('w=1350 &h=645', $id); ?>')"></div>
		<?php endforeach; ?>
    </div>
</div>

<section class="section offers" id="js-offers">
    <header class="section__header">
        <h2 class="section__title"><?php echo carbon_get_theme_option('crb_offers_title' . get_lang()); ?></h2>
        <h4 class="section__subtitle"><?php echo carbon_get_theme_option('crb_site_title'); ?></h4>
        <p class="section__text"><?php echo carbon_get_theme_option('crb_offers_text' . get_lang()); ?></p>
    </header>
    <div class="container">
        <div class="offers__content">
			<?php $offers = carbon_get_theme_option('crb_offers'); ?>
            <?php $offers_count = count($offers); ?>

			<?php $i = 1; foreach ($offers as $offer): ?>
                <?php
                    $offers_class = '';

                    if($i % 2 == 0){
                        $offers_class = 'arrow-down';
                    } elseif($i == $offers_count) {
                        $offers_class = '';
                    } else {
	                    $offers_class = 'arrow-up';

                    }
				?>
                <div class="offers__item <?php echo $offers_class; ?>">
                    <img src="<?php echo kama_thumb_src('w=300 &h=300', $offer['crb_offers_photo']); ?>" alt="">

                    <div class="offers__text">
                        <h3><?php echo $offer['crb_offers_item_title' . get_lang()]; ?></h3>
                        <p><?php echo $offer['crb_offers_item_text' . get_lang()]; ?></p>
                    </div>
                </div>
			<?php $i++; endforeach; ?>
        </div>
    </div>
</section>
<section class="section member dark" id="js-members-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/members/members_bg.jpg')">
    <header class="section__header">
        <h2 class="section__title"><?php echo carbon_get_theme_option('crb_members_title' . get_lang()); ?></h2>
        <h4 class="section__subtitle"><?php echo carbon_get_theme_option('crb_site_title'); ?></h4>
    </header>
    <div class="container">
        <div class="member__content">
			<?php $members = carbon_get_theme_option('crb_members'); ?>
			<?php foreach ($members as $member): ?>
                <div class="member__item">
                    <img src="<?php echo kama_thumb_src('w=120 &h=100', $member['crb_members_photo']); ?>" alt="">
                    <p class="member__text"><?php echo $member['crb_offers_item_title' . get_lang()]; ?></p>
                </div>
			<?php endforeach; ?>
        </div>
        <a class="btn arrow" href="<?php echo get_permalink(14); ?>"><?php echo carbon_get_theme_option('crb_members_button' . get_lang()); ?> →</a>
    </div>
</section>

<section class="section directions" id="js-directions-section">
    <header class="section__header">
        <h2 class="section__title"><?php echo carbon_get_theme_option('crb_directions_title' . get_lang()); ?></h2>
        <h4 class="section__subtitle"><?php echo carbon_get_theme_option('crb_site_title'); ?></h4>
    </header>
    <div class="directions__container">
        <div class="directions__content">
			<?php $directions = carbon_get_theme_option('crb_directions'); ?>
			<?php foreach ($directions as $direction): ?>
                <div class="directions__item" >
                    <div class="direction__img">
	                    <?php echo kama_thumb_img('w=241 &h=262', $direction['crb_directions_bg']) ?>
                    </div>

                    <div class="directions__center">
                        <h4><?php echo $direction['crb_directions_item_title' . get_lang()]; ?></h4>
                        <img src="<?php echo kama_thumb_src('w=400 &h=400', $direction['crb_directions_photo']) ?>"
                             alt="">
                    </div>
                </div>
			<?php endforeach; ?>
        </div>
        <a class="btn arrow" href="<?php echo get_permalink(14); ?>"><?php echo carbon_get_theme_option('crb_directions_button' . get_lang()); ?> →</a>
    </div>
</section>
<div class="idea">
    <div class="idea-slider" id="js-idea-slider">
		<?php $idea_images = carbon_get_theme_option('crb_idea'); ?>
		<?php foreach ($idea_images as $img): ?>
            <div class="idea-slider__item" style="background-image: url('<?php echo kama_thumb_src('w=1920 &h=948', $img['crb_idea_photo']) ?>');">
<!--	            --><?php //echo kama_thumb_img('w=1349 &h=248', $img['crb_idea_photo']) ?>
            </div>
		<?php endforeach; ?>
    </div>
    <div class="idea__content">
        <h2><?php echo carbon_get_theme_option('crb_idea_title'.get_lang()); ?></h2>
        <p><?php echo carbon_get_theme_option('crb_idea_subtitle'.get_lang()); ?></p>
        <a class="btn large" href="<?php echo carbon_get_theme_option('crb_idea_link'.get_lang()); ?>" target="_blank"><?php echo carbon_get_theme_option('crb_idea_button'.get_lang()); ?></a>
    </div>
</div>
<div class="partners">
    <div class="container">
        <?php $partners_title = carbon_get_theme_option('crb_partners_title'.get_lang()); ?>
        <h2><?php echo $partners_title; ?></h2>
        <div class="partners-slider-wrap">
            <div class="slider-arrow slider-arrow--left"><img
                        src="<?php echo get_template_directory_uri(); ?>/site/assets/i/svg/left-arrow-green.svg"></div>
            <div class="slider-arrow slider-arrow--right"><img
                        src="<?php echo get_template_directory_uri(); ?>/site/assets/i/svg/right-arrow-green.svg"></div>
            <div class="partners-slider" id="js-partners-slider">
                <?php $partners = carbon_get_theme_option('crb_partners'); ?>
                <?php foreach($partners as $partner): ?>
                <div class="partners-slider__item">
                    <a href="<?php echo $partner['crb_partners_link']; ?>">
                        <img src="<?php echo kama_thumb_src('w=280', $partner['crb_partners_photo']); ?>" alt="">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

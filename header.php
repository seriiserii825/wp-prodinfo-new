<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
	<?php wp_head(); ?>

	<?php if (get_lang() == '_ru'): ?>
        <script src="//code.jivosite.com/widget.js" data-jv-id="wX71fz61DE" async></script>
	<?php elseif (get_lang() == '_en'): ?>
        <script src="//code.jivosite.com/widget.js" data-jv-id="P43ez9KmNM" async></script>
	<?php else: ?>
        <script src="//code.jivosite.com/widget.js" data-jv-id="3t1XznI7YB" async></script>
	<?php endif; ?>

</head>
<body <?php body_class(); ?>>

<header class="main-header">
    <div class="main-header-top__wrapper">
        <div class="main-header-top">
            <div class="main-header-top__wrap address">
				<?php
				$phone = carbon_get_theme_option('crb_phone');
				$phoneClear = clear_phone($phone);
				$mail = carbon_get_theme_option('crb_mail');
				$address = carbon_get_theme_option('crb_address' . get_lang());
				?>
                <div class="main-header-top__item address__item">
                    <i class="fas fa-phone"></i>
                    <a href="tel:<?php echo $phoneClear; ?>"> <?php echo $phone; ?></a>
                </div>
                <div class="main-header-top__item address__item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?php echo $mail; ?>"> <?php echo $mail; ?></a>
                </div>
                <div class="main-header-top__item address__item">
                    <i class="fas fa-map-marker-alt"></i>
                    <a href="#"> <?php echo $address; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-bottom">
        <div class="container">
            <div class="main-header-bottom__wrap">
                <a class="logo" href="<?php echo home_url(); ?>">
					<?php
					$logo_png = carbon_get_theme_option('crb_logo_png');
					?>
					<?php if (!empty($logo_png)): ?>
                        <img src="<?php echo $logo_png; ?>" alt="">
					<?php else: ?>
                        <h4 style="color: red;">Logo from admin</h4>
					<?php endif; ?>
                </a>

				<?php
				wp_nav_menu([
					'theme_location' => 'menu-header',
					'menu' => '',
					'container' => '',
					'container_class' => '',
					'container_id' => '',
					'menu_class' => 'main-menu',
					'menu_id' => 'js-main-menu',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth' => 0,
					'walker' => '',
				]);
				?>
                <div class="sandwitch" id="js-sandwitch">
                    <div class="sandwitch__line sandwitch__line--top"></div>
                    <div class="sandwitch__line sandwitch__line--middle"></div>
                    <div class="sandwitch__line sandwitch__line--bottom"></div>
                </div>

                <div class="wpglobus-lang">
					<?php if (!dynamic_sidebar('language')): ?>
                        <h4 style="color: red;">Место для виджета языков</h4>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>

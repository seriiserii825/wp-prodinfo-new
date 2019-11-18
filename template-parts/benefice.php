<?php
$title_before = carbon_get_theme_option('crb_benefce_title_before'.get_lang());
$title_after = carbon_get_theme_option('crb_benefce_title_after'.get_lang());
$site_title = carbon_get_theme_option('crb_site_title');
?>
<section class="benefice">
	<div class="benefice__content">
		<p><?php echo $title_before; ?> <span class="accent"> <?php echo $site_title; ?> </span> <?php echo $title_after; ?></p>
		<a class="btn" href="<?php echo get_permalink(25); ?>"><?php echo carbon_get_theme_option('crb_benefce_button'.get_lang()); ?></a>
	</div>
</section>

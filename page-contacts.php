<?php

if (!defined('ABSPATH')) exit;
/**
 * Template Name: Контакты
 */
get_header();
$post_id = 25;
$intro_title = carbon_get_post_meta($post_id, 'crb_intro_title'.get_lang());
$intro_bg = carbon_get_post_meta($post_id, 'crb_intro_bg');
?>

<section class="page-intro" style="background-image: url('<?php echo $intro_bg; ?>')">
    <h1 class="section__title"><?php echo $intro_title; ?></h1>
</section>

<?php get_footer();?>

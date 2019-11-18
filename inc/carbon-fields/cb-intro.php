<?php

if (!defined('ABSPATH')) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_technologies_post_options');
function crb_technologies_post_options()
{
	Container::make('post_meta', __('Short text'))
		->set_context('carbon_fields_after_title')
		->where('post_id', '=', 14)
		->or_where('post_id', '=', 19)
		->or_where('post_id', '=', 25)
		->add_fields(array(
			Field::make('text', 'crb_intro_title_ro', __('Title intro ro'))
				->set_width(30),
			Field::make('text', 'crb_intro_title_ru', __('Title intro ru'))
				->set_width(30),
			Field::make('text', 'crb_intro_title_en', __('Title intro en'))
				->set_width(30),

			Field::make('image', 'crb_intro_bg', __('Photo idea'))
				->set_help_text('1349x625')
				->set_value_type('url')
		));
}


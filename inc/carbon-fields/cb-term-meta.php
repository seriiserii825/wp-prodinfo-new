<?php

if (!defined('ABSPATH')) exit;


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_term_meta');
function crb_attach_term_meta()
{
	Container::make('term_meta', __('Intro '))
		->where('term_taxonomy', '=', 'category')
		->add_fields(array(
			Field::make('text', 'crb_intro_title_ro', __('ro'))
				->set_width(30),
			Field::make('text', 'crb_intro_title_ru', __('ru'))
				->set_width(30),
			Field::make('text', 'crb_intro_title_en', __('en'))
				->set_width(30),

			Field::make('image', 'crb_intro_bg', __('Photo category'))
				->set_help_text('1349x625')
				->set_value_type('url'),

			Field::make('image', 'crb_intro_single_bg', __('Photo single'))
				->set_help_text('1349x625')
				->set_value_type('url')
		));
}

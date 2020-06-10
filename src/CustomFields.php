<?php

namespace Badabingbreda\ToolboxDocs;

class ACF {

	public static $acf_enabled = false;

	public static function init() {

		if ( self::$acf_enabled ) return;

		add_action( 'init' , __NAMESPACE__ . '\ACF::setup_acf' );
	}

	public static function setup_acf() {

		if ( class_exists( 'ACF' ) ) {

			self::$acf_enabled = true;

		}

		self::register_meta();

	}

	public static function register_meta() {

		if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_5edfba154141b',
			'title' => 'Category termmeta',
			'fields' => array(
				array(
					'key' => 'field_5edfba5136e83',
					'label' => 'ordering',
					'name' => 'ordering',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'default_value' => 0,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'taxonomy',
						'operator' => '==',
						'value' => 'section',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'left',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
			'acfe_display_title' => '',
			'acfe_autosync' => '',
			'acfe_permissions' => '',
			'acfe_form' => 0,
			'acfe_meta' => '',
			'acfe_note' => '',
		));

		endif;



	}

}

ACF::init();
<?php
/**
 * Date: 2019-05-05
 * @author Alex Isaenko <info@sh14.ru>
 */

namespace Elements;
function __( $text, $domain ) {
	return $text;
}

require 'Element.php';

$form = [
	[
		'type'    => 'Form',
		'content' => [
			[
				'type'       => 'Select',
				'attributes' => [
					'required' => 'true',
					'name'     => 'categories[]',
					'data'     => [
						'post' => 15,
					],
					'class'    => [
						'form-control',
						'light',
					],
				],
				'content'    => [
					[
						'option',
						'content' => 'News',
						[
							'value' => 3,
						],
					],
					[
						'Option',
						'content' => 'Interview',
						[
							'value'    => 7,
//							'selected' => true,
						],
					],
				],
			],
			[
				'type' => 'input',
			],
			[
				'type'       => 'checkbox',
				'before'     => true,
				'content'    => 'Все правильно',
				'attributes' => [
					'name'  => 'flag',
					'value' => 'text 4',
				],
			],
		],
	],
];

//print_r( Element::prepare( $form ) );
print_r( Element::get( $form ) );

// eof

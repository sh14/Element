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
					'super'      => '',
					'user-attr' => 'aaa',
					'required'  => 'true',
					'name'      => 'categories[]',
					'data'      => [
						'post'   => 15,
						'check'  => true,
						'name'   => 'small caption',
						'inside' => [
							'one' => 1,
							'two' => 2,
						],
					],
					'asd'     => 'zxc vbn mkj',
					'class'     => [
						'form-control',
						'light',
					],
					'style'     => [
						'color'  => 'red',
						'border' => [
							'width' => [
								'top'    => '1px',
								'right'  => '2px',
								'bottom' => '3px',
								'left'   => '4px',
							],
							'style' => 'solid',
							'color' => 'black',
						],
					],
				],
				'content'    => [
					[
						'type'       => 'Option',
						'content'    => 'News',
						'attributes' => [
							'value' => 3,
						],
					],
					[
						'type'       => 'Option',
						'content'    => 'Interview',
						'attributes' => [
							'value' => 7,
							'selected' => true,
						],
					],
				],
				'vars'       => [
					'label' => 'Select category',
				],
				'html'       => '<div class="form-group">'
				                . '<label for="%id%" class="form-group__label">%label%</label>'
				                . '<div class="form-group__input">%%</div>'
				                . '</div>',
			],
			[
				'type'       => 'input',
//				'attributes'=>'!!!!!!!!!!!!!!!!!!!!!!!!!!',
				'html'    => '<div class="form__control">%%</div>',
			],
			[
				'type'       => 'checkbox',
				'before'       => true,
				'content'       => 'Все правильно',
				'attributes'=>[
					'name'      => 'flag',
					'value'      => 'text 4',
				],
				'html'    => '<div class="form__control">%%</div>',
			],
		],
		'html'    => '<div class="form">%%</div>',
	],
];

//print_r( Element::prepare( $form ) );
print_r( Element::get( $form ) );

// eof

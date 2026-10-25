<?php
/**
 * Register Full ACF Fields for Nexcent Design
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
    acf_add_local_field_group( array(
        'key' => 'group_nexcent_full_page',
        'title' => 'Nexcent Page Fields',
        'fields' => array(
            array(
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Lessons and insights',
            ),
            array(
                'key' => 'field_hero_title_accent',
                'label' => 'Hero Title Accent (Green)',
                'name' => 'hero_title_accent',
                'type' => 'text',
                'default_value' => 'from 8 years',
            ),
            array(
                'key' => 'field_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'default_value' => 'Where to grow your business as a photographer: site or social media?',
            ),
            array(
                'key' => 'field_hero_button_text',
                'label' => 'Button Text',
                'name' => 'hero_button_text',
                'type' => 'text',
                'default_value' => 'Register',
            ),
            array(
                'key' => 'field_hero_button_url',
                'label' => 'Button URL',
                'name' => 'hero_button_url',
                'type' => 'url',
                'default_value' => '#',
            ),
            array(
                'key' => 'field_hero_image',
                'label' => 'Hero Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'array',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'default',
                ),
            ),
        ),
    ) );
}

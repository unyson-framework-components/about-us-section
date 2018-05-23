<?php if (!defined('FW')) die('Forbidden');

$options = array(
    'members' => array(
        'type' => 'addable-popup',
        'label' => __('Team Members Information', 'galg'),
        'popup-title' => __('Add/Edit Member', 'galg'),
        'desc' => __('Click "Add" buttom to add new team member' , 'galg'),
        'template' => '{{=member_name}}',
        'limit' => 12,
        'popup-size' => 'medium',
        'popup-options' => array(
            'member_photo' => array(
                'type' => 'upload',
                'label' => __('Photo', 'galg'),
                'desc' => __('Please add photo of the member. ATTENTION: The picture should have an extension of 400 by 400 pixels and should not exceed 100kb.', 'galg'),
                'images_only' => true
            ),

            'member_name' => array(
                'type' => 'text',
                'label' => __('Name', 'galg'),
            ),

            'member_position' => array(
                'type' => 'text',
                'label' => __('Position', 'galg'),
            ),

            'member_blockquote' => array(
                'type' => 'textarea',
                'label' => __('Blockquote', 'galg'),
                'desc' => __('Please add a blockquote here', 'galg')
            ),

            'info_text' => array(
                'type' => 'wp-editor',
                'label' => __('Content block', 'galg'),
                'desc' => __('Please add content here', 'galg'),
            )
        ),
    )
);
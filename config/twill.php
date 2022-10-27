<?php
return [

    'enabled' => [
        'dashboard' => true,
        'settings' => true,
    ],

    'dashboard' => [
        'modules' => [
            
           
        ],
    ],

    'block_editor' => [

        'block_preview_render_childs' => true,
        'crops' => [
            'image' => [

                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => null,
                    ],
                ],

                ],
            ],
        ],


    'glide' => [
        'original_media_for_extensions' => ['svg', 'gif'],
        'default_params' => [
            'fm' => 'avif',
            'q' => '100',
            'auto' => 'compress,format',
            'fit' => 'min',
        ],
    ],


    'imgix' => [
        'default_params' => [
            'fm' => 'webp',
            'q' => '70',
            'auto' => 'format',
            'fit' => 'min',
        ],
    ],


    'media_library' => [
        'disk' => 'twill_file_library',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 's3'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Imgix'),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'prefix_uuid_with_local_path' => config('twill.file_library.prefix_uuid_with_local_path', false),
        'translated_form_fields' => false,
        /*
        |--------------------------------------------------------------------------
        | Wysiwyg options for the caption field.
        |--------------------------------------------------------------------------
         */
        'media_caption_use_wysiwyg' => false,
        'media_caption_wysiwyg_options' => [
            'modules' => [
                'toolbar' => [
                    'bold',
                    'italic',
                ],
            ],
        ],
    ],



];
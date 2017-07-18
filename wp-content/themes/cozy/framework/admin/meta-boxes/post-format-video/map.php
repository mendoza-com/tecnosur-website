<?php

/*** Video Post Format ***/

if(!function_exists('cozy_edge_map_post_format_video')) {
    function cozy_edge_map_post_format_video()
    {

        $video_post_format_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('post'),
                'title' => esc_html__('Video Post Format', 'cozy'),
                'name' => 'post_format_video_meta'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_video_type_meta',
                'type' => 'select',
                'label' => esc_html__('Video Type', 'cozy'),
                'description' => esc_html__('Choose video type', 'cozy'),
                'parent' => $video_post_format_meta_box,
                'default_value' => 'youtube',
                'options' => array(
                    'youtube' => esc_html__('Youtube', 'cozy'),
                    'vimeo' => esc_html__('Vimeo', 'cozy'),
                    'self' => esc_html__('Self Hosted', 'cozy')
                ),
                'args' => array(
                    'dependence' => true,
                    'hide' => array(
                        'youtube' => '#edgtf_edgtf_video_self_hosted_container',
                        'vimeo' => '#edgtf_edgtf_video_self_hosted_container',
                        'self' => '#edgtf_edgtf_video_embedded_container'
                    ),
                    'show' => array(
                        'youtube' => '#edgtf_edgtf_video_embedded_container',
                        'vimeo' => '#edgtf_edgtf_video_embedded_container',
                        'self' => '#edgtf_edgtf_video_self_hosted_container')
                )
            )
        );

        $edgtf_video_embedded_container = cozy_edge_add_admin_container(
            array(
                'parent' => $video_post_format_meta_box,
                'name' => 'edgtf_video_embedded_container',
                'hidden_property' => 'edgtf_video_type_meta',
                'hidden_value' => 'self'
            )
        );

        $edgtf_video_self_hosted_container = cozy_edge_add_admin_container(
            array(
                'parent' => $video_post_format_meta_box,
                'name' => 'edgtf_video_self_hosted_container',
                'hidden_property' => 'edgtf_video_type_meta',
                'hidden_values' => array('youtube', 'vimeo')
            )
        );


        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_post_video_id_meta',
                'type' => 'text',
                'label' => esc_html__('Video ID', 'cozy'),
                'description' => esc_html__('Enter Video ID', 'cozy'),
                'parent' => $edgtf_video_embedded_container,

            )
        );


        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_post_video_image_meta',
                'type' => 'image',
                'label' => esc_html__('Video Image', 'cozy'),
                'description' => esc_html__('Upload video image', 'cozy'),
                'parent' => $edgtf_video_self_hosted_container,

            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_post_video_webm_link_meta',
                'type' => 'text',
                'label' => esc_html__('Video WEBM', 'cozy'),
                'description' => esc_html__('Enter video URL for WEBM format', 'cozy'),
                'parent' => $edgtf_video_self_hosted_container,

            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_post_video_mp4_link_meta',
                'type' => 'text',
                'label' => esc_html__('Video MP4', 'cozy'),
                'description' => esc_html__('Enter video URL for MP4 format', 'cozy'),
                'parent' => $edgtf_video_self_hosted_container,

            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_post_video_ogv_link_meta',
                'type' => 'text',
                'label' => esc_html__('Video OGV', 'cozy'),
                'description' => esc_html__('Enter video URL for OGV format', 'cozy'),
                'parent' => $edgtf_video_self_hosted_container,

            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_post_format_video');
}
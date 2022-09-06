<?php
CSF::createSection( CLIPER_OPTION_KEY,
    array(
        'icon'   => 'fa fa-book',
        'title'  => 'Blog',
        'fields' => array(
            array(
                'id'      => 'blog_layout',
                'type'    => 'image_select',
                'title'   => esc_html__( 'Blog layout', 'cliper' ),
                'desc'    => esc_html__( 'Select the Blog style which you want to show on your website.', 'cliper' ),
                'options' => array(
                    'default' => CLIPER_ROOT_IMAGE . '/admin/blog/default.png',
                    'style1'  => CLIPER_ROOT_IMAGE . '/admin/blog/layout-1.png',

                ),
                'default' => 'default',
            ),
            array(
                'id'          => 'blog_sidebar',
                'type'        => 'select',
                'title'       => esc_html__( 'Blog Sidebar', 'cliper' ),
                'placeholder' => 'Select an option',
                'options'     => array(
                    '1' => esc_html__( 'No sidebar', 'cliper' ),
                    '2' => esc_html__( 'Left Sidebar', 'cliper' ),
                    '3' => esc_html__( 'Right Sidebar', 'cliper' ),
                ),
                'default'     => '3',
            ),
            array(
                'id'      => 'blog_author',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author', 'cliper' ),
                'default' => true,
            ),

            array(
                'id'      => 'blog_author_image',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author image', 'cliper' ),
                'default' => false,
            ),

            array(
                'id'      => 'blog_date',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Date', 'cliper' ),
                'default' => true,
            ),

            array(
                'id'      => 'blog_comment',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Comment', 'cliper' ),
                'default' => true,
            ),

            array(
                'id'      => 'blog_category',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Category', 'cliper' ),
                'default' => true,
            ),

            array(
                'id'      => 'blog_category_single',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Category Single', 'cliper' ),
                'default' => false,
            ),
            array(
                'id'      => 'blog_readmore',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Readmore', 'cliper' ),
                'default' => true,
            ),
            array(
                'id'      => 'blog_readmore_text',
                'type'    => 'text',
                'title'   => esc_html__( 'Blog Readmore Text', 'cliper' ),
                'default' => esc_html__( 'Read More', 'cliper' ),
            ),
            array(
                'id'      => 'blog_post_nav',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Navigation', 'cliper' ),
                'default' => true,
            ),
			
			array(
                'id'      => 'related_posts_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Related Posts', 'cliper' ),
                'default' => true,
            ),
			
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog & Page Default Options', 'cliper' ),
            ),
            array(
                'id'      => 'blog_excerpt_word',
                'type'    => 'number',
                'title'   => esc_html__( 'Blog Excerpt Word', 'cliper' ),
                'desc'    => esc_html__( 'Set the words that how many words you want to show in every blog post item.', 'cliper' ),
                'default' => '30',
            ),
        ),
    )
);